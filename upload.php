<?php

// check if the script comes with an uploaded file
if (!isset($_FILES['upfile'])) {
	exit("Error 1");
}


if (($_FILES['upfile']['error'])) {
	exit("Error 2   --  ". $_FILES['upfile']['error']);
}


if (is_uploaded_file($_FILES['upfile']['tmp_name'])) {
	$finalpath = "./uploads/"."up_".$_FILES['upfile']['name'];
	move_uploaded_file($_FILES['upfile']['tmp_name'], $finalpath);
}

header("location: listfile.php");

/*
var_dump($_FILES['upfile']);
$size = $_FILES['upfile']['size'];
$temporary_name = $_FILES['upfile']['tmp_name'];
$original_name = $_FILES['upfile']['name'];
$error = $_FILES['upfile']['error'];
*/
?>