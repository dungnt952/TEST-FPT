<?php
// connect database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_book";
$conn = new mysqli($servername, $username, $password, $dbname);
$book_name = $book_publ ='';
$book_page = 0;

//add book to database
if($conn->connect_error){
    die( "connect fail");
    }
    else
    {
       if(isset($_POST['tb_bookname'],$_POST['tb_book_publ'],$_POST['num_book_page'])){
        $book_name = $_POST['tb_bookname'];
        $book_publ = $_POST['tb_book_publ'];
        $book_page = $_POST['num_book_page'];
        $sql = "INSERT INTO tb_book( book_name, book_publish, book_page) VALUES (".$book_name.",".$book_publ.",".$book_page.")";
        $conn->query($sql);
        
       }

    };


    echo "<div> 書籍の編集</div></br>".
    "<form method = 'POST' action = '#'".
    "<div>書籍名</div>".
    "<input type = 'text' value = '' name = 'tb_bookname'></br>".
    "<div>出版者</div>".
    "<input type = 'text' value = '' name = 'tb_book_publ'></br>".
    "<div>ページ数</div>".
    "<input type = 'number' value = '' name = 'num_book_page'></br>".
    "<input type = 'submit' value = '送信' name = 'sb_add'></br>";
    "<input type = 'submit' value = '戻る' name = 'sb_returnt'></br>";
    
    

?>