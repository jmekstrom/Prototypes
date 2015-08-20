<?php
$image = glob("images/*.jpg");
$success = false;
if (count($image) === 0) {
	$error = "No images found";
}
else{
	$success = true;
	$error = [];
}
$image_array = array("success" => $success, "error" => $error, "files" => $image);
echo json_encode($image_array);
?>

