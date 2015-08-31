<?php
    print_r($_POST);
    require("mysql_connect.php");
    $select = "SELECT * FROM todo_items WHERE id=(SELECT max(id) FROM todo_items)";
    $results = mysqli_query($conn, $select);
    $obj = mysqli_fetch_assoc($results);
    $id = $obj["id"] + 1;
    print_r("<br> Current id is: $id<br>");
    $query = "INSERT INTO todo_items(id, title, details, timestamp,priority, user_id) VALUES ('$id','$_POST[title]','$_POST[details]','$_POST[timestamp]','$_POST[priority]','1')";
    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0 ){
        print_r(mysqli_affected_rows($conn)." row affected");
    }
    else{
        print("no rows inserted");
        print_r(mysqli_affected_rows($conn));
    }
?>