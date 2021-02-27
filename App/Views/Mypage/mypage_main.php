<div style="width: 80%;margin: 50px auto;">

  <h1 style="margin-bottom:10px;">My Page</h1>

  <div style="display: flex;">
    <ul style="flex: 0 0 20%;">
      <li><a href="/mypage/main">マイページトップ</a></li>
      <li><a href="/mypage/setting">プロフィール設定</a></li>
      <li><a href="#">参加予定のイベント</a></li>
      <li><a href="/mypage/myevents">応募中のイベント</a></li>
      <li><a href="#">そのほか</a></li>
    </ul>

    <div style="flex: 0 0 60%;">
      <li style="margin-bottom: 10px;">
        <div>ニックネーム</div>
        <div>
          <?php echo $_SESSION["user_nickname"]; ?>
          さん
        </div>

      </li>
      <li style="margin-bottom: 10px;">
        <div>自己紹介</div>
        <div>Lorem ipsum dolor, sit amet consectetur adipisicing
          elit. Excepturi, optio
          accusamus ea hic quos vel earum culpa a rerum iste autem soluta ratione consequuntur accusantium harum
          cupiditate repellat nesciunt libero?</div>
      </li>
      <li style="margin-bottom: 10px;">
        <div for="自己紹介">経験</div>
        <div>Lorem ipsum dolor, sit amet consectetur
          adipisicing elit. Excepturi, optio
          accusamus ea hic quos vel earum culpa a rerum iste autem soluta ratione consequuntur accusantium harum
          cupiditate repellat nesciunt libero?</div>
      </li>

    </div>
  </div>
</div>
