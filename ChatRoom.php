<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="43200; URL= /ChatClear.php">
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
</head>

<body>
  <div class="title">
    <h1>ANON CHAT</h1>
  </div>
  <?php
  //Creates variable for $cookie_name called user
  $cookie_name = "user";
  //When there is a $cookie_name defined then it starts code.
  if(!isset($_COOKIE[$cookie_name])) {
    //creates a varialbe called url to random name generator api.
    $url = "https://swapi.co/api/";
    //creates a variable called obj to get the api.
    $obj = json_decode(file_get_contents($url), true);
    //sets $cookie_value to name of api
    $cookie_value = $obj['surname'];
    setcookie($cookie_name, $cookie_value, "/"); //Sets username until session is expired
  }else{
    $cookie_value = $_COOKIE[$cookie_name];

  }
  ?>
  <div class="chatBox" id="ChatView">
    <iframe src="/ChatView.php" width=400 height=400 frameborder=0 id="innerframe"></iframe>
  </div>
  <div class="container">
  <div class="userBox" onKeyPress="return checkSubmit(event)" id="Box">
     <center>
    <form action="/ChatLog.php" method="post">
      <textarea id="box" name="posting"></textarea>
      <br>
      <span class="instructions">
        (Please type in your response here and hit enter)
      </span>
    </form>
    </div>
  </center>
  </div>
  <form action="/ChatClear.php" method="post" style="align-content: center; text-align: center;">
    <p>
    <button class="btn" type="clear">Clear</button>
    </p>
  </form>

</body>

</html>

