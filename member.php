<?php
	include ('navbar.php');
	error_reporting(0);
	session_start();
	include('system/mysql_crud.php');
	include('system/member.class.php');
	include('system/timezone.php');
	include('system/config.php');
	$db = new Database($DBCONFIG);
	$db->connect();
	$member = new Member($db);
	$ip = $member->getIP();
?>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $ser_name ?></title>
	</head>
	<body class="bg2" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<table width="1200" height="2300" border="0" align="center">
			<tr>
				<td height="940"></td>
			</tr>
			<tr>
				<td align="center" valign="top">
					<!----------------------------------------------------------------- Start Text ------------------------------------------------------------->      			
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<ol class="breadcrumb">
								<li><i class="fas fa-home" aria-hidden="true"></i> หน้าแรก</li>
								<li class="active"><i class="fas fa-folder-open" aria-hidden="true"></i> ระบบสมาชิก</li>
							</ol>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="well">
								<div class="ui main text container">
									<?php
										if( ( $_SESSION['user'] != null || $_SESSION['pass'] != null ) && ($member->checklogin($_SESSION['user'],$_SESSION['pass'])) ){
											echo '<div class="ui menu">
											<a href="#" class="active item">
											<i class="folder open icon"></i>Dashboard
											</a>
											<a href="change/password.php" class="item">
											<i class="gamepad icon"></i>Change Password
											</a>
											<a href="change/email.php" class="item">
											<i class="envelope icon"></i>Change Email
											</a>
											<div class="right menu">
											<a href="logout.php" class="item">
											<i class="sign out alternate icon"></i>Logout
											</a>
											</div>
											</div>';	
											
											$user_table = " SELECT * FROM `acc_reg_num` WHERE `KEY` = '#CASHPOINTS' AND `account_id` = '{$member->aidonweb($_SESSION['user'])}'";
											$user_query=mysql_db_query($DBCONFIG['db_name'],$user_table);			
											$eng_date = strtotime($member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'lastlogin'));
											
											echo '<div class="ui stacked segments">
											<div class="ui segment">
											<h2 class="ui header">
											<i class="street view icon"></i>
											<div class="content">
											User Account
											<div class="sub header">บัญชีผู้ใช้งาน : <span style="color:red;text-transform: uppercase;">',$_SESSION['user'],'</span></div>
											</div>
											</h2>
											</div>
											<div class="ui segment">
											<div class="ui three statistics">
											<div class="grey statistic">
											<div class="value">
											', $member->inc_hwdig($member->aidonweb($_SESSION['user'])), '
											</div>
											<div class="label">
											Vote Points Total
											</div>
											</div>
											<div class="orange statistic">
											<div class="value">';
											if($row == 0){
												while($res = mysql_fetch_array($user_query)){
													$cashpoint = $res['value'];
												}
												echo number_format($cashpoint,0);
												}else{
												echo number_format(0);
											}
											echo '</div>
											<div class="label">
											Cash Points Total
											</div>
											</div>
											<div class="grey statistic">
											<div class="value">
											', $member->inc_share($member->aidonweb($_SESSION['user'])), '
											</div>
											<div class="label">
											Share Points Total
											</div>
											</div>
											</div>
											</div>
											<div class="ui horizontal segments">
											<table class="ui basic table segment">
											<tbody>
											<tr>
											<td>Account ID :</td>
											<td>',$member->aidonweb($_SESSION['user']),'</td>
											</tr>
											<tr>
											<td>สถานะไอดี :</td>
											<td>', $member->statusID($member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'state')), '</td>
											</tr>
											<tr>
											<td>จำนวนเข้าเกมส์ :</td>
											<td>', $member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'logincount'), ' ครั้ง</td>
											</tr>
											</tbody>
											</table>
											<table class="ui basic table segment">
											<tbody>
											<tr>
											<td>User ID :</td>
											<td>',$_SESSION['user'],'</td>
											</tr>
											<tr>
											<td>IP Address :</td>
											<td>',$ip,'</td>
											</tr>
											<tr>
											<td>เข้าเกมส์ล่าสุด :</td>
											<td><time class="timeago" datetime="', $member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'lastlogin'), '" title="'.thai_date($eng_date).'"></time></td>
											</tr>
											</tbody>
											</table>
											</div>
											<div class="ui segment">
											<h2 class="ui header">
											<i class="settings icon"></i>
											<div class="content">
											Character Information
											<div class="sub header">ข้อมูลตัวละครทั้งหมดของผู้เล่น</div>
											</div>
											</h2>
											</div>
											<div class="ui horizontal segments">';
											$res = $member->get_char_uid($_SESSION['user']);		
											if ( $res[0] != null )
											{					
												echo '<table class="ui basic table center aligned segment">
												<thead>
												<tr>
												<th>Name</th>
												<th>Class</th>
												<th>Lv/Job</th>
												<th>Zeny</th>
												<th>Last Map</th>
												<th>Status</th>
												</tr>
												</thead>
												<tbody>';
												foreach( $res as $row ){
													$number = $number+1;								  
													echo '<tr>
													<td>'.$row['name'].'</td>
													<td>' . $_CONFIG['job']['class_ro'][$row['class']] . '</td>
													<td>'.$row['base_level'].'/'.$row['job_level'].'</td>
													<td>'.number_format($row['zeny']).'</td>
													<td>'.$row['last_map'].' ('.$row['last_x'].','.$row['last_y'].')</td>
													<td>',$member->statusOn($row['online']),'</td>
													</tr>';
												}
												}else{
												echo '<table class="ui basic table center aligned segment">
												<thead>
												<tr>
												<th>Name</th>
												<th>Class</th>
												<th>Lv/Job</th>
												<th>Zeny</th>
												<th>Last Map</th>
												<th>Status</th>
												</tr>
												</thead>
												<tbody>';								
												echo '<tr>
												<td colspan="6">
												ไม่พบข้อมูลตัวละครในระบบ คุณต้องสร้างตัวละคร (<small>No character data in the system. Please create a character with it</small>)
												</td>
												</tr>';
											}								
											echo '
											</tbody>
											</table>';							
											echo '</div>
											<div class="ui segment">
											<p style="font-size:12px;color:red"><i class="question icon"></i> แสดงข้อมูลตัวละคร สูงสุด 10 ตัวละคร และ Backup ข้อมูลตัวละคร ทุกๆ 5 นาที</p>
											</div>
											</div>
											';
										}
										else
										{	
											if($_POST['login']){
												if( !empty($_POST['user']) && !empty($_POST['pass']) ){
													$ok = $member->mem_login($_POST['user'],$_POST['pass']);
													if($ok){
														echo '<script type="text/javascript">';
														echo 'setTimeout(function () {';
														echo 'swal("การเข้าสู่ระบบสำเร็จ","ยินดีต้อนรับเข้าสู่ระบบสมาชิก","success").then( function(val) {';
														echo 'if (val == true) window.location.href = \'member.php\';';
														echo '});';
														echo '}, 200);  </script>';
														}else{
														echo '<script type="text/javascript">';
														echo 'setTimeout(function () {';
														echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","Username / Passowrd ของคุณอาจไม่ถูกต้อง","error").then( function(val) {';
														echo 'if (val == true) window.location.href = \'member.php\';';
														echo '});';
														echo '}, 200);</script>';
													}
													}else{
													echo '<script type="text/javascript">';
													echo 'setTimeout(function () {';
													echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","กรุณาระบุข้อมูลให้ชัดเจนมากกว่านี้ !","error").then( function(val) {';
													echo 'if (val == true) window.location.href = \'member.php\';';
													echo '});';
													echo '}, 200);</script>';
												}
											}
											echo '<div class="ui attached message">
											<div class="header">
											Member Login
											</div>
											<p>เข้าสู่ระบบสมาชิก</p>
											</div>
											<form class="ui form attached fluid segment" method="post">
											<div class="field">
											<label>Username / ID</label>
											<input type="text" name="user" placeholder="ไอดีเกมส์ของคุณ" style="letter-spacing:0.1em" autofocus required>
											</div>
											<div class="field">
											<label>Password</label>
											<input type="password" placeholder="รหัสผ่านของคุณ" name="pass" style="letter-spacing:0.1em" autofocus required>
											</div>
											<button class="ui green submit button" type="submit" value="submit" name="login"><i class="sign in alternate icon"></i> เข้าสู่ระบบ</button>
											<button class="ui button" type="reset"><i class="eraser icon"></i> ยกเลิก</button>
											</form>
											';			
										}
									?>
								</div>		
							</div>
						</div>
					</div>
					<!----------------------------------------------------------------- End Text -------------------------------------------------------------> 			
				</td>
			</tr>
		</table>
	</body>
</html>
<?php
	include ('footer.php');
?>
