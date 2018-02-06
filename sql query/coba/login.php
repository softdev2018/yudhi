<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysql_query("select * from admin where username='$username' and password='$password'")
	or die("Failed to query database".mysql_error());
$cek = mysql_fetch_array($query);
 
if($cek['username'] == $username && $cek['password'] == $password){
	echo "Login Success!! Welcome".$cek['username'];
}else{
	echo "Login Gagal!";
	} 
?>