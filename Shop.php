<?php

class Shop
{
	private $nameShop;
	private $products;
	private $cashDecks;
	const NUMBER_OF_CASH_DECKS_IN_THE_STORE = 3;
	
	public function __construct($name){
		$this->nameShop = $name;
		$this->products = [];
		
		for($i = 0; $i < self::NUMBER_OF_CASH_DECKS_IN_THE_STORE; $i++){
			$this->cashDecks[] = new CashDesc("cashDesc" . ($i+1));
		}
	}
	
	public function getProducts(){
		return $this->products;
	}
	
	public function addProductToTheShop(AbstractProduct $product){
		$this->products[] = $product;
	}
	
	public function infoSoldProducts(){
		for ($i = 0; $i < self::NUMBER_OF_CASH_DECKS_IN_THE_STORE; $i++){
			$this->cashDecks[$i]->printOborotCashDeck();
		}
	}
}