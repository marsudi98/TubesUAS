<?php 
        $this->load->view('header');
     ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Pemrograman Web Framework</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/Pemain')?>">CRUD<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/Home/gridDinamis') ?>">CRUD JS-GRID<span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container" style="background-image: url('maloch.jpg');">
      <ul class="nav navbar-right">
      <a href="<?php echo base_url('index.php/pemain/create') ?>" class="btn btn-danger my-3"><b>TAMBAH</b></a>
      </ul>
      <table class="table table-hover" style="background-color: lightblue">
        <thead>
          <th>Nama Player</th>
          <th>Nickname</th>
          <th>Rank</th>
          <th>Photo</th>
          <th>RADIO BUTTON</th>
          <th>Aksi</th>
        </thead>
        <tbody>
          <?php foreach ($pemain_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['nama'] ?></td>
              <td><?php echo $value['nickname'] ?></td>
              <td><?php echo $value['rank'] ?></td>
              <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $value['photo']?>" alt="" width=100 height=100></td>
              <td><?php echo $value['tanggalGabung'] ?>
                <input type="checkbox" name="newsletter" value="accept" checked="checked" />
                <input type="radio" name="radiobutton" value="accept" checked="checked">Dito
                <input type="radio" name="radiobutton" value="accept" checked="checked">Ditol
              </td>
              <td>
                <a href="<?php echo base_url("index.php/pemain/update/".$value['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?php echo base_url("index.php/pemain/deleteData/".$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
              </td>
            </tr>
            
          <?php endforeach ?>
        </tbody>
      </table>
    </main>

    <<?php 
        $this->load->view('footer');
     ?>
  