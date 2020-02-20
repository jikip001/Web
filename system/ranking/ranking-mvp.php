<?php
	error_reporting(0);
	require('../mysql_crud.php');
	require('../ranking.class.php');
	require('../config.php'); 
	require('../setting.php');
	$baseURL = base_url();
	$db = new Database($DBCONFIG);
	$ranking = new Ranking($db);
	$mvprank = $ranking->get_mvprank_char(12);
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
				<tr class="name green">
					<th class="name-num">อันดับ</th>
					<th class="name-name">ชื่อผู้เล่น</th>
					<th class="name-point">พ้อย</th>
				</tr>
				<?php
					$o = 1;
					if ( $mvprank != NULL ) {
						foreach( $mvprank as $row ) {
						echo '<tr>'; ?>
						<td><div class='rank_num'><?php echo $o; ?>.</div></td>
						<td><div class='rank_name'><?php if($row['point_mvp']>0){ echo $row['name']; }else{ echo "Nuxx" ;} ?></td>
							<td><div class='rank_point'><?php echo number_format($row['point_mvp']); ?></div></td>
							<?php  echo '</tr>';
								$o++;
							}
							}else {
							echo '<tr>';
							echo '<td class="text-center" colspan="3"><div class="show-reloadbox"><i class="fas fa-circle-notch fa-spin"></i> No.Ranking MVP</div></td>';
							echo '</tr>';
						}
					?>
				</table>
			</body>
		</html>