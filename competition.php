<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>순위</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<div id="board_area1">
  <h1>9인9직 for programmers in KMLA</h1>
  <h2>누가누가 잘하나!<br> 순위를 확인하세요! </h2>
  <body background="brownkmla.jpg">
</div>

<table class="list-table1">
      
      <thead>
          <tr>
              <th width="70">순위</th>
                <th width="500">이름</th>
                <th width="120">해결한 프로젝트</th>
                <th width="120">획득한 금액</th>
                <th width="100">추천수</th>
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
    
</body>
</html>