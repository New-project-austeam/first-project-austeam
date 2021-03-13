   <section class="post-event">


     <h2 class="mypage-section-title">イベント作成する</h2>
     <form action="<?php echo URLROOT; ?>/posts/confirm" method="post" class="event-form">
       <dl class="event-form-list">
         <div class="form-items">
           <dt>イベントのタイトル :</dt>
           <dd><input id="event_title" type="text" name="event_title"></dd>
         </div>

         <div class="form-items">
           <dt>イベントの日時 :</dt>
           <dd><input id="event_date" type="date" name="event_date"></dd>
         </div>

         <div class="form-items">
           <dt>イベントの場所 :</dt>
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
           <dt>服装 （仮）:</dt>
           <dd><input id="event_clothe" type="text" name="event_clothe"></dd>
         </div>

         <div class="form-items">
           <dt>持ち物 （仮）:</dt>
           <dd><input id="event_equipment" type="text" name="event_equipment"></dd>
         </div>

         <div class="form-items">
           <dt>体力レベル（仮） :</dt>
           <dd><label><input value="初級" type="radio" name="event_level" checked>初級</label>
             <label><input value="中級" type="radio" name="event_level">中級</label>
             <label><input value="上級" type="radio" name="event_level">上級</label>

           </dd>
         </div>

         <div>
           <dt>イベントの詳細 （仮）</dt>
           <dd><textarea id="event_details" name="event_details" class="form-items-textarea"
               placeholder="シュノーケリング前にごみ拾いでウォーミングアップ"></textarea></dd>
         </div>

         <div class="post-event-button">
           <input name="event_submit" type="submit" value="作成">
         </div>

         <?php
          if (isset($_POST['submitReturn'])) {
            $json = json_encode($_POST, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
            // print_r($json);
          ?>

         <script>
         const parsedJson = JSON.parse('<?php echo $json; ?>');
         console.log(parsedJson);
         window.addEventListener("load", function() {
           $("#event_title").val(parsedJson.event_title);
           $("#event_date").val(parsedJson.event_date);
           $("#event_location").val(parsedJson.event_location);
           $(`option[value=${parsedJson.event_cateogry}]`).prop("checked", true);
           $("#event_clothe").val(parsedJson.event_clothe);
           $("#event_equipment").val(parsedJson.event_equipment);
           $(`input[value='${parsedJson.event_level}']`).prop('checked', true);
           $("#event_details").val(parsedJson.event_details);
         })
         </script>
         <?php
          }
          ?>









       </dl>
     </form>
   </section>