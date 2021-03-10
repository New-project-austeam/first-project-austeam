 <?php require APPROOT . '/views/inc/head.php'; ?>
 <?php require APPROOT . '/views/inc/header.php'; ?>




 <div style="width: 80%;margin: 50px auto;">

   <h1 style="margin-bottom:10px;">My Page</h1>

   <div style="display: flex;">
     <ul style="flex: 0 0 20%;">
       <li><a href="<?php echo URLROOT; ?>/mypage/mypageTop">マイページトップ</a></li>
       <li><a href="<?php echo URLROOT; ?>/mypage/setting">プロフィール設定</a></li>
       <li><a href="#">参加予定のイベント</a></li>
       <li><a href="<?php echo URLROOT; ?>/mypage/myevents">応募中のイベント</a></li>
       <li><a href="#">そのほか</a></li>
     </ul>

     <div style="flex: 0 0 60%;">
       <li style="margin-bottom: 10px;">
         <div>ニックネーム</div>
         <div>
           <?php echo $data['user_info']->user_name; ?>
           さん
         </div>

       </li>
       <li style="margin-bottom: 10px;">
         <div>自己紹介</div>
         <div> <?php

                if (isset($data['user_info']->user_intro)) {
                  echo $data['user_info']->user_intro;
                } else {
                  echo "<span style='color:orange;'>自己紹介が登録されていません。<br>ブロフィール設定で登録しましょう。</span>";
                }
                ?>
         </div>
       </li>
       <li style="margin-bottom: 10px;">
         <div for="自己紹介">経験</div>
         <div> <?php

                if (isset($data['user_info']->user_experience)) {
                  echo $data['user_info']->user_experience;
                } else {
                  echo "<span style='color:orange;'>経験が登録されていません。<br>ブロフィール設定で登録しましょう。</span>";
                }
                ?>
         </div>
       </li>
       <li style="margin-bottom: 10px;">
         <div for="自己紹介">趣味</div>
         <div> <?php
                if (isset($data['user_info']->user_hobbies)) {
                  echo $data['user_info']->user_hobbies;
                } else {
                  echo "<span style='color:orange;'>趣味が登録されていません。<br>ブロフィール設定で登録しましょう。</span>";
                }
                ?>
         </div>
       </li>
       <li style="margin-bottom: 10px;">
         <div for="自己紹介">行動範囲</div>
         <div> <?php

                if (isset($data['user_info']->user_location)) {
                  echo $data['user_info']->user_location;
                } else {
                  echo "<span style='color:orange;'>行動範囲が登録されていません。<br>ブロフィール設定で登録しましょう。</span>";
                }
                ?>
         </div>
       </li>
     </div>
   </div>


   <?php require APPROOT . '/views/inc/postForm.php'; ?>

 </div>

 <?php require APPROOT . '/views/inc/footer.php'; ?>