<?php
  //creates varialbe to open userLog and set to write
  $handle = "/tmp/userLog.txt"
  //Opens userLog
  fopen($handle);
  //Clears userLog
  file_put_contents($handle, "");
  //Closes userlog.
  fclose($handle);
?>