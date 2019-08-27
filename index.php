<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>로그인 예제</title>
    </head>

    <body>
            <h2>닷넷 2차 선발용 로그인 웹 템플릿<h2>
            <?php
				session_start();

				if(!isset($_SESSION['id']) || !isset($_SESSION['name']))
				{
					echo "<meta http-equiv='refresh' content='0;url=login.html'>";
					exit;
				}
				$id = $_SESSION['id'];
				$name = $_SESSION['name'];

				echo "<p>안녕하세요. $name($id)님</p>";

				//
				//contests 여기다 추가하세요
				//

				echo "<p><a href='logout.php'>로그아웃</a></p>";
			?>
        	<a href="signup.html" target="right">
				<button>회원가입 하러가기</button>
			</a>
			
    </body>

</html> 