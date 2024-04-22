<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{ 
	private $form;   
	private $res;
	
	private $interest;
	private $semiResult;
	private $months;

	public function __construct()
	{
		$this->form = new CalcForm();
		$this->res = new CalcResult();
	}
	public function getParams()
	{
		$this->form->amount = getFromRequest('amount');
		$this->form->years = getFromRequest('years');
		$this->form->interestRate = getFromRequest('interestRate');
	}
	public function validate()
	{
		if (! (isset($this->form->amount) && isset($this->form->years) && isset ($this->form->interestRate))) return false;
		
		if ($this->form->amount == "")
		{
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->years == "")
		{
			getMessages()->addError('Nie podano na ile lat');
		}
		if ($this->form->interestRate == "")
		{
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		if (! getMessages()->isError())
		{
			if (! is_numeric($this->form->amount))
			{
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric($this->form->years))
			{
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric($this->form->interestRate))
			{
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	public function action_calcCompute()
	{
		$this->getparams();
		
		if ($this->validate())
		{
			$this->form->amount = intval($this->form->amount);
			$this->form->years = intval($this->form->years);
			$this->form->interestRate = intval($this->form->interestRate);
			getMessages()->addInfo('Parametry poprawne.');
				
			$this->interest = $this->form->amount * $this->form->years * $this->form->interestRate * 0.01;
			$this->semiResult = $this->form->amount + $this->interest;
			$this->months = $this->form->years * 12;
			
			
			if($this->form->amount > 100000 || $this->form->years > 25)
			{
				if(inRole('admin'))
				{
					$this->res->result = number_format(($this->semiResult/$this->months),2, ',', ''); // 1 - wartosc, 2 - po przecinku, 3 - separator dziesiatek 4 - sep. tysiecy
				}
				else
				{
					getMessages()->addError('Tylko administrator może brać kredyt na więcej niż 100 000 LUB więcej niż 25 lat');
				}
			}
			else
			{
				$this->res->result = number_format(($this->semiResult/$this->months),2, ',', ''); // 1 - wartosc, 2 - po przecinku, 3 - separator dziesiatek 4 - sep. tysiecy
			}

			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

	public function action_calcShow()
	{
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	public function generateView()
	{
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','KacperMularczykRouting');
		getSmarty()->assign('page_description','kalkulator kredytowy');
		getSmarty()->assign('first_part_of_title','kalkulator');
		getSmarty()->assign('second_part_of_title','kredytowy');
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->res);
		
		getSmarty()->display('calcView.tpl');
	}
}
