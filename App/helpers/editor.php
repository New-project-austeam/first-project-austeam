<?php

// phpの改行コードをhtmlのbrタグに変える
function replace_brtagTo($text)
{
  $replacedText = preg_replace('/<br[[:space:]]*\/?[[:space:]]*>/i', "\n", $text);
  return  str_replace("<br />", "", $text);
}

// phpの改行コードをjson_encodeする際にエスケープする。
function escapeJsonString($value)
{
  # list from www.json.org: (\b backspace, \f formfeed)    
  $escapers =     array("\\",     "/",   "\"",  "\n",  "\r",  "\t", "\x08", "\x0c");
  $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t",  "\\f",  "\\b");
  $result = str_replace($escapers, $replacements, $value);
  return $result;
}