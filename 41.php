<?php

use App\DB;
use App\PaymentGateway\Paddle\Transaction;

require_once 'vendor/autoload.php';

$transaction = new Transaction(25,'Transaction1 ');


$transaction->process();
var_dump($transaction->amount);
