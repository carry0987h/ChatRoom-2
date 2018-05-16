 <?php
      //creates variable to open userlog.
      $handle = fopen("/tmp/userLog.txt", 'a+');
      //writes text iputed in form to userlog.txt
      fwrite($handle, $cookie_value. ": ". $_POST[posting]. "\n");
      //closes userLog.txt
      fclose($handle);
      header("Location: /ChatRoom.php");
  ?>