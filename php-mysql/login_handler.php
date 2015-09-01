<?php
require("mysql_connect.php");
$username = $_POST['username'];
$password = sha1($_POST['password']);
$select = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
$results = mysqli_query($conn, $select);
if (mysqli_num_rows($results) > 0) {
    $user_info = mysqli_fetch_assoc($results);
    session_start();
    $_SESSION['user_id'] = $user_info['id'];
    $id = $_SESSION['user_id'];
    $message = $user_info['username'] . " is logged in";
    $output = ['success' => true, 'user_id' => $id, 'message' => $message];
    $output_string = json_encode($output);
    print_r($output_string);

}
else{
    $message = 'username or password incorrect';
    $output = ['success' => false, 'message' => $message];
    $output_string = json_encode($output);
    print_r($output_string);
}

?>


