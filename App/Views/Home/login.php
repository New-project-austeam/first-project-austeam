<h2>Log In</h2>


<p style="color: orangered">
  <?php echo $test_is_login == "failed" ? "※ no user registered with that email address and password" : null; ?>
</p>
<p style="color: orangered;">
  <?php echo $test_is_signup == true ? "Please Log in with the registered user email and password" : null; ?>
</p>

<form method="post" action="<?php echo URLROOT; ?>/home/login">

  <div class="row">
    <label for="email">Email</label>
    <input type="text" id="email" name="user_email">
  </div>
  <label for="password">password</label>
  <input type="password" id="password" name="user_password">
  </div>

  <button class="btn" name="submit_login">send</button>
</form>