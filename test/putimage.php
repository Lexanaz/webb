<?php
include "sql.php";
header('Location: new.php');
$upfile = "img/".$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],$upfile);
if ( isset($_POST['upload'])){
	$text = $_POST['text'];
	$img = $_POST['img'];
	if (!empty ($text)){
		$sql = mysqli_query($db,"INSERT INTO `news`(`text`,`img`) VALUES('$text','$upfile')");
		echo "DATA WAS ADDED";
	} else	{
		echo "Error!";
	}
}
?>