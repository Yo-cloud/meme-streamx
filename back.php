<?php
$con = mysqli_connect('localhost', 'root', '','trip');


$name = $_POST['name'];
$caption = $_POST['caption'];
$url = $_POST['url'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `caption`,`url`) VALUES ('$name','$caption','$url')";
 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header('Location: index.php');
}

?>