<?php
require_once 'request_handler.php';
require_once 'classes/Speed.php';
$converter = new Speed();
$data = handleRequest($converter);
$units = $converter->getUnits();

echo '<h1>Speed Converter</h1>';
include 'form.php';
