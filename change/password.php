<?php
	include ('../navbar.php');
	error_reporting(0);
	session_start();
	include('../system/mysql_crud.php');
	include('../system/member.class.php');
	include('../system/config.php');
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
		<table width="1200" height="1800" border="0" align="center">
			<tr>
				<td height="900"></td>
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
							<a href="../member" class="item">
								<i class="folder open icon"></i>Dashboard
							</a>
							<a href="password.php" class="active item">
								<i class="gamepad icon"></i>Change Password
							</a>
							<a href="email.php" class="item">
								<i class="envelope icon"></i>Change Email
							</a>
							<div class="right menu">
							<a href="../logout.php" class="item">
								<i class="sign out alternate icon"></i>Logout
							</a>
							</div>
						</div>';	
									
				echo '<div class="ui stacked segments">
							  <div class="ui segment">
								<h2 class="ui header">
								  <i class="pencil alternate icon"></i>
								  <div class="content">
									Change Password
									<div class="sub header">เปลี่ยนรหัสผ่าน User ID : <span style="color:red;text-transform: uppercase;">',$_SESSION['user'],'</span></div>
								  </div>
								</h2>
							  </div>';
if(@$_POST['submit_pass']){
		$ok = $member->changepass($member->aidonweb($_SESSION['user']),$_POST['passold'],$_POST['passnew1'],$_POST['passnew2'],$_POST['passold1']);
			if($ok){
				echo ''.$ok.'';
			}
	}							  
							 echo '<form class="ui form segment" method="post">
								  <div class="field">
									<label>Username / ID</label>
									<div class="ui disabled input">
										<input type="text" value="',$_SESSION['user'],'">
									</div>
								  </div>
								  <div class="two fields">
									<div class="field">
									  <label>Current Password</label>
									  <input type="password" name="passold" placeholder="รหัสผ่านปัจจุบัน" >
									</div>
									<div class="field">
									  <label>Current Password Confirm</label>
									  <input type="password" name="passold1" placeholder="ยืนยันรหัสผ่านปัจจุบัน">
									</div>
								  </div>
								  <div class="two fields">
									<div class="field">
									  <label>New Password</label>
									  <input type="password" name="passnew1" placeholder="รหัสผ่านใหม่">
									</div>
									<div class="field">
									  <label>New Password Confirm</label>
									  <input type="password" name="passnew2" placeholder="ยืนยันรหัสผ่านใหม่">
									</div>
								  </div>
								  <button value="submit_pass" name="submit_pass" class="ui green button" type="submit">Save</button>
								</form>
							  <div class="ui segment">
								<p style="font-size:12px;color:gray"><i class="question icon"></i> พบปัญหาการใช้งาน โปรดติดต่อแจ้งทีมงาน <span style="color:red">Live Chat หรือ Facebook Fanpage</span> ได้ตลอด 24 ชั่วโมง</p>
							  </div>
							</div>
				';
	}
	else
	{	
		if(@$_POST['login']){
				if( !empty($_POST['user']) && !empty($_POST['pass']) ){
					$ok = $member->mem_login($_POST['user'],$_POST['pass']);
						if($ok){
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบสำเร็จ","ยินดีต้อนรับเข้าสู่ระบบสมาชิก","success").then( function(val) {';
							echo 'if (val == true) window.location.href = \'../member.php\';';
							echo '});';
							echo '}, 200);  </script>';
						}else{
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","Username / Passowrd ของคุณอาจไม่ถูกต้อง","error").then( function(val) {';
							echo 'if (val == true) window.location.href = \'../member.php\';';
							echo '});';
							echo '}, 200);</script>';
						}
						}else{
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","กรุณาระบุข้อมูลให้ชัดเจนมากกว่านี้ !","error").then( function(val) {';
							echo 'if (val == true) window.location.href = \'../member.php\';';
							echo '});';
							echo '}, 200);</script>';
						}
			}
				echo '<div class="ui attached  tiny message">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.aos.js"></script>
<!--<script type="text/javascript" src="../assets/js/durexzstudio.min.js"></script>-->
<?php
	include ('../footer.php');
?>
