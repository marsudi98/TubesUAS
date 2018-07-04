<?php 
  $this->load->view('header');
?>
	<body ondragstart="return false" oncontextmenu="return false" onselectstart="return false">
		<div class="container">
			<div class="row col-md-6 text-center">
				<h2>Most Valuable Player World Cup 2018</h2>
				<img src="<?php echo base_url();?>assets/img/diligent_owl.png" id="vote_logo">
			</div>
			<div  id="ballot_form" class="row col-md-6">
				<form method="post" role="form" action="<?php echo site_url('election_controller/cast_vote'); ?>">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th colspan="4" class="text-center">Most Favorite Player</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="1">CRISTIANO RONALDO</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="3">LIONEL MESSI</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="5">J. HERNANDEZ</label>
								</td>
							</tr>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="2">REFLY ILHAM</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="4">POE, GRACE</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="6">SEÑERES, ROY</label>
								</td>
							</tr>
						</tbody>
					</table>

					<table class="table table-bordered">
						<thead>
							<tr>
								<th  colspan="4" class="text-center">MOST FAVORITE GOAL KEEPER</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="1">CAYETANO, ALAN PETER</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="3">HONASAN, GRINGO</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="5">ROBREDO, LENI</label>
								</td>
							</tr>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="2">ESCUDERO, CHIZ</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="4">MARCOS, BONGBONG</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="6">TRILLANES, ANTONIO IV</label>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th  colspan="4" class="text-center">MOST FAVORITE PLAYER</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="1">CAYETANO, ALAN PETER</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="3">HONASAN, GRINGO</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="5">ROBREDO, LENI</label>
								</td>
							</tr>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="2">ESCUDERO, CHIZ</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="4">MARCOS, BONGBONG</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="6">TRILLANES, ANTONIO IV</label>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th  colspan="4" class="text-center">MOST FAVORITE COACH</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="1">CAYETANO, ALAN PETER</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="3">HONASAN, GRINGO</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="5">ROBREDO, LENI</label>
								</td>
							</tr>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="2">ESCUDERO, CHIZ</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="4">MARCOS, BONGBONG</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="vice-president" value="6">TRILLANES, ANTONIO IV</label>
								</td>
							</tr>
						</tbody>
					</table>
					<div id="submission_div">
						<div class="btn-group">
							<button type="button" class="btn btn-danger">Back</button>
						    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
							  <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Home</a></li>
							    <li><a href="#">Vote Page</a></li>
							</ul>
						<button type="submit" class="btn btn-primary">Submit Vote</button>
					</div>
				</form>
			</div>
		</div>
		<div class="modal fade" id="incorrect_password_modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body text-center">
						<p>The password you have entered is incorrect.</p>
						<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jqueryv1.12.4.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("input[type=checkbox][name=Senator]").click(function() {
	    var bol = $("input[type=checkbox][name=Senator]:checked").length >= 12;     
    	$("input[type=checkbox][name=Senator]").not(":checked").attr("disabled",bol);
	});
	$(document).ready(function(){
		$("#unlock").click(function(){
			var password_correct = "votenow";
			var password_input = $("input[type=password][name=password]").val();
			if (password_correct == password_input){
				 $("#ballot_form").show();
				 $("#password_form").hide();
			} else {
				 $("#incorrect_password_modal").modal();
			}
		});
	});
</script>