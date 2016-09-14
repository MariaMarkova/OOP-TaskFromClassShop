<?php

class BundleProduct extends AbstractProduct
{
	
	private $products;
	
	public function __construct($name, $quantity, $price = 0) {
		parent::__construct($name, $quantity, $price = 0);
	
		$this->products = [];
	}
	
	public function addProductsInBundle(AbstractProduct $p){
		$this->products[] = $p;
	}
	
	public function getInfoProduct(){
		return $this->getName()
		. ' Price: ' . $this->getPrice()
		. ' Quantity: ' . $this->getQuantity()
		. PHP_EOL;
	}
	
	public function calculateTotalPrice() {
		$totalPrice = 0;
	
		for($i = 0; $i < count($this->products); $i++){
			$totalPrice += $this->products[$i]->calculateTotalPrice();
		}
	
		return /*$this->getQuantity() . ' ' 
				. $this->getName() . ' bundle product(s). Total Price: '
				. */($totalPrice*$this->getQuantity());
	}
}