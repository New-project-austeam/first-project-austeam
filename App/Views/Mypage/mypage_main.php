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

  <section class="post-event">
        <h2 class="mypage-section-title">イベント作成する</h2>
        <form action="" post="" class="event-form">
        <dl class="event-form-list">
            <div class="form-items">
              <dt>イベントのタイトル :</dt>
              <dd><input type="text" name=""></dd>
            </div>

            <div class="form-items">
              <dt>イベントの日時 :</dt>
              <dd><input type="date" name=""></dd>
            </div>

            <div class="form-items">
              <dt>イベントの場所 :</dt>
              <dd><input type="text" name=""></dd>
            </div>

            <div class="form-items">
              <dt>環境テーマ（仮）</dt>
              <select class="event-category" name="">
                <option value="">ごみ拾い</option>
                <option value="">リサイクル</option>
                <option value="">植林</option>
              </select>
            </div>

            <div class="form-items">
              <dt>服装 （仮）:</dt>
              <dd><input type="text" name=""></dd>
            </div>

            <div class="form-items">
              <dt>持ち物 （仮）:</dt>
              <dd><input type="text" name=""></dd>
            </div>

            <div class="form-items">
              <dt>体力レベル（仮） :</dt>
              <dd><label><input type="radio" name="" checked>初級</label>
              <label><input type="radio" name="">中級</label>
              <label><input type="radio" name="">上級</label>
            </dd>
            </div>

            <div>
              <dt>イベントの詳細 （仮）</dt>
              <dd><textarea class="form-items-textarea" placeholder="シュノーケリング前にごみ拾いでウォーミングアップ"></textarea></dd>
            </div>

            <div class="post-event-button">
              <input type="submit" value="作成">
            </div>









          </dl>
        </form>
      </section>
</div>
