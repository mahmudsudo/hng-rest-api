<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    require __DIR__ . "/src/$class.php";
});

set_error_handler("ErrorHandler::handleError");
set_exception_handler("ErrorHandler::handleException");

header("Content-type: application/json; charset=UTF-8");





$gateway = new ApiGateway();

$controller = new ApiController($gateway);

$controller->processCollectionRequest($_SERVER["REQUEST_METHOD"]);













