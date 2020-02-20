<?php	
	session_start();
	include('mysql_crud.php');
	include('config.php'); 
	error_reporting(0);
	
	// Connect DB
	$db = new Database($DBCONFIG);
	$db->connect();
	
	$db->select('login', '*', NULL, 'userid="'.$db->clean_input($_POST['user1']).'" OR email="'.$db->clean_input($_POST['pass1']).'"');
	$res_uniuqe = $db->getResult();
	
	//sleep(1);
	
	$lang = "/^[a-zA-Z0-9][a-zA-Z0-9]*$/i";
	$langsls = "/^[0-9]*$/i";
	$birthdate = $_POST['year']."-". $_POST['month']."-".$_POST['day'];
	if ( empty($_POST['user1']) || empty($_POST['pass1']) || empty($birthdate) /*|| empty($_POST['slscode1'])*/ || empty($_POST['email1']) || empty($_POST['gender1']) ) {
	    
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด !","กรอกข้อมูลไม่ครบถ้วน","error").then( function(val) {';
		echo 'if (val == true) window.location.href = \'register.php\';';
		echo '});';
		echo '}, 200);</script>';
		
		} elseif ( $_POST['ans'] != $_SESSION['security_code']) {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด !","Security Code ไม่ถูกต้อง","warning").then( function(val) {';
		echo '});';
		echo '}, 200);</script>';
		
		} elseif ( !preg_match($lang,$_POST['user1']) || !preg_match($lang,$_POST['pass1']) ) {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด !","ID Game หรือ Password ต้องเป็นภาษาอังกฤษเท่านั้น","warning").then( function(val) {';
		echo '});';
		echo '}, 200);</script>';
		
		//} elseif ( !preg_match($langsls,$_POST['slscode1']) || (strlen($_POST['slscode1']) != 4) ) {
		//  echo "<p class=\"alert text-center animated shake\">SLS Code จะต้องเป็นตัวเลข 4 หลักเท่านั้น</p>";
		
		} elseif ( (strlen($_POST['user1']) < 6) || (strlen($_POST['user1']) > 23) ) {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด !","ID Game ต้องมีอย่างน้อย 6- 23 ตัวขึ้นไป","warning").then( function(val) {';
		echo '});';
		echo '}, 200);</script>';
		
		} elseif ( (strlen($_POST['pass1']) < 6) || (strlen($_POST['pass1']) > 23) ) {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด !","Password ต้องมีอย่างน้อย 6 - 23 ตัวขึ้นไป","warning").then( function(val) {';
		echo '});';
		echo '}, 200);</script>';
		
		} elseif ( $_POST['pass1'] != $_POST['pass2'] ) {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด !","Password ไม่ตรงกัน","warning").then( function(val) {';
		echo '});';
		echo '}, 200);</script>';
		
		} elseif ( !preg_match("/([a-zA-Z0-9._-]+)@([^[:space:]]*)([[:alnum:]]+)\.([a-z])/i", $_POST['email1']) ) {
		
	    echo "<p class=\"alert text-center animated shake\">ใส่อีเมลล์ผิดรูปแบบ</p>";
		
		} elseif ( $res_uniuqe ) {
		
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด !","ID Game หรือ Email ถูกใช้งานไปแล้ว","error").then( function(val) {';
		echo '});';
		echo '}, 200);</script>';
		
		} elseif ( !preg_match($lang,$_POST['year']) || !preg_match($lang,$_POST['month']) || !preg_match($lang,$_POST['day']) ) {

		echo '<script type="text/javascript">';
		echo 'setTimeout(function () {';
		echo 'swal("พบข้อผิดพลาด","กรุณาเลือก วันเกิด (Ex.15-12-1999)","warning").then( function(val) {';
		echo 'if (val == true) window.location.href = \'register\';';
		echo '});';
		echo '}, 200);  </script>';
		
		} else {
		
		$data = array(
		'userid' => $db->clean_input(trim($_POST['user1'])),
		'user_pass' => $db->clean_input(trim($_POST['pass1'])),
		//'slscode' => trim($_POST['slscode1']),
		'sex' => $db->clean_input(trim($_POST['gender1'])),
		'birthdate' => $db->clean_input(trim($birthdate)),
		'email' => $db->clean_input(trim($_POST['email1'])),
		'last_ip' => $db->clean_input(trim($_SERVER['REMOTE_ADDR']))
		);
		
		//sleep(1);
		
		$db->insert('login', $data);
		$res = $db->getResult();
		
		//print_r($res);
		if($res){
			
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () {';
			echo 'swal("สำเร็จ !","การสร้างบัญชีเสร็จเรียบร้อย","success").then( function(val) {';
			echo 'if (val == true) window.location.href = \'register.php\';';
			echo '});';
			echo '}, 200);</script>';
			
			}else{
			
			echo '<script type="text/javascript">';
			echo 'setTimeout(function () {';
			echo 'swal("ไม่สามารถทำรายการได้","พบปัญหาการสมัครสมาชิก โปรดแจ้งทีมงาน","error").then( function(val) {';
			echo '});';
			echo '}, 200);  </script>';
			
		}
	}
?>