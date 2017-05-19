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
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="jquery-ui.css">
<script type="text/javascript">
	$(document).ready(function(){
		$(".tgl").datepicker({dateFormat:"yy-mm-dd"});
	});
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
<div class="container-fluid">
<div style="padding: 20 0 0 0;"><center><h1>Registration Data</h1></center></div>

<center>
<input type="button" onclick="tableToExcel('testTable', 'DataCustomer')" value="Export to Excel" class="btn btn-primary">
<a class="btn btn-default" href="logout.php" role="button">Logout</a>
</center>
<br/>
<center>
	<form action="" method="get">
		<input type="text" autocomplete="off" class="tgl" name="dari">
		<input type="text" autocomplete="off" class="tgl" name="sampai">
		<input type="submit" value="Search" class="btn btn-primary">
	</form>
</center>

<table cellspacing='0' id="testTable" class="table table-hover" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides">
	<tr class="success"><th class="success">id_users</th><th>nama</th><th>email</th><th>mobile</th><th>phone</th><th>address</th><th>status</th><th>propinsi</th><th>kota</th><th>kecamatan</th><th>kelurahan</th><th>rw</th><th>joined_date</th></tr><!-- Table Header -->
    



<? $n=1; ?>

<?php
if(isset($_GET['dari'])){
		$from=$_GET['dari'];
		$until=$_GET['sampai'];
		$ambil = mysql_query("SELECT * FROM tbl_users WHERE nama != '' and joined_date>='$from' and joined_date<='$until' ORDER BY joined_date DESC ");
		echo "<br/><center>Pencarian Data dari tanggal  <strong>".$from."</strong>  Sampai tanggal  <strong>".$until."</strong></center><br/>";
		} else {
		$now = date("Y-m-d");
		$ambil = mysql_query("SELECT * FROM tbl_users WHERE nama != '' and joined_date='$now' ORDER BY joined_date DESC ");
		}
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
//$propinsi =  stripslashes($row->propinsi); edited by ikrom
$propid =  stripslashes($row->propinsi);
//$kota =  stripslashes($row->kota);
$kotaid =  stripslashes($row->kota);
//$kecamatan =  stripslashes($row->kecamatan);
$kecid =  stripslashes($row->kecamatan);
//$kelurahan =  stripslashes($row->kelurahan);
$kelid =  stripslashes($row->kelurahan);
$rw =  stripslashes($row->rw);
$joined_date =  stripslashes($row->joined_date);


$sqlprop = mysql_query("SELECT * FROM mkm_province WHERE id='$propid'");
$row1=mysql_fetch_object($sqlprop);
$propinsi =  stripslashes($row1->name);

$sqlkota = mysql_query("SELECT * FROM mkm_city WHERE id='$kotaid' and province_id='$propid'");
$row2=mysql_fetch_object($sqlkota);
$kota =  stripslashes($row2->name);

$sqlkec = mysql_query("SELECT * FROM mkm_district WHERE id='$kecid' and city_id='$kotaid' and province_id='$propid'");
$row3=mysql_fetch_object($sqlkec);
$kecamatan =  stripslashes($row3->name);

$sqlkel = mysql_query("SELECT * FROM mkm_subdistrict WHERE id='$kelid' and district_id='$kecid' and city_id='$kotaid' and province_id='$propid'");
$row4=mysql_fetch_object($sqlkel);
$kelurahan =  stripslashes($row4->name);

/* echo $nama ;
echo $joined_date ;
echo "</br>" ; */
$n=$n+1; 
/* echo $n; */




	if ($n % 2 == 0)
  {
    echo "<tr><td>$id_users</td><td>$nama</td><td>$email</td><td>$mobile</td><td>$phone</td><td>$address</td><td>$status</td><td>$propinsi</td><td>$kota</td><td>$kecamatan</td><td>$kelurahan</td><td>$rw</td><td>$joined_date</td></tr>";

  }
  else
  {
    echo "<tr class='even'><td>$id_users</td><td>$nama</td><td>$email</td><td>$mobile</td><td>$phone</td><td>$address</td><td>$status</td><td>$propinsi</td><td>$kota</td><td>$kecamatan</td><td>$kelurahan</td><td>$rw</td><td>$joined_date</td></tr>";
  }

}

?>

</table>
</div>
</body>
</html>
<?php 
}else{ 

header("location: http://www.mncplaymedia.com/panggil/form_admin.php");

} 
?>