<?php 
  $this->load->view('header');
?>

<div class="container">
	<div class="row">
	    <?php foreach ($coach_list as $key): ?>
	    <div class="col-md-4">        
	      <div class="thumbnail" align="center">
	        <p>NICE</p>
	      </div>
	      <h3 class="text-center"><?php echo $key->candidate_id ?></h3>        
	    </div>
	    <?php endforeach ?>
	</div> 

	<table class="table table-striped">
		<thead>
			<th>Coach Candidate id</th>
			<th>Fullname Coach</th>
			<th>Vote</th>
		</thead>
		<tbody>
			<?php foreach ($coach_list as $key): ?>
			<tr>
				<td><?php echo $key->candidate_id ?></td>
				<td><?php echo $key->fullname ?></td>
				<td><?php echo $key->votes ?></td>
			</tr>
			<?php endforeach ?>

		</tbody>
	</table>
</div>