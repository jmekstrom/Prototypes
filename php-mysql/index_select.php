<!-- index_select.php -->
<?php
require('mysql_connect.php');
$query = "SELECT * FROM todo_items WHERE user_id = '1'";
$results = mysqli_query($conn,$query);
if(mysqli_num_rows($results) > 0){
   while($result = mysqli_fetch_assoc($results)){
       $output[] = $result;
   }
    print_r($output);
}
?>