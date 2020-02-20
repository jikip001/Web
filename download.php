<?php
	include ('navbar.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $ser_name ?></title>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<body class="bg2" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1200" border="0" align="center">
  <tr>
    <td height="940"></td>
	</tr>
  <tr>
    <td height="800" align="center" valign="top">
<!----------------------------------------------------------------- Start Text ------------------------------------------------------------->      			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ol class="breadcrumb">
					  <li><i class="fas fa-home" aria-hidden="true"></i> หน้าแรก</li>
					  <li class="active"><i class="fas fa-folder-open" aria-hidden="true"></i> ดาวน์โหลดเกม</li>
					</ol>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="well">
						<div class="main-header">
							 <span>ดาวน์โหลดเกม <small>Download Game</small></span>
						</div>
			
						<h4 style="text-align:left"><i class="fa fa-folder" aria-hidden="true"></i> Download For PC (Full Client)</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
								<th width="10%" class="active text-center">Type</th>
								<th width="20%" class="active text-center">File</th>
								<th width="10%" class="active text-center">Size</th>
								<th width="40%" class="active text-center">Description</th>
								<th width="20%" class="active text-center">Link</th>
								</tr> 
							</thead> 
							<tbody>
								<tr>
								<td class="text-center"><img src="images/gdrive.png"></td>
								<td class="text-center">Full Data (Link 1)</td>
								<td class="text-center">0.00 GB</td>
								<td class="text-center">Google Drive</td>
								<td class="text-center" ><a href="<?php echo $link1; ?>" class="btn btn-download btn-block" autofocus><i class="fa fa-download" aria-hidden="true"></i> Download</a></td>
								</tr>
								<tr>
								<td class="text-center"><img src="images/mega.png"></td>
								<td class="text-center">Full Data (Link 2)</td>
								<td class="text-center">0.00 GB</td>
								<td class="text-center">Mega Upload</td>
								<td class="text-center"><a href="<?php echo $link2; ?>" class="btn btn-download btn-block"><i class="fa fa-download" aria-hidden="true"></i> Download</a></td>
								</tr>
								<tr>
								<td class="text-center"><img src="images/medai.png"></td>
								<td class="text-center">Full Data (Link 3)</td>
								<td class="text-center">0.00 GB</td>
								<td class="text-center">Mediafire</td>
								<td class="text-center"><a href="<?php echo $link3; ?>" class="btn btn-download btn-block"><i class="fa fa-download" aria-hidden="true"></i> Download</a></td>
								</tr>
							</tbody>
						</table>	
					<table class="table table-bordered">
						<thead>
						  <tr>
							<th width="9%" class="active text-center">Icon</th>
							<th width="25%" class="active text-center">Name</th>
							<th width="50%" class="active text-center">Description</th>
							<th width="16%" class="active text-center">Link</th>
							</tr>
						</thead>
						<tbody>
						  <tr>
							<td class="text-center"><img src="images/icon/TWoJLFRlP.png"></td>
							<td class="text-center f-no">Teamviewer</td>
							<td class="text-center f-no">Teamviewer โปรแกรม Remote Desktop</td>
							<td class="text-center"><a href="https://download.teamviewer.com/download/TeamViewer_Setup.exe" class="btn btn-download btn-block"><i class="fa fa-download" aria-hidden="true"></i> Download</a></td>
						  </tr>
						  <tr>
							<td class="text-center"><img src="images/icon/gPtDQwY.png"></td>
							<td class="text-center f-no">Anydesk</td>
							<td class="text-center f-no">Anydesk โปรแกรม Remote Desktop</td>
							<td class="text-center"><a href="https://download.anydesk.com/AnyDesk.exe" class="btn btn-download btn-block"><i class="fa fa-download" aria-hidden="true"></i> Download</a></td>
						  </tr>
						</tbody>
					  </table>
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
