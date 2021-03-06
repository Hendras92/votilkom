<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>E-Voting Fasilkom Unsri</title>
		<link rel="shortcut icon" href="<?php echo base_url();?>asset/img/ui-26/evotingfasilkom.png"/>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Datepicker -->
		<link href="<?php echo base_url();?>asset/css/rfnet.css" rel="stylesheet">
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet">
		
		
		<!-- Main CSS -->
		<link href="<?php echo base_url();?>asset/css/style-15.css" rel="stylesheet">
				
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		
		<!-- UI # -->
		<div class="ui-15">
				
				<!-- UI Content -->
				<div class="ui-content">
				
					<div class="container-fluid">
						<div class="row">
							<div class="">
								<!-- Ui Form -->
								<div class="ui-form">
									<!-- Heading -->
									<h2>Update Vote</h2>
									<!-- Form -->
									<form action="<?php echo base_url();?>index.php/manage/update_action" method="post">
										<!-- UI Input -->
										<div class="ui-input">
											<!-- Input Box -->
											<input type="text" name="name_events" value="<?php echo $name_events; ?>" class="form-control" />
										</div>
										<div class="ui-input">
                                            <a href="javascript:NewCssCal('pick1','yyyymmdd')">
											<input type="text" id="pick1" name="date_events" value="<?php echo $date_events; ?>" class="form-control" />
											</a>
										</div>
										<div class="ui-input">
										    <a href="javascript:NewCssCal('pick2','yyyymmdd')">
											<input type="text" id="pick2" name="closed_events" value="<?php echo $closed_events; ?>" class="form-control" />
											</a>
										</div>
										<div class="ui-input">
											<input type="text" name="type_events" value="<?php echo $type_events; ?>" class="form-control" />
								
										</div>
										<div class="ui-input">
											<input type="text" name="link_events" value="<?php echo $link_events; ?>" class="form-control" />
								
										</div>
										<div class="ui-input">
											<input type="text" name="about_events" value="<?php echo $about_events; ?>" class="form-control" />
								
										</div>
										<div class="ui-input">
											<input type="text" name="id_events" value="<?php echo $id_events; ?>" class="form-control" />
								
										</div>
								
										<button type="submit" class="btn btn-red btn-lg btn-block">Update Vote</button>
										
									</form>
								</div>
							</div>
						</div>
					</div>
					
				</div>
					
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="<?php echo base_url();?>asset/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
		<!-- Placeholder JS -->
		<script src="<?php echo base_url();?>asset/js/placeholder.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="<?php echo base_url();?>asset/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="<?php echo base_url();?>asset/js/html5shiv.js"></script>
		<!-- Datepicker -->
		<script src="<?php echo base_url();?>asset/js/datetimepicker_css.js"></script>
	</body>	
</html>