<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/LeonardoDiaz/' . lcfirst(str_replace('\\', '/', $class)) . 'php';

    if (file_exists($path)) {
        require $path;
    }
}

);

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

var_dump($paddleTransaction);

//composer require ramsey/uuid