<?php
	error_reporting(0);
	require('../mysql_crud.php');
	require('../ranking.class.php');
	require('../config.php');
	require('../setting.php');
	$baseURL = base_url();
	$db = new Database($DBCONFIG);
	$ranking = new Ranking($db);
	$pvprank = $ranking->get_pvprank_char(12);
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo $baseURL; ?>/assets/css/durex-style.css" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
	<body>
			<table width="322" align="left">
				<tr class="name white">
					<th width="14%" class="name-num">อันดับ</th>
					<th width="66%" class="name-name">ชื่อผู้เล่น</th>
					<th width="20%" class="name-point">แต้ม</th>
				</tr>
				<?php
					$o = 1;
					if ( $pvprank != NULL ) {
						foreach( $pvprank as $row ) {
						echo '<tr>'; ?>
						<td><div class='rank_num'><?php echo $o; ?>.</div></td>
						<td><div class='rank_name'><?php if($row['point_pvp']>0){ echo $row['name']; }else{ echo "Nuxx" ;} ?></td>
							<td><div class='rank_point'><?php echo number_format($row['point_pvp']); ?></div></td>
							<?php  echo '</tr>';
								$o++;
							}
							}else {
							echo '<tr>';
							echo '<td class="text-center" colspan="3"><div class="show-reloadbox"><i class="fas fa-circle-notch fa-spin"></i> No.Ranking PVP</div></td>';
							echo '</tr>';
						}
					?>
				</table>
			</body>
		</html>