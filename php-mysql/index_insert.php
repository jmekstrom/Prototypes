<?php
    require("mysql_connect.php");
    $query = "INSERT INTO todo_items(id, title, details, timestamp, user_id) VALUES ('11','adding an item','no details','1440800561','1')";
    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0 ){
        print_r(mysqli_affected_rows($conn)." row affected");
    }
    else{
        print("no rows inserted");
        print_r(mysqli_affected_rows($conn));
    }
?>