<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>


<div style="width: 80%;margin: 50px auto;">

  <h2>プロフィール設定</h2>
  <div style="display: flex;">

    <ul style="flex: 0 0 20%;">
      <li><a href="<?php echo URLROOT; ?>/mypage/mypageTop">マイページトップ</a></li>
      <li><a href="<?php echo URLROOT; ?>/mypage/setting">プロフィール設定</a></li>
      <li><a href="#">参加予定のイベント</a></li>
      <li><a href="<?php echo URLROOT; ?>/mypage/myevents">応募中のイベント</a></li>
      <li><a href="#">そのほか</a></li>
    </ul>

    <form style="flex: 0 0 60%;" method="post" action="<?php echo URLROOT; ?>/mypage/setting"
      enctype='multipart/form-data'>

      <h2>あなたのプロフィール</h2>
      <?php flash('edit_intro_success'); ?>
      <div class="row">
        <div for="email">ニックネーム</div>
        <input type="text" id="email" name="user_name" value="<?php echo $data['user_info']->user_name; ?>">
      </div>

      <div class="row">
        <label for='user_image'>ユーザーアイコン</dt>
          <dd><input id="user_image" type="file" name="user_image"></dd>
      </div>

      <div class="row">
        <div for="email">自己紹介</div>
        <textarea name="user_intro" id="" cols="100" rows="10"
          placeholder="<?php echo !isset($data['user_info']->user_intro) ? "あなたの自己紹介を登録してください。" : ""; ?>"><?php echo isset($data['user_info']->user_intro) ? replace_brtagTo($data['user_info']->user_intro) : ""; ?></textarea>
      </div>
      <div class="row">
        <div for="email">経験</div>
        <textarea name="user_experience" id="" cols="100" rows="10"
          placeholder="<?php echo !isset($data['user_info']->user_experience) ? "あなたの経験を登録してください。" : ""; ?>"><?php echo isset($data['user_info']->user_experience) ? $data['user_info']->user_experience : ""; ?></textarea>
      </div>

      <div class="row">
        <div for="email">趣味</div>

        <textarea name="user_hobbies" id="" cols="100" rows="10"
          placeholder="<?php echo !isset($data['user_hobbies']->user_hobbies) ? "あなたの趣味を登録してください。" : ""; ?>"><?php echo isset($data['user_info']->user_hobbies) ? $data['user_info']->user_hobbies : ""; ?>
        </textarea>
      </div>

      <div class="row">
        <div for="email">行動範囲</div>
        <textarea name="user_location" id="" cols="100" rows="10"
          placeholder="<?php echo !isset($data['user_info']->user_location) ? "あなたの行動範囲を登録してください。" : ""; ?>"><?php echo isset($data['user_info']->user_location) ? $data['user_info']->user_location : ""; ?></textarea>
      </div>
      <button class="btn" name="submit_login">send</button>
    </form>

  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>