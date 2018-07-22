<?php 
  $this->load->view('header');
?>
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
							<h2>Thank You for Voting!</h2>
						</div>
						<a href="<?php echo site_url('voting'); ?>">
							<button type="button" class="btn btn-info btn">
								<span class="glyphicon glyphicon-edit"></span>Vote Result
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>