 <h2>Join Us</h2>



 <p style="color: orangered">
   <?php echo $test_is_signup == "failed" ? "※  user already exists with that email address" : null; ?>
 </p>
 <form method="post" action="<?php echo URLROOT; ?>/home/signup">

   <div class="row">
     <label for="nickname">Nick Name</label>
     <input type="text" id="nickname" name="user_nickname">
   </div>

   <div class="row">
     <label for="email">Email</label>
     <input type="text" id="email" name="user_email">
   </div>

   <label for="password">password</label>
   <input type="password" id="password" name="user_password">

   </div>

   <button class="btn" name="submit_signup">send</button>
 </form>