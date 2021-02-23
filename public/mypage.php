<?php
session_start();
if (!isset($_SESSION['user_email'])) {
  header('Location: ./login.php');
}
include('./includes/head.php');
include('./includes/navigation.php');
?>


<h1>My Page</h1>





<?php

include('./includes/footer.php');