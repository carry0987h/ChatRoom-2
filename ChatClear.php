<?php
  //creates varialbe to open userLog and set to write
  $handle = fopen("/tmp/userLog.txt", 'w');
  //Opens userLog
  fopen($handle);
  //Clears userLog
  file_put_contents("userLog.txt", "");
  //Closes userlog.
  fclose($handle);
?>