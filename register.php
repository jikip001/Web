<?php
	include ('navbar.php');
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $ser_name; ?></title>
	</head>
	<body class="bg2" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<table width="1200" border="0" align="center">
			<tr>
				<td height="780"></td>
			</tr>
			<tr>
				<td height="1200">
					<form action="system/api_register.php" method="post" id="registerform">
						<!----------------------------------------------------------------- Start Text ------------------------------------------------------------->      			
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ol class="breadcrumb">
									<li><i class="fas fa-home" aria-hidden="true"></i> หน้าแรก</li>
									<li class="active"><i class="fas fa-folder-open" aria-hidden="true"></i> สร้างบัญชีผู้ใช้งาน</li>
								</ol>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="well">
									<div class="main-header">
										<span>สร้างบัญชีผู้ใช้งาน<small> Create Account</small></span>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
											<div id="alert_register">
											</div>
											<!-- Account ID -->
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
												<div class="form-group has-feedback">
													<label>ID Game (ไอดีเกมส์)</label>
													<input type="text" class="form-control input-lg" name="user1" placeholder="ระบุไอดีเกมส์ ตัวอักษร A-Z,0-9 (6-12ขึ้นไป)" autocomplete="off" autofocus>
													<span class="fas fa-user fa-2x form-control-feedback" aria-hidden="true"></span>
													<span class="help-block">หมายเหตุ ! : ห้ามผู้เล่นสร้างบัญชีผู้ใช้งานเดียวกับเซิฟเวอร์อื่น ป้องกันการถูกแฮก ID Game</span>
												</div>
											</div>
											<!-- End Account ID -->
											
											<!-- Password -->
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
												<div class="form-group has-feedback">
													<label>Password (รหัสผ่าน)</label>
													<input type="password" class="form-control input-lg" name="pass1" placeholder="ระบุรหัสผ่าน ตัวอักษร A-Z,0-9 (6-12ขึ้นไป)" autocomplete="off">
													<span class="fas fa-unlock-alt fa-2x form-control-feedback" aria-hidden="true"></span>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
												<div class="form-group has-feedback">
													<label>Password Confirm (ยืนยันรหัสผ่าน)</label>
													<input type="password" class="form-control input-lg" name="pass2" placeholder="ยืนยันรหัสผ่านให้ตรงกัน" autocomplete="off">
													<span class="fas fa-unlock fa-2x form-control-feedback" aria-hidden="true"></span>
												</div>
											</div>
											<!-- End Password -->
											
											<!-- Email -->
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
												<div class="form-group has-feedback">
													<label>Email (อีเมล์ผู้ใช้งาน)</label>
													<input type="email" class="form-control input-lg" name="email1" placeholder="เช่น 1234@hotmail.com" autocomplete="off">
													<span class="fas fa-envelope fa-2x form-control-feedback" aria-hidden="true"></span>
												</div>
											</div>
											<!-- End Email -->
											
											
											<!-- Birth -->
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="form-group has-feedback">
										<label>Birthdate (วันเกิด)</label>
										<div class="row">
										  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											  <select name="day" id="ay" class="form-control input-lg2">
												<option value="--" selected>วัน</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											  </select>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<select name="month" id="month" class="form-control input-lg2">
										   <option value="--" selected>เดือน</option>
										   <option value="01">มกราคม</option>
										   <option value="02">กุมภาพันธ์</option>
										   <option value="03">มีนาคม</option>
										   <option value="04">เมษายน</option>
										   <option value="05">พฤษภาคม</option>
										   <option value="06">มิถุนายน</option>
										   <option value="07">กรกฎาคม</option>
										   <option value="08">สิงหาคม</option>
										   <option value="09">กันยายน</option>
										   <option value="10">ตุลาคม</option>
										   <option value="10">พฤศจิกายน</option>
										   <option value="12">ธันวาคม</option>
										   </select>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<select name="year" id="year" class="form-control input-lg2">
										  <option value="--" selected>ปี</option>
										  <option value="2020">2020 ( พ.ศ.2563 )</option>
										  <option value="2019">2019 ( พ.ศ.2562 )</option>
										  <option value="2018">2018 ( พ.ศ.2561 )</option>
										  <option value="2017">2017 ( พ.ศ.2560 )</option>
										  <option value="2016">2016 ( พ.ศ.2559 )</option>
										  <option value="2015">2015 ( พ.ศ.2558 )</option>
										  <option value="2014">2014 ( พ.ศ.2557 )</option>
										  <option value="2013">2013 ( พ.ศ.2556 )</option>
										  <option value="2012">2012 ( พ.ศ.2555 )</option>
										  <option value="2011">2011 ( พ.ศ.2554 )</option>
										  <option value="2010">2010 ( พ.ศ.2553 )</option>
										  <option value="2009">2009 ( พ.ศ.2552 )</option>
										  <option value="2008">2008 ( พ.ศ.2551 )</option>
										  <option value="2007">2007 ( พ.ศ.2550 )</option>
										  <option value="2006">2006 ( พ.ศ.2549 )</option>
										  <option value="2005">2005 ( พ.ศ.2548 )</option>
										  <option value="2004">2004 ( พ.ศ.2547 )</option>
										  <option value="2003">2003 ( พ.ศ.2546 )</option>
										  <option value="2002">2002 ( พ.ศ.2545 )</option>
										  <option value="2001">2001 ( พ.ศ.2544 )</option>
										  <option value="2000">2000 ( พ.ศ.2543 )</option>
										  <option value="1999">1999 ( พ.ศ.2542 )</option>
										  <option value="1998">1998 ( พ.ศ.2541 )</option>
										  <option value="1997">1997 ( พ.ศ.2540 )</option>
										  <option value="1996">1996 ( พ.ศ.2539 )</option>
										  <option value="1995">1995 ( พ.ศ.2538 )</option>
										  <option value="1994">1994 ( พ.ศ.2537 )</option>
										  <option value="1993">1993 ( พ.ศ.2536 )</option>
										  <option value="1992">1992 ( พ.ศ.2535 )</option>
										  <option value="1991">1991 ( พ.ศ.2534 )</option>
										  <option value="1990">1990 ( พ.ศ.2533 )</option>
										  <option value="1989">1989 ( พ.ศ.2532 )</option>
										  <option value="1988">1988 ( พ.ศ.2531 )</option>
										  <option value="1987">1987 ( พ.ศ.2530 )</option>
										  <option value="1986">1986 ( พ.ศ.2529 )</option>
										  <option value="1985">1985 ( พ.ศ.2528 )</option>
										  <option value="1984">1984 ( พ.ศ.2527 )</option>
										  <option value="1983">1983 ( พ.ศ.2526 )</option>
										  <option value="1982">1982 ( พ.ศ.2525 )</option>
										  <option value="1981">1981 ( พ.ศ.2524 )</option>
										  <option value="1980">1980 ( พ.ศ.2523 )</option>
										  <option value="1979">1979 ( พ.ศ.2522 )</option>
										  <option value="1978">1978 ( พ.ศ.2521 )</option>
										  <option value="1977">1977 ( พ.ศ.2520 )</option>
										  <option value="1976">1976 ( พ.ศ.2519 )</option>
										  <option value="1975">1975 ( พ.ศ.2518 )</option>
										  <option value="1974">1974 ( พ.ศ.2517 )</option>
										  <option value="1973">1973 ( พ.ศ.2516 )</option>
										  <option value="1972">1972 ( พ.ศ.2515 )</option>
										  <option value="1971">1971 ( พ.ศ.2514 )</option>
										  <option value="1970">1970 ( พ.ศ.2513 )</option>
											  </select>
											</div>
										</div>
										<span class="help-block">หมายเหตุ ! : วัน เดือน ปี เพื่อทำการลบตัวละคร โปรดใส่วันเกิดของท่าน</span>
										</div>
									  </div>
											<!-- End Birth -->
											
											<!-- Gender -->
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<label>Gender
													<input type="radio" name="gender1" value="M"> Male (ชาย)
													<img src="images/icon/male.png" height="45">
													<input type="radio" name="gender1" value="F"> Female (หญิง)
													<img src="images/icon/female.png" height="45">
												</label>
											</div>
											<!-- End Gender -->
											
											
											<!-- Security Code -->
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
												<div class="form-group">
													<label >Security Code :</label>
													<div class="input-group">
														<span class="input-group-addon"><img src="system/captcha.php" name="image"></span>
														<input type="text" class="form-control input-lg2" name="ans" placeholder="ตอบคำถาม เป็นตัวเลข" autocomplete="off">
													</div>
												</div>
											</div>
											<!-- End Security Code -->
											
											<!-- Submit -->
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top:20px" >
												<button type="submit" id="btnreg" class="btn btn-register btn-lg btn-block"><i class="fa fa-user-plus" aria-hidden="true"></i> สร้างบัญชีผู้ใช้งาน</button>
											</div>
											<!-- End Submit -->
											
											<!-- Reset -->
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top:20px" >
												<button type="reset" class="btn btn-close btn-lg btn-block"><i class="fa fa-user-times" aria-hidden="true"></i> ยกเลิก</button>
											</div> 
											<!-- End Reset -->
											
											
										</form>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //row -->
			</td>
		</tr>
	</table>
</body>
</html>

<script>
	$(function(){
		
		$("#registerform").submit(function(event) {
			event.preventDefault();
			//$("#alert_register").html("<p class=\"alert text-center animated fadeIn\">กำลังสมัคร กรุณารอสักครู่..</p>");
			//$("#btnreg").attr('disabled', 'disabled');
				$.post("system/api_register.php", $(this).serialize() ).done(function(data) {
					$("#registerform")[0].reset();
					$("#alert_register").html(data);
					$("#btnreg").removeAttr('disabled');
				});
			return false;
		});
			
	});
</script>

<?php
	include ('footer.php');
?>	