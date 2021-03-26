<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>

<?php
if (isset($_SESSION['user_email'])) {
  require APPROOT . '/views/Home/include/timeline.php';
} else {
  require APPROOT . '/views/Home/include/guide.php';
}
?>
