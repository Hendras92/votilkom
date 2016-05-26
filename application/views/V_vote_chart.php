<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>UI Design</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet">
		
		
		<!-- Main CSS -->
		<link href="<?php echo base_url();?>asset/css/style-237.css" rel="stylesheet">
				
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		
		<!-- UI # -->
		<div class="ui-237">
		
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-2 col-sm-3">
						<!-- Bar Item -->
						<div class="bar-item">
							<div class="bar">
								<!-- Vertical bar -->
								<div class="vertical-bar">
									<div class="bar-content bg-red" data-limit="90"><span></span></div>
								</div>
							</div>
							<div class="details">
								<!-- Heading -->
								<h4><a href="#">Google</a></h4>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-2 col-sm-3">
						<!-- Bar Item -->
						<div class="bar-item">
							<div class="bar">
								<!-- Vertical bar -->
								<div class="vertical-bar">
									<div class="bar-content bg-green" data-limit="40"><span></span></div>
								</div>
							</div>
							<div class="details">
								<!-- Heading -->
								<h4><a href="#">Flipkart</a></h4>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-2 col-sm-3">
						<!-- Bar Item -->
						<div class="bar-item">
							<div class="bar">
								<!-- Vertical bar -->
								<div class="vertical-bar">
									<div class="bar-content bg-lblue" data-limit="60"><span></span></div>
								</div>
							</div>
							<div class="details">
								<!-- Heading -->
								<h4><a href="#">Facebook</a></h4>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-2 col-sm-3">
						<!-- Bar Item -->
						<div class="bar-item">
							<div class="bar">
								<!-- Vertical bar -->
								<div class="vertical-bar">
									<div class="bar-content bg-orange" data-limit="49"><span></span></div>
								</div>
							</div>
							<div class="details">
								<!-- Heading -->
								<h4><a href="#">Twitter</a></h4>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-2 col-sm-3">
						<!-- Bar Item -->
						<div class="bar-item">
							<div class="bar">
								<!-- Vertical bar -->
								<div class="vertical-bar">
									<div class="bar-content bg-yellow" data-limit="39"><span></span></div>
								</div>
							</div>
							<div class="details">
								<!-- Heading -->
								<h4><a href="#">Yahoo</a></h4>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-2 col-sm-3">
						<!-- Bar Item -->
						<div class="bar-item">
							<div class="bar">
								<!-- Vertical bar -->
								<div class="vertical-bar">
									<div class="bar-content bg-purple" data-limit="69"><span></span></div>
								</div>
							</div>
							<div class="details">
								<!-- Heading -->
								<h4><a href="#">Reddit</a></h4>
							</div>
							<div class="clearfix"></div>
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
		
		<script>
			$(function() {
					
				setTimeout(function(){
				
					$('.bar-content').each(function() {
						var me = $(this);
						var perc = me.attr("data-limit");
						var current_perc = 0;
						
						if(!$(this).hasClass('stop')){
						
							var progress = setInterval(function() {
															
								if (current_perc>=perc) {
									clearInterval(progress);
								} else {
									current_perc +=1;
									me.css('height', (current_perc)+'%');
									me.children("span").html(current_perc+'%');
								}
						
							}, 15);
							
							me.addClass('stop');
							
						}
						
					});
					
				}, 0);
				
			});

		</script>
		
	</body>	
</html>