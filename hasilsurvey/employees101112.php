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
$username = 'mncplaym_root2';
$password = 'HS3$x-M20}=]';
$database = 'mncplaym_site';
 
 
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
<div style="padding: 20 0 0 0;"><center><h1>Employees Survey 2017</h1></center></div>

<center>
<input type="button" onclick="tableToExcel('testTable', 'DataCustomer')" value="Export to Excel" class="btn btn-primary">
<a class="btn btn-default" onclick="window.close();" role="button">Close</a>
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
		<th>Tanggal</th>
		<th>NIK</th>
		<th>Direktorat</th>
		<th>Level</th>
		<th>Lama Bekerja</th>
		<th>1. Lingkungan Kerja</th>
		<th>2. Atasan</th>
		<th>3. Kesempatan Belajar</th>
		<th>4. Jenjang Karir</th>
		<th>5. Empowerment</th>
		<th>6. Apresiasi</th>
		<th>Pilihan 1</th>
		<th>Pilihan 2</th>
		<th>Pilihan 3</th>
		<th>Rekomendasi</th>
	</tr><!-- Table Header -->
    



<? $n=1; ?>

<?php
if(isset($_GET['dari'])){
		$from=$_GET['dari'];
		$until=$_GET['sampai'];
		$ambil = mysql_query("SELECT * FROM survey_employee WHERE id != '' and date>='$from' and date<='$until' ORDER BY date DESC ");
		echo "<br/><center>Hasil Survey dari tanggal  <strong>".$from."</strong>  Sampai tanggal  <strong>".$until."</strong></center><br/>";
		} else {
		$now = date("Y-m-d");
		$ambil = mysql_query("SELECT * FROM survey_employee WHERE id != '$from' and date='$from' ORDER BY date DESC ");
		}
while ($row=mysql_fetch_object($ambil))
{
	$nik = stripslashes($row->nik);
	$direk = stripslashes($row->direk);
	$lvl = stripslashes($row->lvl);
	$yos = stripslashes($row->yos);
	$q1 = stripslashes($row->q1);
	$q2 = stripslashes($row->q2);
	$q3 = stripslashes($row->q3);
	$q4 = stripslashes($row->q4);
	$q5 = stripslashes($row->q5);
	$q6 = stripslashes($row->q6);
	$p1 = stripslashes($row->p1);
	$p2 = stripslashes($row->p2);
	$p3 = stripslashes($row->p3);
	$rec = stripslashes($row->rec);
	$date =  stripslashes($row->date);


if($direk==1){$direk="Bussines Operations";} else if($direk==2){$direk="Commercial";} else if($direk==3){$direk="Engineering & Infrastructure";} else if($direk==4){$direk="Finance & Accounting";} else if($direk==5){$direk="GGOD";}
if($lvl==1){$lvl="Officer";} else if($lvl==2){$lvl="Supervisor - AM";} else if($lvl==3){$lvl="Manager";} else if($lvl==4){$lvl="Manager+";}
if($yos==1){$yos="< 1 Tahun";} else if($yos==2){$yos="1-2 Tahun";} else if($yos==3){$yos="> 2 Tahun";}
if($q1==1){$q1="Sangat Puas";} else if($q1==2){$q1="Puas";} else if($q1==3){$q1="Kurang Puas";} else if($q1==4){$q1="Tidak Puas";}
if($q2==1){$q2="Sangat Puas";} else if($q2==2){$q2="Puas";} else if($q2==3){$q2="Kurang Puas";} else if($q2==4){$q2="Tidak Puas";}
if($q3==1){$q3="Sangat Puas";} else if($q3==2){$q3="Puas";} else if($q3==3){$q3="Kurang Puas";} else if($q3==4){$q3="Tidak Puas";}
if($q4==1){$q4="Sangat Puas";} else if($q4==2){$q4="Puas";} else if($q4==3){$q4="Kurang Puas";} else if($q4==4){$q4="Tidak Puas";}
if($q5==1){$q5="Sangat Puas";} else if($q5==2){$q5="Puas";} else if($q5==3){$q5="Kurang Puas";} else if($q5==4){$q5="Tidak Puas";}
if($q6==1){$q6="Sangat Puas";} else if($q6==2){$q6="Puas";} else if($q6==3){$q6="Kurang Puas";} else if($q6==4){$q6="Tidak Puas";}

if($rec==1){$rec="Ya";} else if($rec==2){$rec="Tidak";} 

/* echo $nama ;
echo $joined_date ;
echo "</br>" ; */
$n=$n+1; 
/* echo $n; */




	if ($n % 2 == 0)
  {
    echo "<tr><td>$date</td><td>$nik</td><td>$direk</td><td>$lvl</td><td>$yos</td><td>$q1</td><td>$q2</td><td>$q3</td><td>$q4</td><td>$q5</td><td>$q6</td><td>$p1</td><td>$p2</td><td>$p3</td><td>$rec</td></tr>";

  }
  else
  {
   echo "<tr><td>$date</td><td>$nik</td><td>$direk</td><td>$lvl</td><td>$yos</td><td>$q1</td><td>$q2</td><td>$q3</td><td>$q4</td><td>$q5</td><td>$q6</td><td>$p1</td><td>$p2</td><td>$p3</td><td>$rec</td></tr>";
}

}

?>

</table>
</div>
</body>
</html>