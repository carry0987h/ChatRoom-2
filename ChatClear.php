<?php
      //creates variable to open userlog.
      $handle = fopen("/tmp/userLog.txt", 'w');
      //writes text iputed in form to userlog.txt
      fwrite($handle, " ");
      //closes userLog.txt
      fclose($handle);
?>
