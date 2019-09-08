<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>로그인 예제</title>
    </head>

    <body>
            <h2>아직 공사중...<h2>
            <?php
				session_start();

				if(!isset($_SESSION['id']) || !isset($_SESSION['name']))
				{
					echo "<meta http-equiv='refresh' content='0;url=login.html'>";
					exit;
				}
				$id = $_SESSION['id'];
				$name = $_SESSION['name'];

				echo "<p>안녕하세요, '$name'님!</p>";

				//
				//contests 여기다 추가하세요
				//
				echo "<a href='board_index.php' target='right'><button>게시판 가기</button></a>";
				echo "<p><a href='changeprofile.html'>프로필 바꾸기</a></p>"; //자신의 정보를 바꾸는 새로운 코드?
				echo "<p><a href='logout.php'>로그아웃</a></p>";
			?>
			
    </body>

</html> 