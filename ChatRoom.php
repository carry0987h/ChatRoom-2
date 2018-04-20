<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
</head>

<body>
  <?php
  $handle = fopen("/tmp/userLog.txt", 'a+');
  fwrite($handle, $_POST[posting]. "\n");
  fclose($handle);
  ?>
  <div class="chatBox">
    <div class="textBox">
    <?php
    $handle = fopen("/tmp/userLog.txt", 'r');
    while(($line = fgets($handle)) !== false){
    echo $line. "<br/>";
    }
    fclose($handle);
    ?>
    </div>
  </div>
  <div action="/ChatRoom.php" class="userBox">
    <form method="post">
    <textarea name="posting"></textarea>
    <input type="submit" value="Submit"/>
  </form>
  </div>

</body>

</html>
