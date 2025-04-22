<?php
require_once 'request_handler.php';
require_once 'classes/Area.php';
$converter = new Area();
$data = handleRequest($converter);
$units = $converter->getUnits();

echo '<h1>Area Converter</h1>';
include 'form.php';
