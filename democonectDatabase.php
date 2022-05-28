<?php
$servername ="localhost";
$username = "root";
$password = "";
$database="mydb";
//kết nối theo Mysqli procedural
$connect = mysqli_connect($servername,$username,$password,$database);
if ($connect) {
	echo "Ket noi thanh cong";	
}
else{
	echo "Ket noi that bai";
}
$sql = "INSERT INTO user VALUES(3,'HAI','123456')";
$result =mysqli_query($connect,$sql);
if ($result) {
	echo "Them moi nguoi dung thanh cong";
}
else{
	echo "Them moi that bai";
}
?>