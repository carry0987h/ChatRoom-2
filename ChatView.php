    <style type=text/css>

    body{
    font: arial;    
    font-size: 15px;
    }
    </style>

    <body>
    <?php
    // to render instead of refreshing whole page
      function renderHtml($contentRenderer = null)
      {
          echo "<!DOCTYPE HTML>\n";
          echo '<html>';
          if ($contentRenderer) $contentRenderer();
          echo '</html>';
      }

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

