<!-- index_select.php -->
<?php
session_start();
if(empty($_SESSION['user_id'])){
    header("location:login_form.php");
}
else{
    $id = $_SESSION['user_id'];
}
require('mysql_connect.php');
$query = "SELECT * FROM todo_items WHERE user_id = '$id'";
$results = mysqli_query($conn,$query);
if(mysqli_num_rows($results) > 0){
   while($result = mysqli_fetch_assoc($results)){
       $output[] = $result;
   }
    print_r($output);
}
?>