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
		<link href="asset/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="asset/css/font-awesome.min.css" rel="stylesheet">
		
		
		<!-- Main CSS -->
		<link href="asset/css/style-26.css" rel="stylesheet">
				
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		
		<!-- UI # -->
		<div class="ui-26">
			
			<!-- Image -->
			<div class="ui-image">
				<a href="#"><img src="asset/img/ui-26/evotingfasilkom.png" alt="" class="img-responsive" /></a>
			</div>
		
			<!-- Content -->
			<div class="ui-content">
				<!-- Close button -->
				<div class="ui-close"><i class="fa fa-times"></i></div>
				<!-- Heading -->
				<h4><a href="#">Welcome to E-Voting Fasilkom Unsri</a></h4>
				<!-- Para -->
				<p>Please make your own vote and select your favourite vote in this site. Thanks</p>
			</div>
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="asset/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="asset/js/bootstrap.min.js"></script>
		<!-- Placeholder JS -->
		<script src="asset/js/placeholder.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="asset/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="asset/js/html5shiv.js"></script>
		
		<script type="text/javascript">
		
			$(document).ready(function(){
			
				<!-- Display after some time -->
				$(".ui-26").delay("1500").fadeIn(2000);
			
				<!-- Close -->
				$(".ui-26 .ui-content .ui-close").click(function(){
					$(this).parent().parent(".ui-26").fadeOut(1000);
				});
				
			});
		
		</script>
		
		
	</body>	
</html>