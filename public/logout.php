<?php

session_start();
if (isset($_SESSION)) {
  $_SESSION = array();
  header("Location: ./index.php");
} else {
  header("Location: ./index.php");
}