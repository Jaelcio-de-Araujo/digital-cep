<?php

require_once "vendor/autoload.php";
use JaelcioAraujo\DigitalCep\Seach;

$busca  = new Seach;

$resultado  = $busca -> getAddressFromZipcode('06230060');

print_r($resultado);

