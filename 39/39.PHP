<?php


require_once 'src/app/PaymentGateway/Stripe/Transaction.php';
require_once 'src/app/PaymentGateway/Paddle/CustomerProfile.php';
require_once 'src/app/PaymentGateway/Paddle/Transaction.php';

spl_autoload_register(function ($class){
  var_dump($class);
});

use App \PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

var_dump($paddleTransaction);