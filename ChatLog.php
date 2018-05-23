<?php
  //Creates variable for $cookie_name called user
  $cookie_name = "user";
  //When there is a $cookie_name defined then it starts code.
  if(!isset($_COOKIE[$cookie_name])) {
    //creates a varialbe called url to random name generator api.
    $url = "https://swapi.co/api/";
    //creates a variable called obj to get the api.
    $obj = json_decode(file_get_contents($url), true);
    //sets $cookie_value to name of api
    $cookie_value = $obj['name'];
    setcookie($cookie_name, $cookie_value, "/"); // Sets username until session is expired
  }else{
    $cookie_value = $_COOKIE[$cookie_name];

  }
  ?>
<?php
      //creates variable to open userlog.
      $handle = fopen("/tmp/userLog.html", 'a+');
      //writes text iputed in form to userlog.html
      fwrite($handle, "<span class=userName>". $cookie_value. "</span>". ": ". $_POST[posting]. "\n");
      //closes userLog.html
      fclose($handle);
      header("Location: /ChatRoom.php");
  ?>
