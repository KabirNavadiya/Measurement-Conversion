<?php
function handleRequest($converter)
{
    $result = '';
    $from = '';
    $to = '';
    $input = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $from = $_POST['fromunit'];
        $to = $_POST['tounit'];
        $input = $_POST['value'];
        if (is_numeric($input)) {
            $result = $converter->convert($input, $from, $to);
        } else {
            $result = "Please enter a valid number.";
        }
    }

    return $result;
}
