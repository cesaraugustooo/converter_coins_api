<?php

require_once 'main.php';

//http://localhost:8000/exchange/USD/BRL/?amount=100&price=5.58

$url = $_SERVER['REQUEST_URI'];
$amount = $_GET['amount'];
$price = $_GET['price'];
$moedas = ['BRL','USD','EUR'];
$count = 0;

preg_match("#/exchange/([A-Z]{3})/([A-Z]{3})#", $url , $matches);
ValidarMoedas($count,$moedas,$matches);
GetRequest($amount,$price,$matches);



