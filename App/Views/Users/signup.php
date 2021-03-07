 <?php require APPROOT . '/views/inc/head.php'; ?>
 <?php require APPROOT . '/views/inc/header.php'; ?>

 <h2>Join Us</h2>



 <form method="post" action="<?php echo URLROOT; ?>/users/signup">

   <div class="row">
     <label for="nickname">Nick Name</label>
     <input type="text" id="nickname" name="user_nickname" value="<?php echo $data['user_name'] ?>">
     <p style="color:orange;"><?php echo $data['name_err'] ?></p>
   </div>

   <div class="row">
     <label for="email">Email</label>
     <input type="email" id="email" name="user_email" value="<?php echo $data['user_email'] ?>">
     <p style="color:orange;"><?php echo $data['email_err'] ?></p>
   </div>

   <div class="row">
     <label for="password">password</label>
     <input type="password" id="password" name="user_password">
     <p style="color:orange;"><?php echo $data['password_err'] ?></p>
   </div>
   <div class="row">
     <label for="confirm_password">confirm password</label>
     <input type="password" id="confirm_password" name="confirm_password">
     <p style="color:orange;"><?php echo $data['confirm_password_err'] ?></p>
   </div>

   <button class="btn" name="submit_signup">send</button>
 </form>

 <?php require APPROOT . '/views/inc/footer.php'; ?>