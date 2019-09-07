<?php
    
    require('db.php');

    $id = $_POST['new_id'];
    $name = $_POST['name'];
    $pw = $_POST['new_pw'];
    $pw1 = $_POST['new_pw1'];
    
    $check="SELECT *from user_info WHERE userid='$id'";
    $result=$mysqli->query($check);
    if($result->num_rows==1)
    {
        echo "중복된 아이디입니다.";
        echo "<button onclick=\"location.href='changeprofile.html'\"> 돌아가기 </button>";
        exit();
    }
    if(pw == pw1) //db.php 수정 꼭 필요!!
    {
        echo "비밀번호가 맞지 않습니다.";
        echo "<button onclick-\"location.href='changeprofile.html'\"> 돌아가기 </button>";
        exit();
    }
    $changeprofile=mysqli_query($mysqli,"UPDATE user_info SET id = $id, pw = $pw WHERE name = $name)");
    if($changeprofile)
    {
        ?>
        <meta charset="utf-8" />
        <script type="text/javascript">alert('프로필 변경이 완료되었습니다.');</script>
        <meta http-equiv="refresh" content="0 url=/">
        <?php
    }
    else
        echo "<button onclick=\"location.href='changeprofile.html'\"> 프로필 변경 실패, 돌아가기 </button>";
?>