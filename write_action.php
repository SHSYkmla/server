<?php
                $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
                $server = $url["host"];
                $connect = mysqli_connect($server, "", "", "") or die("connect fail");
                session_start();
                $id = $_GET['id'];                      //Writer
                $pw = $_GET['password'];                        //Password
                $title = $_GET['title'];                  //Title
                $content = $_GET['content'];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                
 
 
                $query = "insert into board (number,title, content, date, hit, id, password) 
                        values(null,'$title', '$content', '$date',0, '$id', '$pw')";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo './list.php'?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>