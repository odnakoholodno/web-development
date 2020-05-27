<?php
header('Content-Type: text/plain');
function getGETParameter($parameter)
{
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
}
$age = '';
$first_name = '';
$last_name = '';
$email = '';
$text = '';
$age = getGETParameter('age');
$first_name = getGETParameter('first_name');
$last_name = getGETParameter('last_name');
$email = getGETParameter('email');
mkdir('data/', 0777, true);
$filename = 'data/' . $email . '.txt';
$fp = fopen($filename, 'w');
if ($last_name <> '')
{
    $text .= 'Фамилия = ' . $last_name . '; ';
}
if ($first_name <> '')
{
    $text .= 'Имя = ' . $first_name . '; ';
}
if ($age <> '')
{
    $text .= 'Возраст = ' . $age . '; ';
}
if ($email <> '')
{
    $text .= 'Email = ' . $email . '; ';
}
fwrite($fp, $text);
fclose($fp);
?>
