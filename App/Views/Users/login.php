<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="wrap">
  <h2>Log In</h2>



  <form method="post" action="<?php echo URLROOT; ?>/users/login">

    <div class="row">
      <label for="email">Email</label>
      <input type="text" id="email" name="user_email" value="<?php echo $data['user_email']; ?>">
      <p style="color:orange;"><?php echo $data['email_err'] ?></p>

    </div>
    <label for="password">password</label>
    <input type="password" id="password" name="user_password">
    <p style="color:orange;"><?php echo $data['password_err'] ?></p>


    <button class="btn" name="submit_login">send</button>
  </form>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>