// Process all command from index.php (delete, edit, review) 

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
    $edit = $delete = $review = NULL;
    
if(isset($_POST['bt_edit'])){
    
    
}if( isset( $_POST['bt_delete'])){
    
}
 if(isset( $_POST['bt_review'])){
    
    
}