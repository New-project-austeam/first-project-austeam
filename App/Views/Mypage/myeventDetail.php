 <?php require APPROOT . '/views/inc/head.php'; ?>
 <?php require APPROOT . '/views/inc/header.php'; ?>

 <div class="wrap">
   <h2>My Post Edit Page</h2>
   <?php require APPROOT . '/views/inc/postForm.php'; ?>

   <a href="<?php echo URLROOT . "/mypage/myevents"; ?>"><button>戻る</button></a>
   <br>
   <?php print_r($data); ?>
 </div>





 <?php require APPROOT . '/views/inc/footer.php'; ?>