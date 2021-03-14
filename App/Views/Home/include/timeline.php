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

      <div class="source-quote"><a href='https://www.freepik.com/vectors/background'>Background vector created by freepik - www.freepik.com</a></div>
    </aside><!-- recommendation -->





    <section class="timeline timeline-wrap">


      <section class="wanted">
        <i class="fas fa-trash-alt"></i>
        　　　　　<form class="filter">

          <select>
          <option></option>
            <option selected>近日中のイベント</option>
            <option>新着の投稿</option>
            <option>イベント報告</option>
          </select>
        </form>



        <div class="posted">

          <div class="posted-event">     <!-- flex -->

            <div class="icon">
              <div class="icon-border">
                <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
              </div>
              <p class="nickname"><a href="#">name</a></p>
            </div>


            <div class="poseted-event-contents">
              <div class="posted-event-title">     <!-- flex -->
              <div class="event-title">

                <h4><a>急募!!海岸でのごみ拾い員募集</a></h4>
                </div>
                <div class="favorite-icon">
                   <h3><a>☆</a></h3><!-- 仮 -->
                </div>
              </div><!-- イベントタイトル -->


              <ul class="event-info-list">     <!-- flex -->
                <li><i class="fas fa-trash-alt"></i> 開催日:</li>
                <li><i class="fas fa-trash-alt"></i> 場所:</li>
                <li><i class="fas fa-trash-alt"></i> 環境テーマ:</li>
              </ul>



            </div><!-- posted-event-contents -->



          </div>
          <!--class="posted-event"  -->

          <div  class="event-detail">
              <span style="font-weight: bold;">詳細:</span>
              <p> 突如、大量に漂流ゴミが海岸に打ち上げられてるため清掃必須..突如、大量に漂流ゴミが海岸に打ち上げられてるため清掃必須..</p>
              </div>

              <div  class="event-detail">
              <span style="font-weight: bold;">参加予定:</span>
              <p>3人</p>
              </div>
          <div class="detail">
          <button class="detail-btn"><a>詳細</a></button>
          </div>





        </div><!-- posted-->
      </section><!-- wanted -->


      <section class="record-contents">
      <section class="record">

      <div class="posted">
          <div class="posted-event">     <!-- flex -->
            <div class="icon">
            <div class="icon-border">
                <img src="<?php echo URLROOT; ?>/dist/images/woman-332278_1920.jpg">
              </div>
              <p class="nickname"><a href="#">name</a></p>
            </div>


            <div class="poseted-event-contents">
              <div class="posted-event-title">     <!-- flex -->
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
