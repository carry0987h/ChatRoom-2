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
  //Creates variable for $cookie_name called user
  $cookie_name = "user";
  //When there is a $cookie_name defined then it starts code.
  if(!isset($_COOKIE[$cookie_name])) {
    //creates a varialbe called url to random name generator api.
    $url = "https://uinames.com/api/";
    //creates a variable called obj to get the api.
    $obj = json_decode(file_get_contents($url), true);
    //sets $cookie_value to name of api
    $cookie_value = $obj['name'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 seconds = 1 day x 1 days - to stay anonymous
  }else{
    $cookie_value = $_COOKIE[$cookie_name];

  }
  ?>

  <div class="chatBox" id="ChatView">
    <iframe src="/ChatView.php" width=400 height=400 frameborder=0></iframe>
  </div>
  <div action="/ChatLog.php" class="userBox" onKeyPress="return checkSubmit(event)" id="Box">
    <form method="post">
      <textarea name="posting"></textarea>
    </form>
  </div>
  <div class="container">
  <center>
  <form action="/ChatClear.php" method="post">
    <p>
    <button type="clear">Clear</button>
    </p>
  </form>
  </center>
</div>

</body>

</html>

