    <style type=”text/css”>

    body {
    font: arial;    
    font-size: 15px;
    }
    </style>

    <body>
    <?php
    //sets handle variable to open userLog.txt and read.
    $handle = fopen("/tmp/userLog.txt", 'r');
    //creates a vairable called line that reads hanlde in a loop
    while(($line = fgets($handle)) !== false){
    //prints out lines from userLog.txt
    echo $line. "<br/>";
    }
    fclose($handle);
    ?>
    </body>

