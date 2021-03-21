<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="wrap">
  <h2>Confirm Page</h2>

  <?php if (isset($data['is_edit'])) : ?>
  <p>以下の内容で編集してよろしいでしょうか？</p>

  <form action="<?php echo URLROOT; ?>/mypage/post_edit" method="post">
    <?php else : ?>
    <p>以下の内容で登録してよろしいでしょうか？</p>

    <form action="<?php echo URLROOT; ?>/mypage/register" method="post">
      <?php endif; ?>


      <ul>
        <li>
          <p>イベントのタイトル: <?php echo $data['event_title']; ?></p>
          <input type="hidden" value="<?php echo $data['event_title']; ?>" name="event_title">
        </li>
        <li>
          <p>イベントの日時: <?php echo $data['event_date']; ?></p>
          <input type="hidden" value="<?php echo $data['event_date']; ?>" name="event_date">
        </li>
        <li>
          <p>イベントの場所: <?php echo $data['event_location']; ?></p>
          <input type="hidden" value="<?php echo $data['event_location']; ?>" name="event_location">
        </li>
        <li>
          <p>環境テーマ: <?php echo $data['event_category']; ?></p>
          <input type="hidden" value="<?php echo $data['event_category']; ?>" name="event_category">
        </li>
        <li>
          <p>服装: <?php echo $data['event_clothe']; ?></p>
          <input type="hidden" value="<?php echo $data['event_clothe']; ?>" name="event_clothe">
        </li>
        <li>
          <p>持ち物: <?php echo $data['event_equipment']; ?></p>
          <input type="hidden" value="<?php echo $data['event_equipment']; ?>" name="event_equipment">
        </li>
        <li>
          <p>体力レベル: <?php echo $data['event_level']; ?></p>
          <input type="hidden" value="<?php echo $data['event_level']; ?>" name="event_level">
        </li>
        <li>
          <p>イベントの詳細: <?php echo $data['event_details']; ?></p>
          <input type="hidden" value="<?php echo $data['event_details']; ?>" name="event_details">
        </li>

        <div>
          <?php if (isset($data['is_edit'])) : ?>
          <button name="editConfirm">編集する</button>
          <button name="editReturn">戻る</button>
          <?php else : ?>
          <button name="submitConfirm">登録する</button>
          <button name="submitReturn">戻る</button>
          <?php endif; ?>


        </div>
    </form>



    </ul>
</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>