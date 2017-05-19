<?php 
$user		= "mncplaym_root2"; 
$password	= "HS3$x-M20}=]"; 
$database	= "mncplaym_site"; 

$koneksi	= mysql_connect($host,$user,$password); 
mysql_select_db($database,$koneksi); 
//cek koneksi 
if($koneksi){ 
//echo "berhasil koneksi"; 
}else{ 
//echo "gagal koneksi"; 
} 
?> 
