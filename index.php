<?php
require_once __DIR__ . '/vendor/autoload.php';

use amolkarale\HelloWorld\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");
?>