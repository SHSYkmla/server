<?php
    session_start();
    $id=$_POST['id'];
    $pw=$_POST['pw'];

    require('db.php');
    
    $check="SELECT * FROM user_info WHERE id='$id'";
    $result=$mysqli->query($check); 

    if($result->num_rows==1)
    {
         //id에 correspond하는 하나의 열을 배열로 가져오기
        $row=$result->fetch_array(MYSQLI_ASSOC);
        
         //비밀번호 확인하기
        if($pw == $row['pw'])
        {
            $name = $row['name'];
            //비밀번호 확인됐으면 세션 변수 만들기
            $_SESSION['id']=$id;
            $_SESSION['name']=$name;
            $_SESSION['picprofile']=$picprofile;
            
            //세션 변수에 등록 잘 됐는지 확인
            if(isset($_SESSION['id'])) 
            {
                //로그인 성공 시 페이지 이동
                header('Location: ./board_index.php');   
                exit();
            }
        }
    }
?>
<script type="text/javascript">
    alert('로그인 실패');
    <?php 
        unset($_POST);
    ?>
    window.location = 'login.html';
</script>
