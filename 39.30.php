<?php

require_once 'vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

//$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();


echo  $id ->uuid4();

//composer dump-autoload

//composer dump-autoload -o