<?php
header("Content-Type: text/plain");
function getGETParameter($parameter) 
{
  return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
}
$text = getGETParameter('text');
function removeExtraBlanks(string $text): string
{
  $i = 0;
  while ($i < strlen($text) & $text[$i] == ' ') $i++;
  while ($i < strlen($text)) 
  {
    if ($text[$i] != ' ') 
    {
      echo $text[$i];
      $i++;
    } 
    else 
    {
      while ($text[$i] == ' ' & $i < strlen($text)) $i++;
      if ($i != strlen($text)) echo ' ';
    }
  }
}
removeExtraBlanks($text);
echo '#';
    
    
