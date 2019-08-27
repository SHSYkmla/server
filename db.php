<?php
  
  //DB에 접속하기 위한 셋업
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $serverusername = $url["user"];
    $serverpassword = $url["pass"];
    $db = substr($url["path"], 1);
    $mysqli=mysqli_connect($server, $serverusername, $serverpassword, $db);
    
?>