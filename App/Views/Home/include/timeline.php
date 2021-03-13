<main class="timeline-wrapper">
  <span class="space">スペース</span>

  <div class="timeline-contents">

    <aside class="recommendation">
      <h3>ゴミマップのおすすめ</h3>
    </aside>

    <section class="timeline">

      <form class="search">
        <dl>
          <div>
            <dt>イベント検索</dt>
            <dd><input type="search"></dd>
            <input type="button" value="検索">
          </div>

          <div>
            <dt>日付検索</dt>
            <dd><input type="date"></dd>
            <input type="button" value="検索">
          </div>
        </dl>
      </form>

      <div class="posted-event">
        <diV class="post-event-top">
          <div class="icon-border">
            <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg" width="100px"><!-- アカウントのアイコン　丸 -->
          </div>
          <div class="event-title">
            <h4>海岸のごみ拾い募集</h4><!-- イベントタイトル -->
            <ul>
              <li>日時：2020/9/30</li>
              <li>環境テーマ：<a href="#">ごみ拾い</a></li>
            </ul>
          </div><!-- event-title -->
        </diV><!-- post-event-top -->

        <div class="summary">
          <div class="event-summary">
            <p>Viewport Height（vh）：viewportの高さに基づく。1vhはviewportの高さの1%に相当する
              Viewport Width（vw）：viewportの幅に基づく。1vwはviewportの幅の1%に相当する
              Viewport Minimum（vmin）：viewportの（高さと幅のうち）小さいほうの寸法に基づく。viewportの高さが幅より小さい場合、1vminはviewportの高さの1%に相当する。同様にviewportの幅が高さより小さい場合、1vminはviewportの幅の1%に相当する
              Viewport Maximum（vmax）：viewportの（高さと幅のうち）大きいほうの寸法に基づく。viewportの高さが幅より大きい場合、1vmaxはviewportの高さの1%に相当する。同様にviewportの幅が高さより大きい場合、1vmaxはviewportの幅の1%に相当する


            </p>
          </div>
          <div>
            <img><!-- イメージ画像、任意 -->
          </div>

          <div>
            <p>いいね！</p>
            <p>気になる！</p>
            <p>３人が参加予定</p>
          </div>

          <div>
            <textarea placeholder="コメント入力"></textarea>
          </div>
        </div><!-- event-summary -->
      </div><!-- summary -->

      <div><a href='https://www.freepik.com/photos/background'>Background photo created by rawpixel.com - www.freepik.com</a></div>
    </section> <!-- timeline -->




  </div><!-- timeline-contents -->




  <span class="space">スペース</span>

</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>
