<?php

class SingleProduct extends AbstractProduct
{
	
	public function __construct($name,$quantity, $price) {
		parent::__construct($name,$quantity, $price);
	}
	
	public function calculateTotalPrice() {
		return /*$this->getQuantity() . ' ' 
				. $this->getName() . ' products. Total Price: ' 
				. */($this->getPrice() * $this->getQuantity());
	}
}