<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="43200; URL= /ChatClear.php">
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="title">
    <h1>ANON CHAT
    <a href="https://github.com/rbretmounet/ChatRoom" class="fa fa-github" aria-hidden="true" style="font-size:36px"></a></h1>
  </div>
  <div class="chatBox" id="ChatView">
    <iframe src="/ChatView.php" width=400 height=400 frameborder=0 id="innerframe"></iframe>
  </div>
  <div class="container">
  <div class="userBox" onKeyPress="return checkSubmit(event)" id="Box">
     <center>
    <form action="/ChatLog.php" method="post">
      <span><textarea id="box" name="posting" placeholder="Please type in your response here and hit enter"></textarea>
          <form action="/ChatClear.php" method="post" style="align-content: center; text-align: center;">
          <button class="btn" type="clear">Clear</button>
          </form>
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

<footer>
  Created By: <a href="https://github.com/rbretmounet/">Raphael Bret-Mounet</a> & <a href="https://github.com/staceymay">Stacey Luong</a>
</footer>

</html>

