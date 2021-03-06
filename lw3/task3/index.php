<?php
header('Content-Type: text/plain');
function getGETParameter($parameter)
{
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
}
$password = getGETParameter('password');
$len = strlen($password);
if ($password == null || $len == 0)
{
    echo 'Вы не передали параметр';
}
else
{
    echo passwordStrength($password);
}
function passwordStrength(string $password): int
{
    $strength = 0;
    $len = strlen($password);
    $digits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $lowLetters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $highLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $countDigits = 0;
    $countLow = 0;
    $countHigh = 0;
    $withoutrepeat = '';
    if ($len != 0)
    {
        $strength = 4 * $len;
    }

    for ($i = 0; $i < $len; $i++)
    {
        if (in_array($password[$i], $digits))
        {
            $countDigits++;
        }
        if (in_array($password[$i], $lowLetters))
        {
            $countLow++;
        }
        if (in_array($password[$i], $highLetters))
        {
            $countHigh++;
        }
        if (!(stripos($withoutrepeat, $password[$i])))
        {
            $withoutrepeat = $withoutrepeat . $password[$i];
        }
    }
    $len2 = strlen($withoutrepeat);
    for ($i = 0; $i < $len2; $i++)
    {
        if (substr_count($password, $withoutrepeat[$i]) > 1)
        {
          $strength = $strength - substr_count($password, $withoutrepeat[$i]);
        }
    }
    if ($countDigits == 0)
    {
        $strength = $strength - $len;
    }
    else
    {
        $strength = $strength + (4 * $countDigits);
    }
    $strength = $strength + (2 * ($len - $countLow));
    $strength = $strength + (2 * ($len - $countHigh));
    if ($countLow == 0 && $countHigh == 0)
    {
        $strength = $strength - $len;
    }
    return $strength;
}
