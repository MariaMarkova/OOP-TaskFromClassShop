<?php

require_once 'autoload.php';

$milk = new SingleProduct('milk', 25, 1.95);
$water = new SingleProduct('water', 100, 0.8);
$apples = new SingleProduct('apples', 10, 0.5);
$cokies = new SingleProduct('cokies', 36, 2);
$meal = new SingleProduct('meal', 5, 9.6);

$bMilk = new SingleProduct('milk', 1, 1.95);
$bMiusli = new SingleProduct('miusli', 1, 5);

$dMeat = new SingleProduct('meat', 5, 9);
$dPodpravka = new SingleProduct('Podpravka', 1, 0.9);

$lPizza = new SingleProduct('Pizza', 1, 11.5);
$lCola = new SingleProduct('Cola', 2, 2);

$breakfast = new BundleProduct('breakfast', 2);
$diner = new BundleProduct('dinner', 5);
$lunch = new BundleProduct('lunch', 3);

$breakfast->addProductsInBundle($bMilk);
$breakfast->addProductsInBundle($bMiusli);

$diner->addProductsInBundle($dMeat);
$diner->addProductsInBundle($dPodpravka);

$lunch->addProductsInBundle($lPizza);
$lunch->addProductsInBundle($lCola);

// echo $milk->calculateTotalPrice() . PHP_EOL;
// echo $lunch->calculateTotalPrice() . PHP_EOL;

// echo $milk->printInfoProduct();
// echo $lunch->printInfoProduct();

$shop = new Shop('Billa');
$shop->addProductToTheShop($milk);
$shop->addProductToTheShop($water);
$shop->addProductToTheShop($apples);
$shop->addProductToTheShop($meal);
$shop->addProductToTheShop($cokies);

$shop->addProductToTheShop($breakfast);
$shop->addProductToTheShop($diner);
$shop->addProductToTheShop($lunch);

//var_dump($shop);

$clientEdro = new ClientEdro('Peter', 100, $shop);
$clientDrebno = new ClientDrebno('Sisi', 20, $shop);

$clientEdro->addToCard($milk, 2);
$clientEdro->addToCard($apples, 7);

//var_dump($clientEdro->getCard());

//var_dump($shop);
$clientEdro->buyProducts();

//var_dump($clientEdro);