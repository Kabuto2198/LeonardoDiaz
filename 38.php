<?php


require_once 'src/PaymentGateway/Stripe/Transaction.php';
require_once 'src/PaymentGateway/Paddle/CustomerProfile.php';
require_once 'src/PaymentGateway/Paddle/Transaction.php';

use PaymentGateway\Paddle\Transaction;
use PaymentGateway\Stripe\Transaction as StripeTransaction;
use PaymentGateway\Paddle\CustomerProfile;
//var_dump(new Transaction());


//var_dump(new PaymentGateway\Stripe\Transaction());

//use (function  o const)PaymentGateway\Stripe\Transaction;
//var_dump(new Transaction());

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction ,$paddleCustomerProfile);