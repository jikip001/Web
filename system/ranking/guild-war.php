<?php
//error_reporting(0);
include("../config.php");
require('../setting.php');
$baseURL = base_url();

$conn = mysqli_connect($DBCONFIG['db_host'], $DBCONFIG['db_user'], $DBCONFIG['db_pass'],$DBCONFIG['db_name']) or die("");
//mysqli_select_db($DBCONFIG['db_name']) or die("");
mysqli_query($conn,"SET NAMES utf8");
		$castle = mysqli_query($conn,"SELECT * FROM `".$DBCONFIG['db_name']."`.`guild_castle`,`".$DBCONFIG['db_name']."`.`guild` WHERE `guild_castle`.`guild_id`=`guild`.`guild_id`");
		$ville= array (
						"Neuschwanstein", "Hohenschwangau", "Nuenberg", "Wuerzburg", "Rothenburg", 
						"Repherion", "Eeyolbriggar", "Yesnelph", "Bergel", "Mersetzdeitz", 
						"Bright Arbor", "Scarlet Palace", "Holy Shadow", "Sacred Altar", "Bamboo Grove Hill", 
						"Kriemhild", "Swanhild", "Fadhgridh", "Skoegul", "Gondul", 
						"Earth", "Air", "Water", "Fire",
						"Himinn","Andlangr","Viblainn","Hljod","Skidbladnir",
						"Mardol","Cyr","Horn","Gefn","Bandis"
		); 
?>
<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="//meyerweb.com/eric/tools/css/reset/reset.css" media="screen" rel="stylesheet" type="text/css" /> 
<link href="<?php echo $baseURL; ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
<link href="<?php echo $baseURL; ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $baseURL; ?>/assets/css/durex-style.css" rel="stylesheet" type="text/css" media="screen">
<style>
.col{float:left;text-align:center;}
.clear{clear: both;display: block;overflow: hidden;visibility: hidden;width: 0;height: 0;}
.w1{width:15%;}
.w2{width:25%;}
.w3{width:30%;}
.w4{width:30%;}
.bb{font-weight:bold;}

body {
	margin-left: 0px;
}
</style>
</head> 
<body>
<br>
<table width="787" border="0" align="left">
  <tr>
    <td><div class='guild_h'>
      <div class='col w1 bb'>Emblem</div>
      <div class='col w2 bb'>Castle</div>
      <div class='col w3 bb'>Guild</div>
      <div class='col w4 bb'>Guild Master</div>
      <br class='clear'>
    </div>
      <span class="style1">
      <?php
if(mysqli_num_rows($castle) > 0) {
	while($castlev = mysqli_fetch_assoc($castle)){
		echo "<div class='guild'><div class='col w1'><img src=\"emblem.php?guild=".$castlev['guild_id']."\" width=\"24px\" height=\"24px\" class=\"emblem2\" /></div><div class='col w2'>".$ville[$castlev['castle_id']]."</div><div class='col w3'>". $castlev['name'] ."</div><div class='col w4'>". $castlev['master'] ."</div><br class='clear'></div>\n";
	}
}else{
	echo "<br><br>";
	echo "<div class='show-reloadbox'><i class='fas fa-circle-notch fa-spin'></i> ยังไม่มีสมาคมใดได้ยึดปราสาทกิลวอร์</div>";
}
?>
    </span></td>
  </tr>
</table>
</body>
</html>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.aos.js"></script>
<script type="text/javascript" src="../assets/js/durexzstudio.min.js"></script>