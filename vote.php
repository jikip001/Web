<?php
	include ('navbar.php');
	$playserver = '';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $ser_name ?></title>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<body class="bg2" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1200" height="2000" border="0" align="center">
  <tr>
    <td height="900"></td>
  </tr>
  <tr>
    <td align="center" valign="top">
<!----------------------------------------------------------------- Start Text ------------------------------------------------------------->      			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ol class="breadcrumb">
					  <li><a href="../"><i class="fas fa-home" aria-hidden="true"></i> หน้าแรก</a></li>
					  <li class="active"><i class="fas fa-folder-open" aria-hidden="true"></i> โหวตเซิฟเวอร์</li>
					</ol>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="well">
						<div class="main-header">
							 <span>โหวตเซิฟเวอร์ <small>Vote Server</small></span>
						</div>
						
					<div class="box-sv box-green" style="margin-top:30px">
							<div class="box-sv-body">
								<div class="box-text-haeder"><i class="fas fa-eye fa-flip-horizontal fa-lg"></i> Description <small>รายละเอียดกิจกรรม</small></div>
								<div class="line-box"></div>
								<ul class="list-unstyled">
								<li class="list-text">เงื่อนไขการเข้าร่วมกิจกรรม</li>
								<li class="list-text">1. กดโหวตเซิร์ฟเวอร์ <strong>จันทร์-ศุกร์ x10, เสาร์-อาทิตย์ x15</strong> สะสมแต้มโหวต แล้วนำมาแลกของรางวัลมากมาย</li>
								<li class="list-text">2. ตัดแต้มอันดับ แจกรางวัลทุก 2-3 อาทิตย์ แจกแคช 1,000 แคช ครั้งแรก <strong>21 พฤศจิกายน 2562 เวลา 23:59 น.</strong></li>
								<li class="list-text">3. อันดับ 1. 1000 แคช อันดับ 2. 500 แคช อันดับ 3. 300 แคช มาช่วยกันโหวตเซิร์ฟเวอร์ ได้ทั้งของรางวัล ได้ทั้งแคช</li>
								</ul>
							</div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:30px">
							<div class="box-sv-body">
								<div class="box-text-haeder"><i class="fas fa-gamepad fa-lg"></i> Vote By.Playserver.in.th <small>โหวตเซิร์ฟเวอร์ผ่านเว็บไซต์</small></div>
								<div class="line-box"></div>
								<ul class="list-unstyled">
								<li><a href="<?php echo $playserver; ?>" onclick="window.open(this.href, 'vote-server','left=50,top=50,width=800,height=600,toolbar=1,resizable=0'); return false;" class="btn btn-vote btn-lg btn-block" autofocus><i class="fas fa-link"></i> เข้าร่วมกิจกรรม Vote Server ที่นี้</a></li>
								</ul>
							</div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:30px">
							<div class="box-sv-body">
								<div class="box-text-haeder"><i class="fas fa-gift fa-lg"></i> Vote Point <small>แต้มโหวต</small></div>
								<div class="line-box"></div>
								<ul class="list-unstyled">
								<li class="list-text">1. โหวต จันทร์-ศุกร์ x10 1โหวต = 10แต้ม</li>
								<li class="list-text">2. เสาร์-อาทิตย์ x15 1โหวต = 15แต้ม</li>
								<li class="list-text">3. 30แต้ม = 1Cash Point</li>
								<li class="list-text"></li>
								</ul>
							</div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:30px">
							<div class="box-sv-body">
								<div class="box-text-haeder"><i class="fas fa-gift fa-lg"></i> Reward Vote Server <small>ของรางวัลกิจกรรม</small></div>
								<div class="line-box"></div>
								<ul class="list-unstyled">
								<li class="list-text" style="text-align:center">
								<img src="images/vote/1.jpg" width="266" height="266">
								<img src="images/vote/2.jpg" width="266" height="266">
								<img src="images/vote/3.jpg" width="266" height="266">
								<img src="images/vote/4.jpg" width="266" height="266">
								</li>
								</ul>
							</div>
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
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.aos.js"></script>
<script type="text/javascript" src="assets/js/durexzstudio.min.js"></script>
<?php
	include ('footer.php');
?>
