<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/cdd8505698.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/dist/css/main.css">

</head>

<body id="index">
  <!-- emailかパスワードのエラーがあったら -->
<?php
  if(isset($data['email_err']) || isset($data['password_err'])){
    /*  echo print_r($data); */

     $json = json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
      /* print_r($json); */
     $json = escapeJsonString($json);
 ?>
 <script>
   const loginJson = JSON.parse('<?php echo $json ?>')
 </script>

 <?php
  }

?>

<section class="loginmodal"></section><!--  login/signup modal -->
<span class="modal-bg"></span>
<span class="modal-bg-event"></span>
