<main class="bg-img">
  <span class="space">スペース</span>

  <div class="timeline-wrapper">


    <aside class="search timeline-wrap">
      <h2 class="aside-title"><i class="fas fa-trash-alt"></i> Search</h2>
      <form>

        <dl class="search-list">
          <dd><input type="search" placeholder="イベント検索">
            <input type="submit" value="検索">
          </dd>

          <dd><input type="date">
            <input type="submit" value="検索">
          </dd>
        </dl>
      </form>
      <div class="recommendation">
        <h3 class="aside-title"><i class="fas fa-trash-alt"></i> ゴミマップのおすすめ</h3>
      </div>

      <div class="source-quote"><a href='https://www.freepik.com/vectors/background'>Background vector created by
          freepik - www.freepik.com</a></div>
    </aside><!-- recommendation -->





    <section class="timeline timeline-wrap">


      <section class="wanted">

        　　　　　<form class="filter">

          <i class="fas fa-trash-alt"></i>　<select>
            <option></option>
            <option selected>近日中のイベント</option>
            <option>新着の投稿</option>
            <option>イベント報告</option>
          </select>
        </form>


        <?php
        $myposts = $data['allPosts'];
        foreach ($myposts as $post) {

        ?>
          <div class="posted">
<!--  -->

            <div class="posted-event">
              <!-- flex -->
              <div class="openning">
                <p>募集中<!DOCTYPE html>
                <html lang="ja">
                <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Document</title>
                </head>
                <body>

                </body>
                </html><!DOCTYPE html>
                <html lang="ja">
                <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Document</title>
                </head>
                <body>

                </body>
                </html></p>
              </div>
              <div class="icon">
                <div class="icon-border">
                  <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
                </div>
                <p class="nickname"><a href="#">name</a></p>
              </div>


              <div class="poseted-event-contents">

                <div class="posted-event-title">
                  <!-- flex -->
                  <div class="event-title">

                    <h4><a><?php echo $post->event_title ?></a></h4>
                  </div>
                  <div class="favorite-icon">
                    <h3><a href="#">☆</a></h3><!-- 仮 -->
                  </div>
                </div><!-- イベントタイトル -->


                <ul class="event-info-list">
                  <!-- flex -->
                  <li><i class="fas fa-trash-alt"></i> 開催日:<?php echo $post->event_date; ?></li>
                  <li><i class="fas fa-trash-alt"></i> 場所:<?php echo $post->event_location; ?></li>
                  <li><i class="fas fa-trash-alt"></i> 環境テーマ:<?php echo $post->event_category; ?></li>
                </ul>



              </div><!-- posted-event-contents -->



            </div>
            <!--class="posted-event"  -->

            <div class="event-detail">
              <span style="font-weight: bold;">詳細:　</span>
              <p> <?php echo $post->event_details; ?></p>
            </div>




            <div class="joinning-ppl">

                <span style="font-weight: bold;">参加予定:　3人</span>

              <div class="joinner-icons">
                <div class="icon-border3 joinning1">
                  <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
                </div>
                <div class="icon-border3 joinning2">
                  <img src="<?php echo URLROOT; ?>/dist/images/kiss-1489654_1920.jpg">
                </div>
                <div class="icon-border3 joinning3">
                  <img src="<?php echo URLROOT; ?>/dist/images/CEE67B79-1B39-4F5D-AD01-54568C0413BC_1_105_c.jpeg">
                </div>
              </div><!-- joinner-icons -->
            </div>






            <div class="detail">
              <button class="detail-btn"><a href="<?php echo URLROOT . "/posts/details/" . $post->post_id; ?>">詳細</a></button>
            </div>





          </div><!-- posted-->

        <?php
        }
        ?>


      </section><!-- wanted -->


      <section class="record-contents">
        <section class="record">

          <div class="posted">
            <div class="posted-event">
              <!-- flex -->
              <div class="icon">
                <div class="icon-border">
                  <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
                </div>
                <p class="nickname"><a href="#">name</a></p>
              </div>


              <div class="poseted-event-contents">
                <div class="posted-event-title">
                  <!-- flex -->
                  <div class="event-title">
                    <h4><a href="#">"清掃してきました"</a></h4>
                  </div>
                  <div class="favorite-icon">
                    <h3><a>☆</a></h3><!-- 仮 -->
                  </div>
                </div><!-- イベントタイトル -->
                <p class="record-summary">台風１０号により被害が大きかった地域での清掃活動を行ってきました！台風１０号により被害が大きかった地域での清掃活動を行ってきました！</p>
              </div><!-- posted-event-contents -->


            </div>
            <!--class="posted-event"  -->

            <div class="detail">
              <button class="detail-btn"><a>詳細</a></button>
            </div>





          </div><!-- posted-->
        </section> <!-- record -->

      </section>







    </section><!-- timeline -->



  </div><!-- timeline-wrapper -->








  </div><!-- timeline-contents -->

  <div class="wrap myevents">
    <?php
    flash('register_new_event');
    ?>
    <h2>近日中のイベント</h2>

    <?php //print_r($data['myposts']);
    ?>

    <div class="myevents_box">

      <?php
      $myposts = $data['allPosts'];
      echo "<pre>";
      print_r($myposts); /* print_r($myposts)は中身を表示する */
      echo "</pre>";
      foreach ($myposts as $post) {

      ?>
        <a href="#" class="myevent_list">

          <p>
            <span class="title">イベントタイトル</span><?php echo $post->event_title ?><span class="title mg-l">開催日</span><?php echo $post->event_date; ?><span class="title mg-l">イベント作成日</span><?php echo $post->created_at; ?>
          </p>
          <p><span class="title">詳細</span><?php echo $post->event_details; ?></p>

        </a>

      <?php
      }
      ?>

    </div>
  </div>




  <span class="space">スペース</span>

</main>


<?php require APPROOT . '/views/inc/footer.php'; ?>
