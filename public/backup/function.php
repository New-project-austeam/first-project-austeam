<?php



function get_page_url()
{
  $uri = rtrim($_SERVER["REQUEST_URI"], '/');
  $uri = substr($uri, strrpos($uri, '/') + 1);
  return $uri;
}