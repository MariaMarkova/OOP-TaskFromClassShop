<?php

abstract class AbstractProduct
{
	
	private $name;
	private $price;
	private $quantity;
	
	public function __construct($name,$quantity, $price)
	{
		$this->name = $name;
		$this->price = $price;
		$this->quantity = $quantity;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		if ( $price > 0){
			$this->price = $price;
		}
	}
	
	public function getQuantity() {
		return $this->quantity;
	}
	
	public function setQuantity($quantity) {
		if ( $quantity > 0) {
			$this->quantity = $quantity;
		}
	}
	
	public function getInfoProduct(){
		return $this->name
		. ' Price: ' . $this->price
		. ' Quantity: ' . $this->quantity
		. PHP_EOL;
	}
	
	public function printInfoProduct(){
		return $this->quantity . ' '
		. $this->name . ' product(s). Total Price: '
		. $this->calculateTotalPrice()
		.PHP_EOL;
	}
	
	public abstract function calculateTotalPrice();
}