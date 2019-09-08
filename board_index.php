<?php
  include $_SERVER['DOCUMENT_ROOT']."/board_db.php";
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>

<div id="board_area">
  <h1>9인9직 for programmers in KMLA</h1>
  <h4>자유롭게 프로젝트를 올려주세요! <br> 이곳에는 준비된 프로그래머들이 있습니다! </h4>
  <body background="brownkmla.jpg">
  <?php
				session_start();

				if(!isset($_SESSION['id']) || !isset($_SESSION['name']))
				{
					echo "<meta http-equiv='refresh' content='0;url=login.html'>";
					exit;
				}
				$id = $_SESSION['id'];
				$name = $_SESSION['name'];
				
				echo "<a href='changeprofile.html'><button>프로필 바꾸기</button></a>"; //자신의 정보를 바꾸는 새로운 코드?
        echo "<a href='logout.php'><button>로그아웃</button></a>";
        echo "<a href='/page/board/write.php'><button>프로젝트 올리기</button></a>";
			?>

  <div id="write_btn">
      
    </div>
    <table class="list-table">
      
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="120">금액</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
          $sql = mq("select * from board order by idx desc limit 0,5"); // board테이블에있는 idx를 기준으로 내림차순해서 5개까지 표시
            while($board = $sql->fetch_array())
            {
              $title=$board["title"];
              if(strlen($title)>30)
              {
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]); //title이 30을 넘어서면 ...표시
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="500"><?php
        $lockimg = "<img src='/img/lock.png' alt='lock' title='lock' with='20' height='20' />";
        if($board['lock_post']=="1")
          { ?><a href='/page/board/ck_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;
            }else{  ?>
        <a href='/page/board/read.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title; }?></a></td>
          <td width="120"><?php echo $board['name']?></td>
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>
</body>
</html>
