 <?php require APPROOT . '/views/inc/head.php'; ?>
 <?php require APPROOT . '/views/inc/header.php'; ?>



 <div class="wrap myevents">
   <?php
    flash('register_new_event');
    ?>
   <h2>応募中のイベント</h2>

   <?php //print_r($data['myposts']); 
    ?>

   <div class="myevents_box">

     <?php
      $myposts = $data['myposts'];
      foreach ($myposts as $post) {

      ?>
     <a href="<?php echo URLROOT . "/mypage/post_edit/" . $post->post_id ?>" class="myevent_list">

       <p>
         <span class="title">イベントタイトル</span><?php echo $post->event_title ?><span
           class="title mg-l">開催日</span><?php echo $post->event_date; ?><span
           class="title mg-l">イベント作成日</span><?php echo $post->created_at; ?>
       </p>
       <p><span class="title">詳細</span><?php echo $post->event_details; ?></p>

     </a>

     <?php
      }
      ?>

   </div>
 </div>

 <?php require APPROOT . '/views/inc/footer.php'; ?>