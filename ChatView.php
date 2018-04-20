<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="1" />
  <link rel="stylesheet" type="text/css" href="ChatRoom.css">
  <title>ChatRoom</title>
  <script src="jquery-3.3.1.js"></script>
  <script src="ChatBox.js"></script>
</head>

<body>

    <?php
    $handle = fopen("/tmp/userLog.txt", 'r');
    while(($line = fgets($handle)) !== false){
    echo $line. "<br/>";
    }
    fclose($handle);
    ?>
</body>

</html>

