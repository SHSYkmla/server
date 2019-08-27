<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    $mysqli=mysqli_connect($server, $username, $password, $db);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $pw = $_POST['pw'];

    $q = mysqli_query($mysqli,"INSERT INTO user_data(id,username,userpw) VALUES('$id', '$name', '$pw')");
?>