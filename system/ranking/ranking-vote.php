<?php
	error_reporting(0);
	require('../mysql_crud.php');
	require('../ranking.class.php');
	require('../config.php');
	require('../setting.php');
	$baseURL = base_url();
	$db = new Database($DBCONFIG);
	$ranking = new Ranking($db);
	$digrank = $ranking->get_digrank(12);
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo $baseURL; ?>/assets/css/durex-style.css" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
</head>
	<body>
		<table width="322" align="left">
			<tr class="name red">
				<th class="name-num">อันดับ</th>
				<th class="name-name">ไอดีผู้เล่น</th>
				<th class="name-point">แต้ม</th>
			</tr>
		<?php
			$o = 1;
			foreach( $digrank as $row ):
		?>
			<tr>
				<td><div class='rank_num'><?php echo $o; ?>.</div></td>
				<td><div class='rank_name'><?php echo strtolower(substr($ranking->useronacc(@$row['account_id']), 0, -4)); ?>xxxx</div></td>
				<td><div class='rank_point'><?php echo number_format(@$row['point_total']); ?></div></td>
			</tr>
		<?php
			$o++;
			endforeach;
		?>
	</table>
	</body>
</html>