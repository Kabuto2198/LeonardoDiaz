<?php
require_once 'vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction();



$transaction = new Transaction();

$transaction->setStatus('ahsfbasbhfas');

var_dump($transaction);