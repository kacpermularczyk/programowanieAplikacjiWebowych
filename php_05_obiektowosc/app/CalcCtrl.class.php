<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl
{
	private $msgs;   
	private $form;   
	private $res;
	private $interest;
	private $semiResult;
	private $months;

	public function __construct()
	{
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->res = new CalcResult();
	}
	public function getParams()
	{
		$this->form->amount = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
		$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
		$this->form->interestRate = isset($_REQUEST ['interestRate']) ? $_REQUEST ['interestRate'] : null;
	}
	public function validate()
	{
		if (! (isset($this->form->amount) && isset($this->form->years) && isset ($this->form->interestRate))) return false;
		
		if ($this->form->amount == "")
		{
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->years == "")
		{
			$this->msgs->addError('Nie podano na ile lat');
		}
		if ($this->form->interestRate == "")
		{
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		if (! $this->msgs->isError())
		{
			if (! is_numeric($this->form->amount))
			{
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric($this->form->years))
			{
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric($this->form->interestRate))
			{
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	public function process()
	{
		$this->getparams();
		
		if ($this->validate())
		{
			$this->form->amount = intval($this->form->amount);
			$this->form->years = intval($this->form->years);
			$this->form->interestRate = intval($this->form->interestRate);
			$this->msgs->addInfo('Parametry poprawne.');
				
			$this->interest = $this->form->amount * $this->form->years * $this->form->interestRate * 0.01;
			$this->semiResult = $this->form->amount + $this->interest;
			$this->months = $this->form->years * 12;
			$this->res->result = number_format(($this->semiResult/$this->months),2, ',', ''); // 1 - wartosc, 2 - po przecinku, 3 - separator dziesiatek 4 - sep. tysiecy
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView()
	{
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','KacperMularczykObiektowosc');
		$smarty->assign('page_description','kalkulator kredytowy');
		$smarty->assign('first_part_of_title','kalkulator');
		$smarty->assign('second_part_of_title','kredytowy');
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->res);
		
		$smarty->display($conf->root_path.'/app/calcView.html');
	}
}
