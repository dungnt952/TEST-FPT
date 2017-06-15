<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_book";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die( "connect fail");
    }
    
echo "<form method ='POST' action = '/add.php'>" ;   
echo   "<div> 書籍一覧</div></br>
    <type input = 'submit' value='追加' name = 'bt_add'>
    </form>
    
    <form method ='POST' action = '/process.php'>
    <table style='width:75%'>
          <tr>
            <th>ID</th>
            <th>書籍名</th> 
            <th>出版社</th>
            <th>ページ数</th>
            <th>操作</th>
          </tr>";
          

          $sql = "SELECT * FROM tb_book"  ;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["book_id"]."</td";
                echo "<td>".$row["book_name"]."</td";
                echo "<td>".$row["book_publisher"]."</td";
                echo "<td>".$row["page"]."</td";
                echo "<td>".
                "<type input = 'submit' value='修正' name = 'bt_edit'>".
                "<type input = 'submit' value='消除' name = 'bt_delete'>".
                "<type input = 'submit' value='感想の一覧' name = 'bt_review'>";
                echo "</tr>";
        
            }
            }

   echo " </table>";
   echo "</form";
?>