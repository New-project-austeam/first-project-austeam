<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>


<main class="bg-img">
  <span class="space">スペース</span>

  <div class="contents-wrapper">

    <aside class="side">
      <h3>何入れようかな？</h3>
      <p>参加予定の人</p>
    </aside>

    <section class="main-content">
      <div class="event-content">


        <div class="event-detail-page">


          <div class="posted-event-detail">
            <!-- flex -->

            <div class="posted-event-title">
              <!-- flex -->
              <div class="event-title">
                <h4>"<?php echo $post->event_title ?> 仮ごみ拾いにいく "</h4>
              </div>

              <div class="favorite-icon">
                <h3><a href="#">☆</a></h3><!-- 仮 -->
              </div>
            </div><!-- イベントタイトル -->

            <div class="event-info">
              <div class="event-detail-icon">



                <div class="icon-border2">
                  <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
                </div>

                <div>
                  <li>開催者：<?php echo $post->event_date; ?></li>
                </div>

                <div class="joinning-ppl">
                  <p>参加予定：3人</p>
                  <div class="icon-border3 joinning1">
                    <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
                  </div>
                  <div class="icon-border3 joinning2">
                    <img src="<?php echo URLROOT; ?>/dist/images/kiss-1489654_1920.jpg">
                  </div>
                  <div class="icon-border3 joinning3">
                    <img src="<?php echo URLROOT; ?>/dist/images/CEE67B79-1B39-4F5D-AD01-54568C0413BC_1_105_c.jpeg">
                  </div>
                </div>

              </div><!-- event-detail-icon -->

              <ul class="event-info-list">
                <!-- flex -->

                <li><i class="fas fa-trash-alt"></i> 開催日：<?php echo $post->event_date; ?></li>

                <li><i class="fas fa-trash-alt"></i> 場所：<?php echo $post->event_location; ?></li>
                <li><i class="fas fa-trash-alt"></i> 環境テーマ：<?php echo $post->event_category; ?></li>

              </ul>

            </div>
            <!--event-info  -->













          </div>
          <!--"  -->

          <div class="about-event">
            <p>フレックスアイテムのデフォルトの order は 0 です。したがって 0 より大きい order をもつアイテムは、明示的に order を指定されていないアイテムの後ろに表示されます。

              order には負の値を指定することもでき、ほかのアイテムはそのままの順序を保ちながら一つのアイテムだけを先頭に表示したい場合になどに有用です。先頭に表示したいアイテムに order: -1 を設定することで、0 より小さい order のこのアイテムが常に先頭に表示されるようになります。


            </p>



          </div>


          <div class="extra-info">
            <p>備考：</p>
            <ul class="event-info-list">

              <li>持ち物　<?php echo $post->event_equipment; ?></li>
              <li>体力レベル　<?php echo $post->event_level; ?></li>
            </ul>
          </div>
          <!--extra-info -->


          <!-- 参加するボタン。クラス名変更するかボタンは同じクラスつけて揃えるようにする -->
          <div class="comment-button">
              <input type="submit" class="comment-btn" value="参加する">
            </div>

        </div><!-- detail-page--->




        <section class="notice-board-content">
          <div class="notice-board-title">
            <h3>　掲示版</h3>
          </div>

          <div class="notice-board">




            <div class="chatting1">

              <div class="icon">
                <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
              </div><!-- icon -->


              <div class="says">
                <p>このイベントの開催者のOOです。待ち合わせ場所の変更です。</p>
              </div>

            </div><!-- chatting1 -->


            <div class="chatting2">

              <div class="says">
                <p>このイベントの開催者のOOです。待ち合わせ場所の変更です。</p>
              </div>

              <div class="icon">
                <img src="<?php echo URLROOT; ?>/dist/images/kiss-1489654_1920.jpg">
              </div><!-- icon -->




            </div><!-- chatting2-->

            <div class="chatting1">
              <div class="icon">
                <img src="<?php echo URLROOT; ?>/dist/images/CEE67B79-1B39-4F5D-AD01-54568C0413BC_1_105_c.jpeg">
              </div><!-- icon -->


              <div class="says">
                <p>このイベントの開催者のOOです。待ち合わせ場所の変更です。</p>
              </div>

            </div><!-- chatting1 -->







          </div><!-- notice-board -->

          <form>
            <div class="comment">
              <textarea name="" id=""></textarea>
            </div>
            <div class="comment-button">
              <input type="submit" class="comment-btn">
            </div>
          </form>







        </section>
        　　　　




    </section><!-- main-content -->


  </div><!-- contents-wrapper -->


  <?php
  echo "<pre>";
  print_r($data);
  echo "</pre>";

  ?>
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>
