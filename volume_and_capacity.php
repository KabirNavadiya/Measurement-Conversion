<?php
require_once 'request_handler.php';
require_once 'classes/VolumeAndCapacity.php';
$converter = new VolumeAndCapacity();
$data = handleRequest($converter);
$units = $converter->getUnits();

echo '<h1>Volume & Capacity Converter</h1>';
include 'form.php';


