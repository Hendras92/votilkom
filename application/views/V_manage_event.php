<!DOCTYPE html>
<?php  if ( ! defined('BASEPATH')) exit('Akses tidak diperkenankan');
	$this->load->view('V_header_menu'); /*ui-39*/ ?>
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
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet">
		
		
		<!-- Main CSS -->
		<link href="<?php echo base_url();?>asset/css/style-199.css" rel="stylesheet">
		<link href="<?php echo base_url();?>asset/css/style-39.css" rel="stylesheet">		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	<body>
		
		<!-- UI # -->
		<div class="ui-199">
		
			<h4><i class="fa fa-file red"></i>&nbsp; Management Vote</h4>
		
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>No.</th>
						<th>Question Vote</th>
						<th>Created Date</th>
						<th>Closed Date</th>
						<th>Option Vote</th>
						<th>Actions</th>
					</tr>
					<tr>
						<!-- File icon -->
					  <?php
                         foreach ($events_data as $events)
                     {
                     ?>
                         <tr>
			             <td width="80px"><?php echo ++$start ?></td>
			             <td><?php echo $events->name_events ?></td>
			             <td><?php echo $events->date_events ?></td>
			             <td><?php echo $events->closed_events ?></td>
			             <td><?php echo $events->type_events ?></td>
						<!-- Actions -->
						<td>
							<?php 
				               echo anchor(site_url('manage/read/'.$events->id_events),'Read'); 
				               echo ' | '; 
				               echo anchor(site_url('manage/update/'.$events->id_events),'Update'); 
				               echo ' | '; 
				               echo anchor(site_url('manage/delete/'.$events->id_events),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				             ?>
							<!--<a href="<?php echo base_url();?>"><button type="button" class="btn btn-green btn-xs"><i class="fa fa-download"></i></button></a>
							<button type="button" class="btn btn-red btn-xs"><i class="fa fa-trash"></i></button>
							<button type="button" class="btn btn-lblue btn-xs"><i class="fa fa-pencil"></i></button>-->
						</td>
					</tr>
					
					
					<?php
            }
            ?>
             <?php echo $pagination ?>
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
	</body>	
</html>
