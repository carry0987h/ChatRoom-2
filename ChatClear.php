<?php
      //creates variable to open userlog.
      $handle = fopen("/tmp/userLog.txt", 'w');
      //writes text iputed in form to userlog.txt
      fwrite($handle, "k");
      //closes userLog.txt
      fclose($handle);
?>
