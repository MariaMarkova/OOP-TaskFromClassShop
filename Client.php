<?php

abstract class Client
{
	
	private $name;
	private $card;
	private $money;
	private $buyWithMoney = true;
	private $shop;
	
	public function __construct($name, $money, Shop $shop){
		$this->name = $name;
		$this->money = $money;
		$this->card = [];	
		$this->shop = $shop;
	}
	
	public function setMoney($money){
		if ($money > 0){
			$this->money = $money;
		}
	}
	
	public function getMoney(){
		return $this->money;
	}
	
	public function getCard(){
		return $this->card;
	}
	
	public function addToCard(AbstractProduct $product, $quantity){
// 		$this->card['name'][] = $product->getName();
// 		$this->card['quantity'][] = $quantity;

		if ($product->getQuantity() > $quantity ) {
			$this->card[$product->getName()] = $quantity;
			$allProductsInTheShop = $this->shop->getProducts();
			
			for ($i = 0; $i < count($allProductsInTheShop); $i++){
				if ($allProductsInTheShop[$i]->getName() == $product->getName()){
					$allProductsInTheShop[$i]->setQuantity($allProductsInTheShop[$i]->getQuantity() - $quantity);
				}
			}
		} else {
			echo "You want to buy more " . $product->getName() . " than there is in the shop." , PHP_EOL;
		}
	}
	
	public function buyProducts($buyWithMoney = true){
		$totalPrice = 0;
			
			$productsInTheCard = $this->card;
			
			$allProductsInTheShop = $this->shop->getProducts();
			
			foreach ($productsInTheCard as $key=>$value){
				for ($i = 0; $i < count($allProductsInTheShop); $i++){
					if ($allProductsInTheShop[$i]->getName() == $key){
						$totalPrice += $allProductsInTheShop[$i]->getPrice() * $value;
					}
				}
			}
			
		if($buyWithMoney){
			if($this->money > $totalPrice){
				$this->money -= $totalPrice;
			}else{
				echo "No enought money. Remove product from the card." , PHP_EOL;
			}
			
		}else {
			//$this->factura += $totalPrice;
		}
	}
	
	//TODO
	public function removeProductFromTheCard(AbstractProduct $product){
		
	}
	
}