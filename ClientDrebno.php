<?php

class ClientDrebno extends Client
{
	
	public function __construct($name, $money, Shop $shop){
		parent::__construct($name, $money, $shop);		
	}
	
}