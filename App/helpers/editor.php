<?php


function replace_brtagTo($text)
{
  $replacedText = preg_replace('/<br[[:space:]]*\/?[[:space:]]*>/i', "\n", $text);
  return  str_replace("<br />", "", $text);
}