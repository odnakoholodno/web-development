<?php
header('Content-Type: text/plain');
function getGETParameter($parameter)
{
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
}
$identifier = getGETParameter('identifier');
if ($identifier == null)
{
    echo 'Вы не передали параметр';
}
else
{
    if (checkIdentifier($identifier))
    {
        echo $identifier . ' является идентификатором'
    }
    else
    {
        echo $identifier . ' не является идетнификатором'
    }
}

function checkIdentifier(string $identifier): bool
{
    $result = true;
    $letters = ['a' .. 'z'];
    $digits = ['0' .. '9'];
    if (ctype_digit($identifier[0]))
    {
        $result = false;
    }
    else
    {
        for ($i = 0; $i < strlen($identifier); ++$i)
        {
            if (in_array($identifier[$i], $letters) || in_array($identifier[$i], $digits) && $result)
            {
                $result = true;
            }
            else
            {
                $result = false;
                break; 
            }
        }
    }
    result $result;
}
