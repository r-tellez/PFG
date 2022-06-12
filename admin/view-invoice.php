<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid'] == 0)) {
	header('location:logout.php');
} else {
?>

	<!DOCTYPE HTML>
	<html>

	<head>
		<title>Detalle de Factura</title>

		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<!-- font CSS -->
		<!-- font-awesome icons -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- //font-awesome icons -->
		<!-- js-->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--webfonts-->
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<!--animate-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<!--//end-animate-->
		<!-- Metis Menu -->
		<script src="js/metisMenu.min.js"></script>
		<script src="js/custom.js"></script>
		<link href="css/custom.css" rel="stylesheet">
		<!--//Metis Menu -->
	</head>

	<body class="cbp-spmenu-push">
		<div class="main-content">
			<!--left-fixed -navigation-->
			<?php include_once('includes/sidebar.php'); ?>
			<!--left-fixed -navigation-->
			<!-- header-starts -->
			<?php include_once('includes/header.php'); ?>
			<!-- //header-ends -->
			<!-- main content start-->
			<div id="page-wrapper">
				<div class="main-page">
					<div class="tables" id="exampl">
						<h3 class="title1">Detalle de Factura</h3>

						<?php
						$invid = intval($_GET['invoiceid']);
						$ret = mysqli_query($con, "select DISTINCT  tblinvoice.PostingDate,tblcustomers.Name,tblcustomers.Email,tblcustomers.MobileNumber,tblcustomers.Gender
	from  tblinvoice 
	join tblcustomers on tblcustomers.ID=tblinvoice.Userid 
	where tblinvoice.BillingId='$invid'");
						$cnt = 1;
						while ($row = mysqli_fetch_array($ret)) {
						?>
							<div class="table-responsive bs-example widget-shadow">
								<br>
								<div>
									<center>
										<img src="images/laura_logo.png" class="prfil-img" width="90" height="90">
										<p><b>Laura Peluqueria & Estética</b></p>
										<p>952 50 08 40</p>
										<p>C/ Magdalena, 3</p>
										<p>29700 Vélez-Málaga (Málaga)</p>
									</center>
								</div>
								<table width="100%">
									<tr>
									<td colspan="2"><b>Cliente: </b><?php echo $row['Name'] ?></td>
									<td style="text-align:right"><b>Factura Nº: </b><?php echo $invid; ?></td></tr>
									<tr><td><b>Teléfono: </b><?php echo $row['MobileNumber'] ?></td>
									</tr>
									<tr><td><b>Email: </b><?php echo $row['Email'] ?></td></tr>
								<?php } ?>
								</table>
								<br>
								<h2>Detalle de Servicios</h2>
								<table class="table table-bordered" width="100%" style="border:1">
									<tr>
										<th>Nº</th>
										<th>Nombre de Servicio</th>
										<th style="text-align:right">Importe</th>
									</tr>

									<?php
									$ret = mysqli_query($con, "select tblservices.ServiceName,tblservices.Cost  
	from  tblinvoice 
	join tblservices on tblservices.ID=tblinvoice.ServiceId 
	where tblinvoice.BillingId='$invid'");
									$cnt = 1;
									while ($row = mysqli_fetch_array($ret)) {
									?>

										<tr>
											<th><?php echo $cnt; ?></th>
											<td><?php echo $row['ServiceName'] ?></td>
											<td style="text-align:right"><?php echo $subtotal = $row['Cost'] ?>€</td>
										</tr>
									<?php
										$cnt = $cnt + 1;
										$gtotal += $subtotal;
									} ?>

									<tr>
										<th colspan="2" style="text-align:right">Total</th>
										<th style="text-align:right"><?php echo $gtotal ?>€</th>

									</tr>
								</table>
								<p style="margin-top:1%" align="center">
									<i class="fa fa-print fa-2x" style="cursor: pointer;" OnClick="CallPrint(this.value)"></i>
								</p>
							</div>
					</div>
				</div>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php'); ?>
			<!--//footer-->
		</div>
		<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById('cbp-spmenu-s1'),
				showLeftPush = document.getElementById('showLeftPush'),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle(this, 'active');
				classie.toggle(body, 'cbp-spmenu-push-toright');
				classie.toggle(menuLeft, 'cbp-spmenu-open');
				disableOther('showLeftPush');
			};

			function disableOther(button) {
				if (button !== 'showLeftPush') {
					classie.toggle(showLeftPush, 'disabled');
				}
			}
		</script>
		<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.js"> </script>
		<script>
			function CallPrint(strid) {
				var prtContent = document.getElementById("exampl");
				var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
				WinPrint.document.write(prtContent.innerHTML);
				WinPrint.document.close();
				WinPrint.focus();
				WinPrint.print();
				WinPrint.close();
			}
		</script>
	</body>

	</html>
<?php }  ?>