<?php
$this->load->view('header');
// $rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>
<div class="container">
<div class="container">
  <br>
  <div class="page-header">
      <h3>Daftar Peserta</h3>
  </div>
  <h4>Coach List</h4>
  <div class="row">
      <?php foreach($coach_data as $key):?>
      <div class="col-md-4">        
         <!--  <div class="thumbnail">
              <img src="gambar/<?=$row->gambar?>" />
          </div> -->
          <div class="card-header">
            <img src="<?php echo base_url()?>assets/uploads/<?php echo $key->photo ?>">
          </div>
      <div class="col-lg-12">
          <div class="card-body">
            <h5 align="center"><?php echo $key->fullname ?></h5>
            
          </div>
      </div>
      <div class="col-lg-12">
          <div class="card-footer">
            <h5 align="center"><?php echo $key->nation ?></h5>
          </div>
      </div>
          <!-- <h4 class="text-center"><?=$row->nama_pencalon?></h4> -->        
      </div>
      <?php endforeach?>            
  </div>
  <br>
  <h4>Most Favorite Player</h4>
  <div class="row">
      <?php foreach($mfp_data as $key):?>
      <div class="col-md-4">        
         <!--  <div class="thumbnail">
              <img src="gambar/<?=$row->gambar?>" />
          </div> -->
          <div class="card-header">
            <img src="<?php echo base_url()?>assets/uploads/<?php echo $key->photo ?>">
          </div>
      <div class="col-lg-12">
          <div class="card-body">
            <h5 align="center"><?php echo $key->fullname ?></h5>
            <h5 align="center"><?php echo $key->birth ?></h5>
            <h5 align="center"><?php echo $key->position ?></h5>
            <h5 align="center"><?php echo $key->number ?></h5>
          </div>
      </div>
      <div class="col-lg-12">
          <div class="card-footer">
            <h5 align="center"><?php echo $key->nation ?></h5>
          </div>
      </div>
          <!-- <h4 class="text-center"><?=$row->nama_pencalon?></h4> -->        
      </div>
      <?php endforeach?>            
  </div>
  <br>
  <h4>Goal Keeper List</h4>
  <div class="row">
      <?php foreach($gk_data as $key):?>
      <div class="col-md-4">        
         <!--  <div class="thumbnail">
              <img src="gambar/<?=$row->gambar?>" />
          </div> -->
          <div class="card-header">
            <img src="<?php echo base_url()?>assets/uploads/<?php echo $key->photo ?>">
          </div>
      <div class="col-lg-12">
          <div class="card-body">
            <h5 align="center"><?php echo $key->number ?></h5> <h5 align="center"><?php echo $key->fullname ?></h5>
            <h5 align="center"><?php echo $key->birth ?></h5>
          </div>
      </div>
      <div class="col-lg-12">
          <div class="card-footer">
            <h5 align="center"><?php echo $key->nation ?></h5>
          </div>
      </div>
          <!-- <h4 class="text-center"><?=$row->nama_pencalon?></h4> -->        
      </div>
      <?php endforeach?>            
  </div>      
</div>
</div>
<br>