<?php
    session_start();
    require('db.php');

    $id = $_POST['new_id'];
    $name = $_SESSION['name'];
    $pw = $_POST['new_pw'];
    
    $check="SELECT *from user_info WHERE userid='$id'";
    $result=$mysqli->query($check);
    if($result->num_rows==1)
    {
        echo "중복된 아이디입니다.";
        echo "<button onclick=\"location.href='changeprofile_id.php'\"> 돌아가기 </button>";
        exit();
    }

    $changeprofile=mysqli_query($mysqli,"UPDATE 'user_info' SET 'id'='$id', 'pw'='$pw' WHERE 'name'='$name'");
    if($changeprofile)
    {
        <meta charset="utf-8"/>
        <script type="text/javascript">alert('프로필 변경이 완료되었습니다.');</script>
        <meta http-equiv="refresh" content="0 url=/">
    }
    else
        echo "<button onclick=\"location.href='changeprofile_ip.php'\"> 프로필 변경 실패, 돌아가기 </button>";
?>