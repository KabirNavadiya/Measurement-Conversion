<?php
require_once 'request_handler.php';
require_once 'classes/LengthAndDistance.php';
$converter = new LengthAndDistance();
$data = handleRequest($converter);
$units = $converter->getUnits();

echo '<h1>Length & Distance Converter</h1>';
include 'form.php';


