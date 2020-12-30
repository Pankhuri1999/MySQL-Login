<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$created_at=$_POST['created_at'];
		$sql = "INSERT INTO `users`( `id`, `username`,`password`,`created_at`) 
		VALUES ('$id','$username','$password','$created_at')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$created_at=$_POST['created_at'];
		$sql = "UPDATE `users` SET `id`='$id',`username`='$username',`password`='$password',`created_at`='$created_at' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `users` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM users WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>