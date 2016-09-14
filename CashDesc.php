<?php

class CashDesc
{
	
	private $name;
	private $money;
	private $facturi;
	
	public function __construct($name)
	{
		$this->name = $name;
		$this->money = 0;
		$this->facturi = 0;
	}
	
	public function printOborotCashDeck(){
		return $this->name 
		. ' Money: ' . $this->money 
		. ' Facturi: ' . $this->facturi
		. PHP_EOL;
	}
}