<?php 
  $this->load->view('header');
?>

<br>

<!-- <div class="container">
	<div class="jumbotron">
	  <h1 class="display-4">Hello!</h1>
	  <p class="lead">Welcome to MVP Voting for World Cup 2018</p>
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
	      <img src="<?php echo base_url()?>assets/uploads/worldcup.jpg" alt="worldcup">
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
	<a class="carousel-control-next" href="#slide" 	data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
	</div>
</div>
</div>

<br>

<div class="container">
	<?php
                    $data = $this->session->userdata('logged_in')['is_voted'];
                   echo $data;

                   print_r($this->session->userdata);
                ?>
	<h4>Latest Result</h4>
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
					<td><?php echo $key->nation ?></td>
					<td><?=$maxmfp[0]->maxmfp?></td>
				<?php endforeach?>
			</tr>
		</tbody>
	</table>
</div>
<br><br><!-- 
<div class="container">
	<h2>TIMER COUNTDOWN</h2>
	<?php echo $this->session->userdata('logged_in')['username']; ?>
</div> -->