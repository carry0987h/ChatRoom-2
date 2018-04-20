<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="10" />
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
</head>

<body>
  <?php
  $cookie_name = "user";
  if(!isset($_COOKIE[$cookie_name])) {
    $url = "https://uinames.com/api/";
    $obj = json_decode(file_get_contents($url), true);
    $cookie_value = $obj['name'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  }else{
    $cookie_value = $_COOKIE[$cookie_name];

  }
  ?>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      //creates variable to open userlog.
      $handle = fopen("/tmp/userLog.txt", 'a+');
      //writes text iputed in form to userlog.txt
      fwrite($handle, $cookie_value. ": ". $_POST[posting]. "\n");
      fclose($handle);
  }
  ?>
  <div class="chatBox">
    <iframe id="refreshText" src="/ChatView.php" >
    </iframe>
  </div>
  <div action="/ChatRoom.php" class="userBox" onKeyPress="return checkSubmit(event)">
    <form method="post">
    <textarea name="posting"></textarea>
  </form>
  </div>

</body>

</html>

