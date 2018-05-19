<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
  <script>
  $(document).ready(function() {
 	 $("#responsecontainer").load("/ChatView.php");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('/ChatView.php');
   }, 9000);
   $.ajaxSetup({ cache: false });
    });
  </script>
</head>

<body>
  <?php
  //Creates variable for $cookie_name called user
  $cookie_name = "user";
  //When there is a $cookie_name defined then it starts code.
  if(!isset($_COOKIE[$cookie_name])) {
    //creates a varialbe called url to random name generator api.
    $url = "https://uinames.com/api/?ext/";
    //creates a variable called obj to get the api.
    $obj = json_decode(file_get_contents($url), true);
    //sets $cookie_value to name of api
    $cookie_value = $obj['password'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 seconds = 1 day x 1 days - to stay anonymous
  }else{
    $cookie_value = $_COOKIE[$cookie_name];

  }
  ?>
  <div class="chatBox" id="ChatView">
    <iframe src="/ChatView.php" width=400 height=400 frameborder=0 id="innerframe"></iframe>
  </div>
  <div class="userBox" onKeyPress="return checkSubmit(event)" id="Box">
    <form action="/ChatLog.php" method="post">
      <textarea id="box" name="posting"></textarea>
      <p>
        Please type in your response here and hit enter.
      </p>
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

