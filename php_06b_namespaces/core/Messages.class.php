<?php namespace core;

class Messages
{
	private $errors = array();
	private $infos = array();
	private $counter = 0;

	public function addError($message)
	{
		$this->errors[] = $message;
		$this->counter++;
	}
	public function addInfo($message)
	{
		$this->infos[] = $message;
		$this->counter++;
	}
	public function isEmpty()
	{
		return $this->counter == 0;
	}
	public function isError()
	{
		return count($this->errors) > 0;
	}
	public function isInfo()
	{
		return count($this->infos) > 0;
	}
	public function getErrors()
	{
		return $this->errors;
	}
	public function getInfos()
	{
		return $this->infos;
	}
	public function clear()
	{
		$this->errors = array();
		$this->infos = array();
		$this->counter = 0;
	}
}