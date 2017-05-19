<?php session_start();
if(ISSET($_SESSION['username'])){
include "koneksi.php"; 
?>

<html>
<head>


<style type="text/css">

body, html  { height: 100%; }
html, body, div, span, applet, object, iframe,
/*h1, h2, h3, h4, h5, h6,*/ p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
}
body { line-height: 1; }
ol, ul { list-style: none; }
blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
:focus { outline: 0; }
del { text-decoration: line-through; }
table {border-spacing: 0; }

body{
	font-family:Arial, Helvetica, sans-serif;
	background: url(background.jpg);
	margin: 0px auto;
	width:100%;
}
a:link {
	color: #658;
	font-weight: bold;
	text-decoration:none;
}
a:visited {
	color: #658;
	font-weight:bold;
	text-decoration:none;
}
a:active,
a:hover {
	color: #bd5a35;
	text-decoration:underline;
}

table a:link {
	color: #658;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#658;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
	padding-left:20px;
}
table tr td:first-child{
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table tr td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}

</style>

<script src="fungsi.js"></script>

<?php
 
$host = 'localhost';
$username = 'mnc_play';
$password = 'synmnc7373';
$database = 'infokom_group_mnc';
 
 
/*
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'mnc_play';
$db['default']['password'] = 'synmnc7373';
$db['default']['database'] = 'infokom_group_mnc';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = 
*/ 
 
$config = mysql_connect($host, $username, $password);
$connect = mysql_select_db($database, $config) or die (mysql_error());

/*connection test
if($connect == TRUE ): echo 'connect';
else : echo 'unconnect';
endif;
*/
?>

</head>
<body>

<div style="padding: 20 0 0 0;"><center><h2>Registration Data</h2></center></div>

<center><input type="button" onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel"></center>
</br>

<a href="logout.php">Logout</a> 

<table cellspacing='0' id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides">
	<tr><th>id_users</th><th>nama</th><th>email</th><th>mobile</th><th>phone</th><th>address</th><th>status</th><th>propinsi</th><th>kota</th><th>kecamatan</th><th>kelurahan</th><th>rw</th><th>joined_date</th></tr><!-- Table Header -->
    



<? $n=1; ?>

<?php

$ambil = mysql_query("SELECT * FROM tbl_users WHERE nama != '' ORDER BY joined_date DESC ");
 
while ($row=mysql_fetch_object($ambil))
{
$nama = stripslashes($row->nama);
$joined_date = stripslashes($row->joined_date);
$id_users =  stripslashes($row->id_users);
$nama =  stripslashes($row->nama);
$email =  stripslashes($row->email);
$mobile =  stripslashes($row->mobile);
$phone =  stripslashes($row->phone);
$address =  stripslashes($row->address);
$status =  stripslashes($row->status);
$propinsi =  stripslashes($row->propinsi);
$kota =  stripslashes($row->kota);
$kecamatan =  stripslashes($row->kecamatan);
$kelurahan =  stripslashes($row->kelurahan);
$rw =  stripslashes($row->rw);
$joined_date =  stripslashes($row->joined_date);

/* echo $nama ;
echo $joined_date ;
echo "</br>" ; */
$n=$n+1;
/* echo $n; */

$potong=substr($address, 0, 3);
$address_asli=substr($address, 3);

if ($potong == "WIC")
{
	if ($n % 2 == 0)
	  {
		echo "<tr><td>$id_users</td><td>$nama</td><td>$email</td><td>$mobile</td><td>$phone</td><td>$address_asli</td><td>$status</td><td>$propinsi</td><td>$kota</td><td>$kecamatan</td><td>$kelurahan</td><td>$rw</td><td>$joined_date</td></tr>";

	  }
	else
	  {
		echo "<tr class='even'><td>$id_users</td><td>$nama</td><td>$email</td><td>$mobile</td><td>$phone</td><td>$address_asli</td><td>$status</td><td>$propinsi</td><td>$kota</td><td>$kecamatan</td><td>$kelurahan</td><td>$rw</td><td>$joined_date</td></tr>";
	  }

	}
}



?>

</table>

</body>
</html>
<?php 
}else{ 
?>Anda tidak boleh mengakses halaman ini. silahkan<a href="form_admin.php">Login 
dahulu</a><?php 
} 
?>