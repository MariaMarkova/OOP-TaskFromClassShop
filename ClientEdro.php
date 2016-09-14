<?php

class ClientEdro extends Client
{
	private $factura;
	
	public function __construct($name, $money, Shop $shop){
		parent::__construct($name, $money, $shop);
		
		$this->factura = 0;
	}
	
}