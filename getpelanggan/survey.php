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
$username = 'mncplaym_root';
$password = 'raU3n48$hiD]';
$database = 'mncplaym_website';
 
 
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
<div style="padding: 20 0 0 0;"><center><h1>Data Survey 2017</h1></center></div>

<center>
<input type="button" onclick="tableToExcel('testTable', 'DataCustomer')" value="Export to Excel" class="btn btn-primary">
<a href="#" class="btn btn-default" onclick="window.close();" role="button">Close</a>
</center>
<br/>
<center>
	<form action="" method="get">
		<input type="text" autocomplete="off" class="tgl" name="dari" placeholder="Dari Tanggal">
		<input type="text" autocomplete="off" class="tgl" name="sampai" placeholder="Sampai Tanggal">
		<input type="submit" value="Search" class="btn btn-primary">
	</form>
</center>

<table cellspacing='0' id="testTable" class="table table-hover" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides">
	<tr class="success">
		<th>tanggal</th>
		<th>id_cust</th>
		<th>nama</th>
		<th>email</th>
		<th>layanan</th>
		<th>1. kecepatan akses internet</th>
		<th>1. kecepatan akses internet (kendala)</th>
		<th>2. kestabilan akses internet</th>
		<th>2. kestabilan akses internet (kendala)</th>
		<th>3. kualitas tayangan</th>
		<th>3. kualitas tayangan (kendala)</th>
		<th>4. kelengkapan channel</th>
		<th>4. kelengkapan channel (usulan)</th>
		<th>5. tarif berlangganan</th>
		<th>6. layanan Value Added Multimedia yang ingin digunakan (CCTV)</th>
		<th>6. layanan Value Added Multimedia yang ingin digunakan (VidCall)</th>
		<th>6. layanan Value Added Multimedia yang ingin digunakan (OL Service)</th>
		<th>6. layanan Value Added Multimedia yang ingin digunakan (tambahan)</th>
		<th>7. ketepatan waktu kedatangan tenaga instalasi</th>
		<th>8. jangka waktu perbaikan</th>
		<th>8. jangka waktu perbaikan (kendala)</th>
		<th>9. kemudahan menghubungi Ccenter</th>
		<th>9. kemudahan menghubungi Ccenter (kendala)</th>
		<th>10. kepuasan pelayanan Ccenter</th>
		<th>10. kepuasan pelayanan Ccenter (kendala)</th>
		<th>11. cara dalam menghubungi Ccenter</th>
		<th>11. cara dalam menghubungi Ccenter (media lain)</th>
		<th>12. seberapa sering menghubungi Ccenter - 3 bulan terakhir</th>
		<th>12. seberapa sering menghubungi Ccenter - 3 bulan terakhir (alasan)</th>
		<th>13. Respond Agent Ccenter</th>
		<th>13. Respond Agent Ccenter (kendala)</th>
		<th>14. pemberian informasi billing</th>
		<th>15. keakuratan billing</th>
		<th>16. kemudahan pembayaran</th>
		<th>16. kemudahan pembayaran (kendala)</th>
		<th>17. kepuasan menggunakan mnc play</th>
		<th>18. referensi mnc play</th>
		<th>18. referensi mnc play (data)</th>
	</tr><!-- Table Header -->
    



<? $n=1; ?>

<?php
if(isset($_GET['dari'])){
		$from=$_GET['dari'];
		$until=$_GET['sampai'];
		$ambil = mysql_query("SELECT * FROM survey_customer WHERE id_cust != '' and date>='$from' and date<='$until' ORDER BY date DESC ");
		echo "<br/><center>Hasil Survey dari tanggal  <strong>".$from."</strong>  Sampai tanggal  <strong>".$until."</strong></center><br/>";
		} else {
		$now = date("Y-m-d");
		$ambil = mysql_query("SELECT * FROM tbl_users WHERE id_cust != '' and date='$now' ORDER BY date DESC ");
		}
while ($row=mysql_fetch_object($ambil))
{
$id_cust = stripslashes($row->id_cust);
$nama = stripslashes($row->name_cust);
$email = stripslashes($row->email_cust);
$layanan =  stripslashes($row->layanan);
$q1 =  stripslashes($row->q1);
$q1_detail =  stripslashes($row->q1_detail);
$q2 =  stripslashes($row->q2);
$q2_detail =  stripslashes($row->q2_detail);
$q3 =  stripslashes($row->q3);
$q3_detail =  stripslashes($row->q3_detail);
$q4 =  stripslashes($row->q4);
$q4_detail =  stripslashes($row->q4_detail);
$q5 =  stripslashes($row->q5);
$q6_a =  stripslashes($row->q6_a);
$q6_b =  stripslashes($row->q6_b);
$q6_c =  stripslashes($row->q6_c);
$q6_d =  stripslashes($row->q6_d);
$q7 =  stripslashes($row->q7);
$q8 =  stripslashes($row->q8);
$q8_detail =  stripslashes($row->q8_detail);
$q9 =  stripslashes($row->q9);
$q9_detail =  stripslashes($row->q9_detail);
$q10 =  stripslashes($row->q10);
$q10_detail =  stripslashes($row->q10_detail);
$q11 =  stripslashes($row->q11);
$q11_detail =  stripslashes($row->q11_detail);
$q12 =  stripslashes($row->q12);
$q12_detail =  stripslashes($row->q12_detail);
$q13 =  stripslashes($row->q13);
$q13_detail =  stripslashes($row->q13_detail);
$q14 =  stripslashes($row->q14);
$q15 =  stripslashes($row->q15);
$q16 =  stripslashes($row->q16);
$q16_detail =  stripslashes($row->q16_detail);
$q17 =  stripslashes($row->q17);
$q18 =  stripslashes($row->q18);
$q18_detail =  stripslashes($row->q18_detail);
$date =  stripslashes($row->date);


if($layanan==1){$layanan="Internet Only";} else if($layanan==2){$layanan="Internet & TV Kabel";} 
if($q1==1){$q1="Sangat Cepat";} else if($q1==2){$q1="Cepat";} else if($q1==3){$q1="Lambat";} else if($q1==4){$q1="Sangat Lambat";}
if($q2==1){$q2="Sangat Stabil";} else if($q2==2){$q2="Stabil";} else if($q2==3){$q2="Tidak Stabil";} else if($q2==4){$q2="Sangat Tidak Stabil";}
if($q3==1){$q3="Sangat Baik";} else if($q3==2){$q3="Baik";} else if($q3==3){$q3="Tidak Baik";} else if($q3==4){$q3="Sangat Tidak Baik";} else {$q3="Tidak Menggunakan TV Kabel";}
if($q4==1){$q4="Sangat Lengkap";} else if($q4==2){$q4="Lengkap";} else if($q4==3){$q4="Tidak Lengkap";} else if($q4==4){$q4="Sangat Tidak Lengkap";} else {$q4="Tidak Menggunakan TV Kabel";}
if($q5==1){$q5="Sangat Bersaing";} else if($q5==2){$q5="Bersaing";} else if($q5==3){$q5="Tidak Bersaing";} else if($q5==4){$q5="Sangat Tidak Bersaing";}
if($q6_a==1){$q6_a="Ya";} else {$q6_a="Tidak";}
if($q6_b==1){$q6_b="Ya";} else {$q6_b="Tidak";}
if($q6_c==1){$q6_c="Ya";} else {$q6_c="Tidak";}
if($q7==1){$q7="Sangat Tepat";} else if($q7==2){$q7="Tepat";} else if($q7==3){$q7="Tidak Tepat";} else if($q7==4){$q7="Sangat Tidak Tepat";}
if($q8==1){$q8="Sangat Cepat";} else if($q8==2){$q8="Cepat";} else if($q8==3){$q8="Lambat";} else if($q8==4){$q8="Sangat Lambat";}
if($q9==1){$q9="Sangat Mudah";} else if($q9==2){$q9="Mudah";} else if($q9==3){$q9="Tidak Mudah";} else if($q9==4){$q9="Sangat Tidak Mudah";}
if($q10==1){$q10="Sangat Puas";} else if($q10==2){$q10="Puas";} else if($q10==3){$q10="Tidak Puas";} else if($q10==4){$q10="Sangat Tidak Puas";}
if($q11==1){$q11="Contact Center";} else if($q11==2){$q11="Email";} else if($q11==3){$q11="Facebook";} else if($q11==4){$q11="Twitter";}
if($q12==1){$q12="1x";} else if($q12==2){$q12="2-3x";} else if($q12==3){$q12="4-5x";} else if($q12==4){$q12=">5x";}
if($q13==1){$q13="Sangat Puas";} else if($q13==2){$q13="Puas";} else if($q13==3){$q13="Tidak Puas";} else if($q13==4){$q13="Sangat Tidak Puas";}
if($q14==1){$q14="Tepat Waktu";} else if($q14==2){$q14="Terlambat";} else if($q14==3){$q14="Kadang Diterima";} else if($q14==4){$q14="Tidak Diterima";}
if($q15==1){$q15="Sangat Akurat";} else if($q15==2){$q15="Akurat";} else if($q15==3){$q15="Tidak Akurat";} else if($q15==4){$q15="Sangat Tidak Akurat";}
if($q16==1){$q16="Sangat Mudah";} else if($q16==2){$q16="Mudah";} else if($q16==3){$q16="Tidak Mudah";} else if($q16==4){$q16="Sangat Tidak Mudah";}
if($q17==1){$q17="Sangat Puas";} else if($q17==2){$q17="Puas";} else if($q17==3){$q17="Tidak Puas";} else if($q17==4){$q17="Sangat Tidak Puas";}
if($q18==1){$q18="Ya";} else if($q18==2){$q18="Belum Saat Ini";} else {$q18="Tidak";} 

/* echo $nama ;
echo $joined_date ;
echo "</br>" ; */
$n=$n+1; 
/* echo $n; */




	if ($n % 2 == 0)
  {
    echo "<tr><td>$date</td><td>$id_cust</td><td>$nama</td><td>$email</td><td>$layanan</td><td>$q1</td><td>$q1_detail</td><td>$q2</td><td>$q2_detail</td><td>$q3</td><td>$q3_detail</td><td>$q4</td><td>$q4_detail</td><td>$q5</td><td>$q6_a</td><td>$q6_b</td><td>$q6_c</td><td>$q6_d</td><td>$q7</td><td>$q8</td><td>$q8_detail</td><td>$q9</td><td>$q9_detail</td><td>$q10</td><td>$q10_detail</td><td>$q11</td><td>$q11_detail</td><td>$q12</td><td>$q12_detail</td><td>$q13</td><td>$q13_detail</td><td>$q14</td><td>$q15</td><td>$q16</td><td>$q16_detail</td><td>$q17</td><td>$q18</td><td>$q18_detail</td></tr>";

  }
  else
  {
    echo "<tr><td>$date</td><td>$id_cust</td><td>$nama</td><td>$email</td><td>$layanan</td><td>$q1</td><td>$q1_detail</td><td>$q2</td><td>$q2_detail</td><td>$q3</td><td>$q3_detail</td><td>$q4</td><td>$q4_detail</td><td>$q5</td><td>$q6_a</td><td>$q6_b</td><td>$q6_c</td><td>$q6_d</td><td>$q7</td><td>$q8</td><td>$q8_detail</td><td>$q9</td><td>$q9_detail</td><td>$q10</td><td>$q10_detail</td><td>$q11</td><td>$q11_detail</td><td>$q12</td><td>$q12_detail</td><td>$q13</td><td>$q13_detail</td><td>$q14</td><td>$q15</td><td>$q16</td><td>$q16_detail</td><td>$q17</td><td>$q18</td><td>$q18_detail</td></tr>";
}

}

?>

</table>
</div>
</body>
</html>