<?php
require_once 'vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction();

echo $transaction::STATUS_PAID;