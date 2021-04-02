<?php
    $title = null;
    $btn_title = null;
    $hidden_name  = null;
    $delete_btn = null;





    switch (isset($data["isEditPage"]) || isset($_POST['editReturn']) || isset($_POST['editConfirm'])) {
      case true:
        $title = "イベントを編集する";
        $btn_title = "確定";
        $delete_btn = '<input class="delete_btn" style="background-color: rgba(115, 115, 115, .7) ;margin-top: 10px;" name="event_delete" type="submit" value="削除">';

        break;
      case false:
        $title = "イベントを作成する";
        $btn_title = "作成";
        break;
      default:
        $title = "イベントを作成する";
        $btn_title = "作成";
        break;
    }

    ?>

<section style="display:none" class="event-modal post-event">
  <div class="event-form">
    <div class="close-modal">
      <a>×</a>
    </div>　

    <h3>New Event</h3>
    <p>イベント作成</p>

    <form action="<?php echo URLROOT; ?>/mypage/confirm" method="post"
       enctype='multipart/form-data'>


    <div class="form-items">
           <dt class="data-title">イベントのタイトル </dt>
           <dd><input id="event_title" type="text" name="event_title"></dd>
         </div>

         <div class="form-items">
           <dt>イメージ画像 </dt>
           <dd><input id="event_title" type="file" name="event_image"></dd>
         </div>

         <div class="form-items">
           <dt>イベントの日時 </dt>
           <dd><input id="event_date" type="date" name="event_date"></dd>
         </div>

         <div class="form-items">
           <dt>イベントの場所 </dt>
           <dd><input id="event_location" type="text" name="event_location"></dd>
         </div>

         <div class="form-items">
           <dt>環境テーマ（仮）</dt>
           <select id="event_category" class="event-category" name="event_category">
             <option value="ゴミ拾い">ごみ拾い</option>
             <option value="リサイクル">リサイクル</option>
             <option value="植林">植林</option>
           </select>
         </div>

         <div class="form-items">
           <dt>服装 （仮）</dt>
           <dd><input id="event_clothe" type="text" name="event_clothe"></dd>
         </div>

         <div class="form-items">
           <dt>持ち物 （仮）</dt>
           <dd><input id="event_equipment" type="text" name="event_equipment"></dd>
         </div>

         <div class="form-items">
           <dt>体力レベル（仮） </dt>
           <dd><label><input value="初級" type="radio" name="event_level" checked>初級</label>
             <label><input value="中級" type="radio" name="event_level">中級</label>
             <label><input value="上級" type="radio" name="event_level">上級</label>

           </dd>
         </div>

         <div>
           <dt style="font-weight:bold">イベント詳細</dt>
           <dd><textarea id="event_details" name="event_details" class="form-items-textarea"
               placeholder="シュノーケリング前にごみ拾いでウォーミングアップ"></textarea></dd>
         </div>

         <div class="post-event-button">
           <input name="event_submit" type="submit" value="<?php echo $btn_title; ?>" class="event_submit">
           <?php echo $delete_btn ? $delete_btn : ""; ?>
           <input type="hidden" class="e_post_id" name="e_post_id">

         </div>

         <?php

          ///ここから下は投稿確認ページに戻ってきたケース
          if (isset($_POST['submitReturn']) || isset($data["isEditPage"]) || isset($_POST['editReturn']) || isset($_POST['editConfirm'])) {


            if (isset($_POST['submitReturn']) || isset($_POST['editReturn']) || isset($_POST['editConfirm'])) {
              $data = $_POST;
            } else if (isset($data["isEditPage"])) {
              $data = $data["post_detail"];
            }
            $json = json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
            // print_r($json);
            $json = escapeJsonString($json);


          ?>

         <script>
         const parsedJson = JSON.parse('<?php echo $json; ?>');
         </script>
         <?php
          }

          //ここまで。
          ?>


  </form>
  </div><!-- event-form -->




</section><!--  -->
