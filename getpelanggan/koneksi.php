<?php 
$host="localhost"; 
$user="mncplaym_root"; 
$password="raU3n48$hiD]"; 
$database="mncplaym_website"; 

$koneksi=mysql_connect($host,$user,$password); 
mysql_select_db($database,$koneksi); 
//cek koneksi 
if($koneksi){ 
//echo "berhasil koneksi"; 
}else{ 
echo "gagal koneksi"; 
} 
?> 
