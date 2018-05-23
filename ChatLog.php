
<?php
      //creates variable to open userlog.
      $handle = fopen("/tmp/userLog.html", 'a+');
      //writes text iputed in form to userlog.html
      fwrite($handle, "<span class=userName>". $cookie_value. "</span>". ": ". $_POST[posting]. "\n");
      //closes userLog.html
      fclose($handle);
      header("Location: /ChatRoom.php");
  ?>
