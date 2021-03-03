<div style="width: 80%;margin: 50px auto;">

  <h2>プロフィール設定</h2>
  <div style="display: flex;">

    <ul style="flex: 0 0 20%;">
      <li><a href="<?php echo URLROOT; ?>/mypage/main">マイページトップ</a></li>
      <li><a href="<?php echo URLROOT; ?>/mypage/setting">プロフィール設定</a></li>
      <li><a href="#">参加予定のイベント</a></li>
      <li><a href="<?php echo URLROOT; ?>/mypage/myevents">応募中のイベント</a></li>
      <li><a href="#">そのほか</a></li>
    </ul>

    <form style="flex: 0 0 60%;" method="post" action="#">

      <div class="row">
        <div for="email">ニックネーム</div>
        <input type="text" id="email" name="user_email" value="test">
      </div>

      <div class="row">
        <div for="email">自己紹介</div>
        <textarea name="" id="" cols="100" rows="10"
          placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, ipsa vel? Consequatur consequuntur obcaecati dolore maxime ex inventore nam quis sit esse. Inventore ducimus culpa, ipsam harum expedita aliquam suscipit?"></textarea>
      </div>

      <div class="row">
        <div for="email">経験</div>
        <textarea name="" id="" cols="100" rows="10"
          placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, ipsa vel? Consequatur consequuntur obcaecati dolore maxime ex inventore nam quis sit esse. Inventore ducimus culpa, ipsam harum expedita aliquam suscipit?"></textarea>
      </div>
      <button class="btn" name="submit_login">send</button>
    </form>

  </div>
</div>