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
  <div class="userBox">
    <form action="<?php echo $PHP_SELF;?>" method="post">
    <textarea ></textarea>
    <input type="submit" value="Submit"/>
  </form>
  </div>

</body>

</html>
