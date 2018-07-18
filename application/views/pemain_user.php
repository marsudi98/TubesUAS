<?php
$this->load->view('header');
// $rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>
<div class="container">
    
  <div class="page-header">
      <h1>Daftar Peserta</h1>
  </div>
    <h3>Coach List</h3>
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
          <!-- <h3 class="text-center"><?=$row->nama_pencalon?></h3> -->        
      </div>
      <?php endforeach?>            
  </div>
  <h3>Most Favorite Player</h3>
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
            <h5 align="center"><?php echo $key->lahir ?></h5>
            <h5 align="center"><?php echo $key->posisi ?></h5>
            <h5 align="center"><?php echo $key->no_punggung ?></h5>
          </div>
      </div>
      <div class="col-lg-12">
          <div class="card-footer">
            <h5 align="center"><?php echo $key->negara ?></h5>
          </div>
      </div>
          <!-- <h3 class="text-center"><?=$row->nama_pencalon?></h3> -->        
      </div>
      <?php endforeach?>            
  </div>

  <h3>Goal Keeper List</h3>
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
          <!-- <h3 class="text-center"><?=$row->nama_pencalon?></h3> -->        
      </div>
      <?php endforeach?>            
  </div>      
  </div>
</div>