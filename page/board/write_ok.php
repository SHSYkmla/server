<?php

include "board_db.php";

$query = insert into board(name,pw,title,content,date,lock_post) values
('".$_POST['name']." ','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."','".$lo_post."');
$result = mysql_query($query,$conn);

mysql_close($conn);

echo("<meta http-equiv="refresh" content="0 https://kmla.herokuapp.com/board_index.php"/>");





/*
include $_SERVER['DOCUMENT_ROOT']."/board_db.php";
$date = date('Y-m-d');
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$lo_post = '0';

$sql = mq("insert into board(name,pw,title,content,date,lock_post) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."','".$lo_post."')"); ?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 https://kmla.herokuapp.com/board_index.php" />
*/