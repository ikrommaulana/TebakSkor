<?php session_start(); 

$host		= "localhost"; 
$user		= "mncplaym_root2"; 
$password	= "HS3$x-M20}=]"; 
$database	= "mncplaym_site"; 

$koneksi	= mysql_connect($host,$user,$password); 
mysql_select_db($database,$koneksi); 

$username=$_POST['username']; 
$password=$_POST['password']; 
$query=mysql_query("select * from admin_ccr where username='$username' and password='$password'"); 
$cek=mysql_num_rows($query); 
if($cek){ 
$_SESSION['username']=$username; 


header( 'http://www.mncplay.id/site/hasilsurvey/employees.php' );


}else{ 
header( 'Location: http://www.mncplay.id/site/hasilsurvey/form_admin.php' );
echo mysql_error(); 
} 
?> 