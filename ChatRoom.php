<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
</head>

<body>
  <div class="chatBox" id="ChatView">
    <iframe src="/ChatView.php" width=400 height=400 frameborder=0 id="innerframe"></iframe>
  </div>
  <div class="userBox" onKeyPress="return checkSubmit(event)" id="Box">
    <div class="container">
    <form action="/ChatLog.php" method="post">
      <textarea id="box" name="posting"></textarea>
      <p>
        Please type in your response here and hit enter.
      </p>
    </form>
    </div>
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

