<?php 
    $this->load->view('admin/header');
?>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-8">
                  <a href="<?php echo base_url('index.php/admin/createUser') ?>" class="btn btn-primary my-3 float-right"><b>Tambah</b></a>
                <table class="table table-striped">
                  <thead>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <?php foreach ($user_list as $key) {
                      ?>
                      <tr>
                        <td><?php echo $key->name ?></td>
                        <td><?php echo $key->username ?></td>
                        <td><?php echo $key->level ?></td>
                        <td>
                          <a href="<?php echo base_url("index.php/admin/updateUser/".$key->id) ?>" class="btn btn-sm btn-link">Edit</a>
                          <a href="<?php echo base_url("index.php/admin/deleteUser/".$key->id) ?>" class="btn btn-sm btn-link" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <br><br>
              </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url() ?>assets/data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/dist/js/sb-admin-2.js"></script>
</body>
</html>