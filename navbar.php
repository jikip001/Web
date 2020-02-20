<?php 
	include('system/setting.php');
	$baseURL = base_url();
?>
<html lang="en">
<head>
<!-- seo fb setting -- www.durexz-ro.com -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta property="og:title" content="<?php echo $ser_name; ?>"/>
	<meta property="og:description" content="<?php echo $description; ?>"/>
	<meta property="og:url" content="http://www.guplay-ro.com"/>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="googlebots" content="INDEX,FOLLOW"/>
<!-- end seo fb setting -- www.durexz-ro.com -->
<!-- CSS -->
	<link rel="icon" type="image/x-icon" href="<?php echo $baseURL; ?>/favicon.ico" />
	<link href="<?php echo $baseURL; ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseURL; ?>/assets/css/durex-style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseURL; ?>/assets/css/animate.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseURL; ?>/assets/css/aos.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseURL; ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
	<link href="<?php echo $baseURL; ?>/assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">
<!-- END CSS -->
<!-- JS -->
	<script type="text/javascript" src="<?php echo $baseURL; ?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseURL; ?>/assets/js/jquery.aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>
<!-- END JS -->
	<head>
<div class="navbar_menu">
		<div class="navbar_menu_bg">
			<div class="container">
				<div class="row">
					<nav>
						<ul>
						<li class="navbar_container"><a href="<?php echo $baseURL;?>/home.php">หน้าหลัก<span>Home</span></a></li>
						<li class="navbar_container"><a href="<?php echo $baseURL;?>/register.php" >สมัครสมาชิก<span>Register</span></a></li>
						<li class="navbar_container"><a>ดาวน์โหลดเกมส์<span class="arrow">Download Client</span></a>
						<ul class="dropdown_menu">
						<li><a href="<?php echo $baseURL;?>/download.php" ><i class="fa fa-angle-right" aria-hidden="true"></i> Full Client</a></li>
						</ul>
						</li>
						<li class="navbar_container"><a>แนะนำผู้เล่นใหม่<span class="arrow">Guide Game</span></a>
						<ul class="dropdown_menu">
						<li><a href="<?php echo $baseURL;?>/serverinfo.php" ><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลเซิร์ฟเวอร์</a></li>
						<li><a href="<?php echo $baseURL;?>/guildinfo.php" ><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลกิลด์วอร์</a></li>
						</ul>
						</li>
						<li class="navbar_container"><a href="<?php echo $baseURL;?>/member.php" >เข้าสู่ระบบสมาชิก<span>Dashboard</span></a></li>
						<li class="navbar_container"><a>รับไอเท็มฟรีทุกวัน<span class="arrow">Get Free Item</span></a>
						<ul class="dropdown_menu">
						<li><a href="<?php echo $baseURL;?>/vote.php" ><i class="fa fa-angle-right" aria-hidden="true"></i> โหวตเซิร์ฟเวอร์</a></li>
						</ul>
						</li>
						<li class="navbar_container"><a href="<?php echo $baseURL;?>/donate.php" >บริจาคให้เซิร์ฟเวอร์<span>Donate</span></a></li>
                        <li class="navbar_container"><a href="<?php echo $facebook; ?>" target="_blank">กลุ่มซื้อ-ขาย<span>Social Group</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
</div>