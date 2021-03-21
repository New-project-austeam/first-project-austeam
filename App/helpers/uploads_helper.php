<?php



function image_uploader($file_data = null, $type = null)
{

  $result = (object)[
    "err_message" => null,
    "url" => null
  ];


  $user_id = $_SESSION['user_id'];
  $fileName = $file_data['name'];
  $fileTmpName = $file_data['tmp_name'];
  $fileSize = $file_data['size'];
  $fileError = $file_data['error'];
  $fileType = $file_data['type'];
  $errorMessage = null;


  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 2000000) {
        delete_image_file();
        if ($type === "user_image") {
          $fileDestination = '/public/dist/uploads/user_' .  $user_id . "/profile/user_prof_icon." . $fileActualExt;
          $fullFileDestination = ROOT . $fileDestination;
        } else if ($type == "event_image") {
          $fileNameNew = uniqid('', true) . "." . $fileActualExt;
          $fullFileDestination = APPROOT . '/uploads/' . $fileNameNew;
        }


        move_uploaded_file($fileTmpName, $fullFileDestination);
        $result->url = $fileDestination;
        return $result;

        // echo "suceess";
      } else {
        $errorMessage = "ファイルサイズが大きすぎます。";
      }
    } else {
      $errorMessage = $fileError;
    }
  } else {
    $errorMessage = "対応した画像ではありません。";
  }
  $result->err_message = $errorMessage;
  return $result;
}


function delete_image_file()
{
  $user_id = $_SESSION['user_id'];
  $regex = ROOT . "/public/dist/uploads/user_" . $user_id . "/profile/*.*";
  foreach (glob($regex) as $file) {

    // globで取得したファイルをunlinkで1つずつ削除していく
    unlink($file);

    // 削除済みのメッセージを表示
    // echo $file . 'を削除しました。<br>';
  }
}