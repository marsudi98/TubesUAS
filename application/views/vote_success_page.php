<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewsport" content="width=device-width, initial-scale=1">
		
		<title>Election 2016</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Most Valuable Player World Cup 2018</h2>
					<img width="442" height="270" src="<?php echo base_url();?>assets/img/diligent_owl.png" id="vote_logo">
				</div>
				<div  class="jumbotron col-md-12">
					<div class="text-center">
						<div class="well form-group">
							<h1><span class="glyphicon glyphicon-thumbs-up"></span> Vote Successful</h1>
							<h2>Thank You for Voting</h2>
						</div>
						<a href="<?php echo site_url('election_controller'); ?>">
							<button type="button" class="btn btn-info btn">
								<span class="glyphicon glyphicon-edit"></span> Vote Again
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>