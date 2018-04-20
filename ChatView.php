    <?php
    $handle = fopen("/tmp/userLog.txt", 'r');
    while(($line = fgets($handle)) !== false){
    echo $line. "<br/>";
    }
    fclose($handle);
    ?>


