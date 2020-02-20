<?php
	include ('navbar.php');
	error_reporting(0);
	session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $ser_name ?></title>
</head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<body class="bg2" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1200" height="1800" border="0" align="center">
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
					  <li class="active"><i class="fas fa-folder-open" aria-hidden="true"></i> บริจาคให้เซิร์ฟเวอร์</li>
					</ol>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="well">
		<?php
include_once('system/tmpay/config_tmpay.php');
include_once('system/tmpay/functions.php');

/* connect to mysql server */
$_CONFIG['mysql']['connection'] = new mysqli($_CONFIG['mysql']['host'],$_CONFIG['mysql']['username'],$_CONFIG['mysql']['password']);
if ($_CONFIG['mysql']['connection']->connect_error)
{
    die($_CONFIG['mysql']['connection']->connect_errno . ':' . $_CONFIG['mysql']['connection']->connect_error);
}
$_CONFIG['mysql']['connection']->select_db($_CONFIG['mysql']['db_name']) or die($_CONFIG['mysql']['connection']->errno . ':' . $_CONFIG['mysql']['connection']->error);
$_CONFIG['mysql']['connection']->query('SELECT 1 FROM truemoney LIMIT 1') or die($_CONFIG['mysql']['connection']->errno . ':' . $_CONFIG['mysql']['connection']->error);

if(function_exists('curl_init') == false)
{
	die('cURL extension must be enabled');
}

if(isset($_GET['logout']))
{
	session_unset();
}

if(empty($_SESSION['account_id']))
{
	if(isset($_POST['username']) && misc_parsestring($_POST['username']) == TRUE && empty($_POST['password']) == FALSE)
	{
		sleep(3);
		$_POST['username'] = strtolower($_POST['username']);
		$login_info = game_authen($_POST['username'],$_POST['password']);
		if($login_info['flag'] == true)
		{
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['account_id'] = $login_info['id'];
			$array_desc = str_split('ABCDEFGHIJ');
			$_SESSION['array_desc'] = $array_desc;
				echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบสำเร็จ","ยินดีต้อนรับเข้าสู่ระบบเติมเงิน","success").then( function(val) {';
							echo 'if (val == true) window.location.href = \'donate.php\';';
							echo '});';
							echo '}, 200);  </script>';
		}
		else
		{
				session_unset();
						echo '<script type="text/javascript">';
						echo 'setTimeout(function () {';
						echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","Username / Passowrd ของคุณอาจไม่ถูกต้อง","error").then( function(val) {';
						echo 'if (val == true) window.location.href = \'donate.php\';';
						echo '});';
						echo '}, 200);</script>';	
		}
	}
	else
	{
		echo '<div class="ui attached message">
				  <div class="header">
					Member Login
				  </div>
				  <p>เข้าสู่ระบบสนับสนุน</p>
				</div>
				<form class="ui form attached fluid segment" method="post" action="?' . session_id() . '&' . mt_rand() . '">
				  <div class="field" style="text-align:left">
					<label>Username / ID</label>
					<input type="text" name="username" placeholder="ไอดีเกมส์ของคุณ" style="letter-spacing:0.1em" autofocus required>
				  </div>
				  <div class="field" style="text-align:left">
					<label>Password</label>
					<input type="password" placeholder="รหัสผ่านของคุณ" name="password" style="letter-spacing:0.1em" autofocus required>
				  </div>
				  <button class="ui green submit button" type="submit"><i class="sign in alternate icon"></i> เข้าสู่ระบบ</button>
				  <button class="ui button" type="reset"><i class="eraser icon"></i> ยกเลิก</button>
				</form>
				';
		echo '<div class="ui attached message">
				  <div class="header">
					อัตราการเติมเงิน : <span style="color:red">True</span> <span style="color:orange">Money</span> และ <span style="color:red">True</span> <span style="color:orange">Wallet</span>
				  </div>
			</div>
		';
		echo '<table class="ui basic table attached">
				<thead>
					<tr>
					<th class="center aligned">Truemoney</th>
					<th class="center aligned">จำนวนที่ได้รับ</th>
					<th class="center aligned">TrueWallet</th>
					<th class="center aligned">จำนวนที่ได้รับ</th>
					<th class="center aligned">โปรโมชั่นของแถม</th>
					</tr> 
				</thead> 
				<tbody>
					<tr>
					<td class="center aligned">50บาท</td>
					<td class="center aligned">'.$truemoney_50.' Point</td>
					<td class="center aligned">50บาท</td>
					<td class="center aligned">'.$truewallet_50.' Point</td>
					<td class="center aligned">'.$img_bonus1.' '.$item_name1.' '.$item_count50.'</td>
					</tr>
					<tr>
					<td class="center aligned">90บาท</td>
					<td class="center aligned">'.$truemoney_90.' Point</td>
					<td class="center aligned">90บาท</td>
					<td class="center aligned">'.$truewallet_90.' Point</td>
					<td class="center aligned">'.$img_bonus1.' '.$item_name1.' '.$item_count90.'</td>
					</tr>
					<tr>
					<td class="center aligned">150บาท</td>
					<td class="center aligned">'.$truemoney_150.' Point</td>
					<td class="center aligned">150บาท</td>
					<td class="center aligned">'.$truewallet_150.' Point</td>
					<td class="center aligned">'.$img_bonus1.' '.$item_name1.' '.$item_count150.'</td>
					</tr>
					<tr>
					<td class="center aligned">300บาท</td>
					<td class="center aligned">'.$truemoney_300.' Point</td>
					<td class="center aligned">300บาท</td>
					<td class="center aligned">'.$truewallet_300.' Point</td>
					<td class="center aligned">'.$img_bonus1.' '.$item_name1.' '.$item_count300.'</td>
					</tr>
					<tr>
					<td class="center aligned">500บาท</td>
					<td class="center aligned">'.$truemoney_500.' Point</td>
					<td class="center aligned">500บาท</td>
					<td class="center aligned">'.$truewallet_500.' Point</td>
					<td class="center aligned">'.$img_bonus1.' '.$item_name1.' '.$item_count500.'</td>
					</tr>
					<tr>
					<td class="center aligned">1,000บาท</td>
					<td class="center aligned">'.$truemoney_1000.' Point</td>
					<td class="center aligned">1,000บาท</td>
					<td class="center aligned">'.$truewallet_1000.' Point</td>
					<td class="center aligned">'.$img_bonus1.' '.$item_name1.' '.$item_count1000.'</td>
					</tr>
				</tbody>
			</table>
		';
		echo '<div class="ui bottom attached mini negative message">
				<i class="icon help"></i> คำแนะนำ : เติมเงินผ่าน TrueWallet และ ธนาคาร 300บาทขึ้นไป x2 และ ทุกๆ 100บาท รับฟรี 1Bonus Coin ติดต่อในเกม หรือ Discord เท่านั้น
			</div>
			<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			</div> 
		';
	}
}
else
{
	if(isset($_POST['truemoney_password']) && isset($_SESSION['can_refill']) && isset($_POST['encode_hash']) && $_POST['encode_hash'] == md5($_SESSION['can_refill']))
	{
		$_SESSION['can_refill'] = unserialize($_SESSION['can_refill']);
		foreach($_SESSION['can_refill'] as $digit=>$char)
		{
			$_POST['truemoney_password'] = str_replace($char,$digit,$_POST['truemoney_password']);
		}
		unset($_SESSION['can_refill']);
		if (misc_parsestring($_POST['truemoney_password'],'0123456789') == FALSE || strlen($_POST['truemoney_password']) != 14)
		{
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () {';
			echo 'swal("เติมเงินไม่สำเร็จ !","โปรดระบุรหัสบัตรทรูมันนี่ เฉพาะตัวเลข 14 หลัก เท่านั้น","error").then( function(val) {';
			echo 'if (val == true) window.location.href = \'donate.php\';';
			echo '});';
			echo '}, 200);</script>';
		}
		else if (refill_countcards('WHERE password = \'' . $_POST['truemoney_password'] . '\' AND (status = 0 OR status = 1 OR status = 2)') == 1)
		{
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () {';
			echo 'swal("เติมเงินไม่สำเร็จ !","รหัสบัตรเงินสดที่ระบุถูกใช้งานไปแล้ว","error").then( function(val) {';
			echo 'if (val == true) window.location.href = \'donate.php\';';
			echo '});';
			echo '}, 200);</script>';
		}
		else if (refill_countcards('WHERE user_id = ' . $_SESSION['account_id'] . ' AND status = 0') >= 3)
		{
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () {';
			echo 'swal("เติมเงินไม่สำเร็จ !","โปรดรอสักครู่ มีรหัสบัตรเงินสดที่รอการตรวจสอบ","error").then( function(val) {';
			echo 'if (val == true) window.location.href = \'donate.php\';';
			echo '});';
			echo '}, 200);</script>';
		}
		else if (refill_countcards('WHERE user_id = ' . $_SESSION['account_id'] . ' AND status > 2 AND added_time > DATE_SUB(NOW(),INTERVAL 1 DAY)') >= 3)
		{
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () {';
			echo 'swal("เติมเงินไม่สำเร็จ !","ระงับการเติมเงิน 24 ชม. ทำรายการผิดพลาด เกิน 5 ครั้ง","error").then( function(val) {';
			echo 'if (val == true) window.location.href = \'donate.php\';';
			echo '});';
			echo '}, 200);</script>';
		}
		else
		{
			if(($tmpay_ret = refill_sendcard($_SESSION['account_id'],$_POST['truemoney_password'])) !== TRUE)
			{
				echo '<script type="text/javascript">';
				echo 'setTimeout(function () {';
				echo 'swal("พบข้อผิดพลาด !","ระบบเติมเงิน มีปัญหา โปรดแจ้งทีมงาน","error").then( function(val) {';
				echo 'if (val == true) window.location.href = \'donate.php\';';
				echo '});';
				echo '}, 200);</script>';
			}
			else
			{
				echo '<script type="text/javascript">';
				echo 'setTimeout(function () {';
				echo 'swal("เติมเงินสำเร็จ !","ตรวจสอบข้อมูลได้ที่ ประวัติการเติมเงิน","success").then( function(val) {';
				echo 'if (val == true) window.location.href = \'donate.php\';';
				echo 'if (val == true) window.location.href = \'donate.php\';';
				echo '});';
				echo '}, 200);  </script>';
			}
		}
	}
	else
	{
		$array_desc = $_SESSION['array_desc'];
		shuffle($array_desc);
		$_SESSION['can_refill'] = serialize($array_desc);
		echo '
		<script type="text/javascript">
		function encode_tmnc()
		{
			var temp = document.getElementById("truemoney_password_tmp").value;
		';
		foreach($array_desc as $digit=>$char)
		{
			echo '
			while(temp.indexOf(\'' . $digit . '\')!=-1) { temp = temp.replace(\'' . $digit . '\',\'' . $char . '\'); }';
		}
		echo '
			document.getElementById("truemoney_password").value = temp;
			document.getElementById("truemoney_password_tmp").value = "";
		}
		</script>';
		$cards = refill_getcards($_SESSION['account_id'],20);
		echo '
		 <form id="form1" name="form1" method="post" action="?' . session_id() . '-' . mt_rand() . '" onsubmit="encode_tmnc();">
		 <div class="ui info small message">
				  <div class="header">
					<i class="bullhorn icon"></i> คำแนะนำก่อนเติมเงิน
				  </div>
				  <ul class="list">
					<li>ใช้เวลาตรวจสอบประมาณ 1-5 นาที (หากพบปัญหาในการสนับสนุน โปรดแจ้งทีมงาน)</li>
					<li>ระบบรองรับเติมเงินได้เฉพาะบัตรเงินสด Truemoney Card เท่านั้น</li>
					<li>ระบบเติมเงิน เป็นระบบอัตโนมัติ เมื่อทำรายการสำเร็จ Cash Point และ Item Bonus จะส่งเข้าเกมส์ทันที</li>
				  </ul>
				</div>
				
				<div class="row">
				<div class="field">
					<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:left">
						<label>Game ID</label>
						<div class="ui disabled input">
						<input type="text" value="'.$_SESSION['username'].'" disabled>
						</div>
				  </div>
				</div>
				
					<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:left">
						<label>Truemoney Password</label>
						<input type="text" name="truemoney_password_tmp"  id="truemoney_password_tmp" class="form-control input-lg" maxlength="14" placeholder="ระบุรหัสบัตรทรูมันนี่ 14 หลัก" required>
						<input name="truemoney_password" type="hidden" id="truemoney_password" />
						<input name="encode_hash" type="hidden" id="encode_hash" value="' . md5($_SESSION['can_refill']) . '" />
					</div>
				</div>
				  
				  
				  <button class="ui blue submit button" type="submit"><i class="shopping cart icon"></i> เติมเงิน</button>
				  <a href="logout.php" class="ui button"><i class="sign out alternate icon"></i> ออกจากระบบ</a>

				<br><br>';
		if(empty($cards) == false)
		{
			echo '
			<table border="0" align="center" cellpadding="5" cellspacing="2">
			  <tr>
				<td width="20%" align="center"><strong>รหัสบัตรเงินสด</strong></td>
				<td width="20%" align="center"><strong>มูลค่า</strong></td>
				<td width="20%" align="center"><strong>สถานะ</strong></td>
				<td width="20%" align="center"><strong>เวลาที่เพิ่มเข้าระบบ</strong></td>
			  </tr>';
			 foreach($cards as $val)
			{
				echo '
				  <tr>
					<td align="center">' . $val['password'] . '</td>
					<td align="center">' . $_CONFIG['tmpay']['amount'][$val['amount']] . ' บาท</td>
					<td align="center">' . $_CONFIG['tmpay']['card_status'][$val['status']] . '</td>
					<td align="center">' . $val['added_time'] . '</td>
				  </tr>';
			}
			echo '
			 </table><br />';
		}
		echo'

				<div class="ui bottom attached warning message">
				  <i class="icon help"></i>
				  พบปัญหาการใช้งาน โปรดติดต่อแจ้งทีมงาน <a href="',$facebook,'" target="_blank">Live Chat</a> ได้ตลอด 24 ชั่วโมง
				</div>
			<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
			</div> 
		</form>';
	}
}
$_CONFIG['mysql']['connection']->close();
?>
  </tr>
</table>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.aos.js"></script>
<script type="text/javascript" src="assets/js/durexzstudio.min.js"></script>
<?php
	include ('footer.php');
?>
