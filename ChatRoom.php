<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
</head>

<body>
  <div class="chatBox">
    <iframe src="userLog.txt" height="600" width="800"></iframe>
  </div>
  <pre>
  <?php
  echo print_r($_POST[posting]);
  $handle = fopen("/tmp/userLog.txt", 'w+');
  fwrite($handle, $_POST[posting]. "/n");
  fclose($handle);
  ?>
  </pre>
  <div action="/ChatRoom.php" class="userBox">
    <form method="post">
    <textarea name="posting"></textarea>
    <input type="submit" value="Submit"/>
  </form>
  </div>

</body>

</html>
