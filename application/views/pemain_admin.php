  <?php 
  $this->load->view('header');
?>
  
  <main role="main" class="container">
    <ul class="nav navbar-right">
      <a href="<?php echo base_url('index.php/pemain/create') ?>" class="btn btn-primary my-3"><b>Tambah</b></a>
    </ul>
    <table class="table table-striped">
      <thead>
        <th>Nama Player</th>
        <th>Nickname</th>
        <th>Rank</th>
        <th>Photo</th>
        <th>Radio Button</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        <?php foreach ($pemain_list as $key) {
          ?>
          <tr>
            <td><?php echo $key->nama ?></td>
            <td><?php echo $key->nickname ?></td>
            <td><?php echo $key->rank ?></td>
            <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $key->photo?>" alt="" width=100 height=100></td>
            <td><?php echo $key->tanggalGabung ?>
              <input type="checkbox" name="newsletter" value="accept" checked="checked" /> Check box
              <input type="radio" name="radiobutton" value="accept" checked="checked">Dito
              <input type="radio" class="custom-control-input" name="radiobutton" value="accept" checked="checked">Ditol
            </td>
            <td>
              <a href="<?php echo base_url("index.php/pemain/update/".$key->id) ?>" class="btn btn-sm btn-link">Edit</a>
              <a href="<?php echo base_url("index.php/pemain/deleteData/".$key->id) ?>" class="btn btn-sm btn-link">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
      </table>

      <br><br>

      <div class="row">
        <?php foreach ($mvp as $key) { ;?>
        <div class="col-md-4">        
          <div class="thumbnail" align="center">
            <img src="<?php echo base_url()?>assets/uploads/<?php echo $key->photo?>" class="img-fluid" alt="MVP" width=200 height=200>
          </div>
          <h3 class="text-center"><?php echo $key->nama ?></h3>        
        </div>
        <?php } ?>
      </div>   
     
    </main>

<?php 
  $this->load->view('footer');
?>