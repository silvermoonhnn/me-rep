<?php
include_once 'koneksi.php';
$kodepaket = $_GET['kodepaket'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Purwa Wisata Tour & Transportation</title>
		<link rel="shortcut icon" href="assets/images/elips3.png">
		<meta name="description" content="Common UI Features &amp; Elements" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<img src="assets/images/elips3.png" style="width:30px; height: 30px;">
							Admin - Purwa Wisata
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>
								<i class="icon-caret-down"></i>
							</a>
							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="index.php">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>
			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				</div>
				<ul class="nav nav-list">
					<li class = "active open">
						<a href="inputpaket.php">
							<i class="icon-group"></i>
							<span class="menu-text"> Input Paket Wisata</span>
						</a>
					</li>
					<li>
						<a href="inputinfopar.php">
							<i class="icon-globe"></i>
							<span class="menu-text"> Input Info Pariwisata</span>
						</a>
					</li>
					<li>
						<a href="inputtourprog.php">
							<i class="icon-bullhorn"></i>
							<span class="menu-text"> Input Itinerary Perjalanan</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-desktop"></i>
							<span class="menu-text"> Lihat Data </span>
							<b class="arrow icon-angle-down"></b>
						</a>
						<ul class="submenu">
							<li class="active">
								<a href="data-paket.php">
									<i class="icon-double-angle-right"></i>
									Data Paket Wisata
								</a>
							</li>
							<li>
								<a href="data-info.php">
									<i class="icon-double-angle-right"></i>
									Data Info Pariwisata
								</a>
							</li>
							<li>
								<a href="data-tourprog.php">
									<i class="icon-double-angle-right"></i>
									Data Itinerary Perjalanan
								</a>
							</li>
							<li>
								<a href="data-pemesanan.php">
									<i class="icon-double-angle-right"></i>
									Data Pemesanan
								</a>
							</li>
						</ul>
					</li>
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Input Paket Wisata</li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Input Paket Wisata
							<small>
								<i class="icon-double-angle-right"></i>
								Untuk Umum dan Pelajar
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							 <?php
								$data=mysql_query("SELECT * FROM paketwisata WHERE kodepaket LIKE '".mysql_real_escape_string($kodepaket)."'");
								while ($row=mysql_fetch_array($data))
								{ 
							?>
							<form method="post" action="cek-editpaket.php" class="form-horizontal">
								<div class="control-group">
									<label for="kriteria" class="control-label">Kriteria Paket</label>
									<div class="controls">
										<input type="text" class="span6" value="<?php echo $row['kriteria'];?>" name="kriteria" >
									</div>
								</div>
								<div class="control-group">
									<label for="kodepaket" class="control-label">Kode Paket</label>
									<div class="controls">
										<input type="text" class="span6" value="<?php echo $row['kodepaket'];?>" name="kodepaket" readonly>
									</div>
								</div>
								<div class="control-group">
									<label for="namapaket" class="control-label">Nama Paket</label>
									<div class="controls">
										<input type="text" class="span6" name="namapaket" value="<?php echo $row['namapaket'];?>">
									</div>
								</div>
								<div class="control-group">
									<label for="tujuan" class="control-label">Tujuan Wisata</label>
									<div class="controls">
										<textarea name="tujuan" value="" cols="50" rows="4" class="span6""> <?php echo $row['tujuan'];?> </textarea>
									</div>
								</div>
								<div class="control-group">
									<label for="lama" class="control-label">Lama Kunjungan</label>
									<div class="controls">
										<input type="text" class="span6" name="lama" value="<?php echo $row['lama'];?>">
									</div>
								</div>
								<div class="control-group">
									<label for="hari" class="control-label">Hari Kunjungan</label>
									<div class="controls">
										<input type="text" class="span6" value="<?php echo $row['hari'];?>" name="hari">
									</div>
								</div>
								<div class="control-group">
									<label for="harga" class="control-label">Harga/Pax</label>
									<div class="controls">
										<input type="text" class="span6" name="harga" value="<?php echo $row['harga'];?>" >
									</div>
								</div>
								<div class="control-group">
									<label for="fasilitas" class="control-label">Fasilitas</label>
									<div class="controls">
										<input type="text" class="span6" name="fasilitas" value="<?php echo $row['fasilitas'];?>">
									</div>
								</div>
								<div class="control-group">
									<label for="penginapan" class="control-label">Penginapan</label>
									<div class="controls">
										<input type="text" class="span6" name="penginapan" value="<?php echo $row['penginapan'];?>">
									</div>
								</div>
								<div class="control-group">
									<label for="kapasitas" class="control-label">Kapasitas Untuk</label>
									<div class="controls">
										<input type="text" class="span6" value="<?php echo $row['kapasitas'];?>" name="kapasitas">
									</div>
								</div>
								<div class="control-group">
									<label for="photo" class="control-label">File input</label>
									<div class="controls"><input type="file" name="photo" id="photo">
										<p class="help-block">Upload gambar dalam bentuk jpg.</p>
									</div>
								</div>
								<div class="control-group">
									<label for="keterangan" class="control-label">Keterangan</label>
									<div class="controls"><textarea name="keterangan" value="" cols="50" rows="6" class="span6"> <?php echo $row['keterangan'];?> </textarea></div>
								</div>
			
								<div class="btn-group center">
									<button type="reset" class="btn btn-small btn-info">
										<i class="icon-remove bigger-125"></i>
										Cancel
									</button>
									<button type="submit" name="edit" class="btn btn-small btn-danger" >
										<i class="icon-save bigger-125"></i>
										Post
									</button>
								</div>
							</form>
							<?php
							}
							?>
						</div>	
					</div>	
				</div>
								
							<script type="text/javascript">
								var $assets = "assets";//this will be used in gritter alerts containing images
							</script>

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-class="default" value="#438EB9" />#438EB9
									<option data-class="skin-1" value="#222A2D" />#222A2D
									<option data-class="skin-2" value="#C6487E" />#C6487E
									<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>
		<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		<script src="assets/js/spin.min.js"></script>
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#accordion2').on('hide', function (e) {
					$(e.target).prev().children(0).addClass('collapsed');
				})
				$('#accordion2').on('hidden', function (e) {
					$(e.target).prev().children(0).addClass('collapsed');
				})
				$('#accordion2').on('show', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
				$('#accordion2').on('shown', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
			
			
				var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
				$('.easy-pie-chart.percentage').each(function(){
					$(this).easyPieChart({
						barColor: $(this).data('color'),
						trackColor: '#EEEEEE',
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: 8,
						animate: oldie ? false : 1000,
						size:75
					}).css('color', $(this).data('color'));
				});
			
				$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
		</script>
	</body>
</html>