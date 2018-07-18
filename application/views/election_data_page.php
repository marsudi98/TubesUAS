<?php 
  $this->load->view('header');
?>

<br>

<!-- <div class="container">
	<div class="jumbotron">
	  <h1 class="display-4">Hello, world!</h1>
	  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	  <hr class="my-4">
	  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>
</div> -->

<div class="container">
<div class="container">
	<div id="slide" class="carousel slide" data-ride="carousel">

	<!-- Indicators -->
	<ul class="carousel-indicators">
		<li data-target="#slide" data-slide-to="0" class="active"></li>
		<li data-target="#slide" data-slide-to="1"></li>
		<li data-target="#slide" data-slide-to="2"></li>
	</ul>
	<!-- The slideshow -->
	<div class="carousel-inner">
		<div class="carousel-item active">
	      <img src="<?php echo base_url()?>assets/uploads/worldcup.jpg" alt="worldcup" width>
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/uploads/worldcup1.jpg" alt="worldcup1">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/uploads/worldcup2.jpg" alt="worldcup2">
	    </div>
	 </div>

	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#slide" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#slide" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
	</div>
</div>
</div>

<div class="container">
	<div class="row">	
		<div class="container">	
			<table border="4">
				<thead>
					<tr>
						<td>Nation</td>
						<td>Votes</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($dua as $key): ?>
					<tr>
						<td><?php echo $key['nation'] ?></td>
						<td><?php echo $key['votes'] ?></td>
					<?php endforeach ?>
					</tr>
				</tbody>
			</table>

		<!-- <h2>Jumlah : <?=$maxcoach[0]->maxcoach?></h2>
		<h2>Jumlah : <?=$maxgk[0]->maxgk?></h2>
		<h2>Jumlah : <?=$maxmfp[0]->maxmfp?></h2> -->
		</div>	
	</div>
<div class="container">
	<h4>CATEGORY RESULT</h4>
	<table class="table table-striped">
		<thead>
			<th>Category</th>
			<th>Fullname</th>
			<th>Nation</th>
			<th>Votes</th>
		</thead>
		<tbody>
			<tr>
				<?php foreach ($maxcoach as $key): ?>
					<td>Coach Candidate</td>
					<td><?php echo $key->fullname ?></td>
					<td><?php echo $key->nation ?></td>
					<td><?=$maxcoach[0]->maxcoach?></td>
				<?php endforeach?>
			</tr>
			<tr>
				<?php foreach ($maxgk as $key): ?>
					<td>GK Candidate</td>
					<td><?php echo $key->fullname ?></td>
					<td><?php echo $key->nation ?></td>
					<td><?=$maxgk[0]->maxgk?></td>
				<?php endforeach?>
			</tr>
			<tr>
				<?php foreach ($maxmfp as $key): ?>
					<td>MFP Candidate</td>
					<td><?php echo $key->fullname ?></td>
					<td><?php echo $key->negara ?></td>
					<td><?=$maxmfp[0]->maxmfp?></td>
				<?php endforeach?>
			</tr>
		</tbody>
	</table>
</div>
<br><br>
<div class="container">
	<h2>TIMER COUNTDOWN</h2>
</div>