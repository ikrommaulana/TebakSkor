<?php session_start(); 
include "koneksi.php"; 
$username=$_POST['username']; 
$password=$_POST['password']; 
$query=mysql_query("select * from admin_ccr where username='$username' and password='$password'"); 
$cek=mysql_num_rows($query); 
if($cek){ 
$_SESSION['username']=$username; 


header( 'Location: http://www.mncplaymedia.com/panggil' );


}else{ 
header( 'Location: http://www.mncplaymedia.com/panggil/form_admin.php' );
echo mysql_error(); 
} 
?> 