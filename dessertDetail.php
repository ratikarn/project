<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>สูตรอาหาร</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie9.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css" />
	<![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- New DataTables -->
	<script src="js/plugins/momentjs/jquery.moment.min.js"></script>
	<script src="js/plugins/momentjs/moment-range.min.js"></script>
	<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.tableTools.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.colReorder.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.colVis.min.js"></script>
	<script src="js/plugins/datatables/extensions/dataTables.scroller.min.js"></script>

	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.php"><img src="images/logo2.gif" alt="Logo" /></a>
			</div>
			<ul>
				<li class="first current"><a href="index.php">หน้าแรก</a></li>
				<li><a href="meat.php">อาหารคาว</a></li>
				<li><a href="dessert.php">อาหารหวาน</a></li>
				<li><a href="trick.php">เคล็ดลับการทำอาหาร</a></li>
				<li class="last"><a href="promotion.php">โปรโมชันร้านอาหาร</a></li>	
			</ul>
		</div >
		<div id="content">
			<div>
						
				<?php

						include "database.php";
						$id_dessert=$_GET['id_dessert'];
						
						$query="SELECT id_dessert, name_dessert, mixture_dessert, detail_dessert, source_dessert, img_d FROM dessert WHERE id_dessert=$id_dessert";
						$result=mysql_query($query);
						
						while($row=mysql_fetch_array($result)){
								$id_dessert=$row['id_dessert'];
								$name_dessert=$row['name_dessert'];
								$mixture_dessert=$row['mixture_dessert'];
								$detail_dessert=$row['detail_dessert'];
								$source_dessert=$row['source_dessert'];
								$img_d=$row['img_d'];
								$path = 'images/myfile/';
?>
				<div class="aside">
					<ul>
						<li class="first">
							<center><img src="<? echo $path.$img_d; ; ?>" width="230" height="200" border="0" ></center>
						</li>
					
					</ul>
				</div>
				<div>
	

				<form>
					<input type="hidden" name="id_dessert" value="<? echo $id_dessert; ?>">
						
				 <h2><? echo $name_dessert; ?></h2>
                                <strong>เครื่องปรุง + ส่วนผสม</strong>
                           <p> <ul>
								
                                <? echo $mixture_dessert; ?>
                                
                            </ul> </p>
								<strong>วิธีการทำ</strong>
							 <p>
                               <? echo $detail_dessert; ?><br>
                            </p>	
							<strong>ขอบคุณข้อมูลจาก  <? echo $source_dessert; ?></strong>
							
							<p>&nbsp;</p>
							<center><a href="dessert.php"><input type="button" value="กลับสู่หน้าหลัก"></a></center>
				</form>
	<?php

	}
	mysql_close();
	?>
				
				</div>
			</div>
		</div>
	
	</div>	
	
</body>
</html>