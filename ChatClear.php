<?php
      //creates variable to open userlog and sets to write.
      $handle = fopen("/tmp/userLog.html", 'w');
      //clears content from userlog
      fwrite($handle, " ");
      //closes userLog.txt
      fclose($handle);
      //redirects back to main file.
      header("Location: /ChatRoom.php");
?>
