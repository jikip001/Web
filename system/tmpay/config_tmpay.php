<?php

// IP ของ MySQL Server
$_CONFIG['mysql']['host'] = '127.0.0.1';
// Username และ Password
$_CONFIG['mysql']['username'] = 'root';
$_CONFIG['mysql']['password'] = '123456789';
// ชื่อ Database ของเกม Ragnarok
$_CONFIG['mysql']['db_name'] = 'test_rag';
// ใช้ระบบ MD5 ในการเข้ารหัส password หรือไม่
$_CONFIG['tmpay']['use_md5'] = false;

// IP ของ TMPAY.NET ที่อนุญาตให้รับส่งข้อมูลบัตรเงินสด (ไม่ควรแก้ไข)
$_CONFIG['tmpay']['access_ip'] = '203.146.127.112';
// รหัสร้านค้า (merchant_id) ของ TMPAY.NET
$_CONFIG['tmpay']['merchant_id'] = '';
// URL ที่ได้ทำการติดตั้ง tmpay.php
$_CONFIG['tmpay']['resp_url'] = 'http://www.durexz-ro.com/system/tmpay/tmpay.php';

/** True Money **/
	/* Donate Point ใส่เฉพาะตัวเลขเท่านั้น */
	$truemoney_50 = "300";
	$truemoney_90 = "540";
	$truemoney_150 = "900";
	$truemoney_300 = "1,800";
	$truemoney_500 = "3,000";
	$truemoney_1000 = "6,000";
	
	/** True Wallet **/
	/* Donate Point ใส่เฉพาะตัวเลขเท่านั้น */
	$truewallet_50 = "400";
	$truewallet_90 = "720";
	$truewallet_150 = "1,200";
	$truewallet_300 = "2,400";
	$truewallet_500 = "4,000";
	$truewallet_1000 = "8,000";
	/* รูปภาพไอเท็มโปรโมชั่น */
	$img_bonus1 = "<img src='images/item/item_bonus2.gif'>";
	/* ชื่อไอเท็มโปรโมชั่น */
	$item_name1 = "Gift";
	/* จำนวนไอเท็มโปรโมชั่น */
	$item_count50 = "0 ea"; // ราคา50บาท
	$item_count90 = "1 ea"; // ราคา90บาท
	$item_count150 = "2 ea"; // ราคา150บาท
	$item_count300 = "3 ea"; // ราคา300บาท
	$item_count500 = "5 ea"; // ราคา500บาท
	$item_count1000 = "10 ea"; // ราคา1,000บาท
	
	
// มูลค่าบัตรเงินสด (ไม่ควรแก้ไข)
$_CONFIG['tmpay']['amount'][0] = 0;
$_CONFIG['tmpay']['amount'][1] = 50;
$_CONFIG['tmpay']['amount'][2] = 90;
$_CONFIG['tmpay']['amount'][3] = 150;
$_CONFIG['tmpay']['amount'][4] = 300;
$_CONFIG['tmpay']['amount'][5] = 500;
$_CONFIG['tmpay']['amount'][6] = 1000;

$_CONFIG['tmpay']['card_status'][0] = '<div class="ui-org-status"><i class="fa fa-spinner fa-pulse fa-fw"></i>รอการตรวจสอบ</span>';
$_CONFIG['tmpay']['card_status'][1] = '<div class="ui-green-status"><i class="fa fa-check fa-fw"></i>ผ่าน</span>';
$_CONFIG['tmpay']['card_status'][2] = '<div class="ui-green-status"><i class="fa fa-check-square-o fa-fw"></i>ผ่าน (รับ Cash Point แล้ว)</span>';
$_CONFIG['tmpay']['card_status'][3] = '<div class="ui-red-status"><i class="fa fa-times fa-fw"></i>รหัสบัตรถูกใช้ไปแล้ว</span>';
$_CONFIG['tmpay']['card_status'][4] = '<div class="ui-red-status"><i class="fa fa-times fa-fw"></i>รหัสผิดพลาด</span>';
$_CONFIG['tmpay']['card_status'][5] = '<div class="ui-red-status"><i class="fa fa-times fa-fw"></i>บัตรทรูมูฟ</span>';

?>


