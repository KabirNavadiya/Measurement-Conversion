<?php
require_once 'request_handler.php';
require_once 'classes/MassAndWeight.php';
$converter = new MassAndWeight();
$data = handleRequest($converter);
$units = $converter->getUnits();

echo '<h1>Mass & Weight Converter</h1>';
include 'form.php';
