
    <style type=text/css>

    body{
    font-family: verdana;
    font-size: 15px;
    }
    </style>
    <body>
    <?php
    //sets handle variable to open userLog.html and read.
    $handle = fopen("/tmp/userLog.html", 'r');
    //creates a vairable called line that reads hanlde in a loop
    while(($line = fgets($handle)) !== false){
    //prints out lines from userLog.html
    echo $line. "<br/>";
    }
    fclose($handle);
    ?>
    </body>
