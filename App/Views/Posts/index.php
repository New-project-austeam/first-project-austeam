<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/dist/css/main.css">
</head>

<body>
  <h1>welcome</h1>
  <p>Hello from the view!</p>


  <ul>
    <?php foreach ($test_data as $data) : ?>

    <li>
      <b><?php echo htmlspecialchars($data["id"]); ?></b>
      <b><?php echo htmlspecialchars($data["user_email"]); ?></b>
      <b><?php echo htmlspecialchars($data["user_nickname"]); ?></b>
      <b><?php echo htmlspecialchars($data["user_password"]); ?></b>
    </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>