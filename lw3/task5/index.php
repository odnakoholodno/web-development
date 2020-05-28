<?php
header('Content-Type: text/plain');
function getGETParameter($parameter)
{
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
}
$email = getGETParameter('email');
$filename = 'data/' . $email . '.txt';
$fp = fopen($filename, 'r');
$first_name = fgets($fp);
$last_name = fgets($fp);
$email = fgets($fp);
$age = fgets($fp);
$text = $first_name . $last_name . $email . $age;
echo $text;

