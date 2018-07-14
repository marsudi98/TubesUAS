<?php 
  $this->load->view('header');
?>
	<!-- ondragstart="return false" oncontextmenu="return false" onselectstart="return false" -->
	<body>
		<div class="container-fluit">
			<!-- <div class="row">
				<h2 class="text-center">Most Valuable Player World Cup 2018</h2>
				<img src="<?php echo base_url();?>assets/img/diligent_owl.png" id="vote_logo">
			</div> -->
			<div  id="ballot_form" class="row col-md-12">
				<form method="post" role="form" action="<?php echo site_url('election_controller/cast_vote'); ?>">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th  colspan="4" class="text-center">President / Vote for 1</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="1">BINAY, JOJO</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="3">DUTERTE, RODY</label>
								</td>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="5">ROXAS, MAR</label>
								</td>
							</tr>
							<tr>
								<td>
									<label class="radio-inline"><input type="radio" name="president" value="2">DEFENSOR SANTIAGO, MIRIAM</label>
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
								<th  colspan="4" class="text-center">Vice-President / Vote for 1</th>
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
								<th  colspan="4" class="text-center">Senator / Vote for 12</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="1">ALBANI, SHARIFF
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="14">DORONA, RAY
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="27">LAPID, MARK
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="40">PANGILINAN, KIKO 
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="2">ALI, ALDIN
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="15">DRILON, FRANK
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="28">LIBAN, DANTE
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="41">PETILLA, CARLOS JERICHO 
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="3">ALUNAN, RAFFY
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="16">GADON, LARRY
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="29">MAGANTO, ROMEO
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="42">RECTO, RALPH
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="4">AMBOLODTO, INA
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="17">GATCHALIAN, WIN
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="30">MANZANO, EDU
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="43">ROMUALDEZ, MARTIN
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="5">ARQUIZA, GODOFREDO
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="18">GORDON, DICK
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="31">MONTANO, ALLAN
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="44">ROMULO, ROMAN
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="6">BALIGOD, LEVITO
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="19">GUINGONA, TG
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="32">MONTAÑO, MON
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="45">SANTIAGO, DIONISIO
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="7">BELGICA, GRECO
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="20">HONTIVEROS, RISA
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="33">NAPEÑAS, GETULIO
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="46">SOTTO, VICENTE
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="8">BELLO, WALDEN
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="21">KABALU, EID
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="34">OPLE, SUSAN
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="47">TOLENTINO, FRANCIS
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="9">CAM, SANDRA
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="22">KAPUNAN, ATTY.
LORNA
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="35">OSMEÑA, SERGIO III
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="48">VALEROSO, DIOSDADO
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="10">CHAVEZ, MEL
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="23">KIRAM, PRINCESS
JACEL
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="36">PACQUIAO, MANNY
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="49">VILLANUEVA, JOEL
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="11">COLMENARES, NERI
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="24">LACSAMANA, ALMA
MORENO
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="37">PAEZ, MR. COOP
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="50">ZUBIRI, MIGZ
								</td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="12">DE LIMA, LEILA
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="25">LACSON, PANFILO PING
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="38">PAGDILAO, SAMUEL
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="13">DOMAGOSO, ISKO
MORENO
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="26">LANGIT, REY
								</td>
								<td>
									<label class="checkbox-inline"><input type="checkbox" name="senator[]" value="39">PALPARAN, JOVITO JR
								</td>
								<td></td>
							</tr>
						</tbody>
					</table>
					<div id="submission_div">
						<button type="submit" class="btn btn-primary">Submit Vote</button>
					</div>
				</form>
			</div>
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