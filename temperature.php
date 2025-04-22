<?php
require_once 'request_handler.php';
require_once 'classes/Temperature.php';
$converter = new Temperature();
$data = handleRequest($converter);
$units = $converter->getUnits();

echo '<h1>Temperature Converter</h1>';
include 'form.php';
