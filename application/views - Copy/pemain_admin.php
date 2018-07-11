<?php 
        $this->load->view('header');
     ?>
     
    <main role="main" class="container" style="background-image: url('maloch.jpg');">
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
                <a href="<?php echo base_url("index.php/pemain/update/".$value['id']) ?>" class="btn btn-sm btn-link">Edit</a>
                <a href="<?php echo base_url("index.php/pemain/deleteData/".$value['id']) ?>" class="btn btn-sm btn-link">Hapus</a>
              </td>
            </tr>
            
          <?php endforeach ?>
        </tbody>
      </table>
    </main>

    <<?php 
        $this->load->view('footer');
     ?>
  