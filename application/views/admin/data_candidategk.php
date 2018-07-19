<?php 
    $this->load->view('admin/header');
?>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Goal Keeper Candidate</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                  <a href="<?php echo base_url('index.php/gk/create') ?>" class="btn btn-primary my-3 float-righz"><b>Tambah</b></a>
                <table class="table table-striped">
                  <thead>
                    <th>Fullname</th>
                    <th>Nation</th>
                    <th>Date Of Birth</th>
                    <th>Number</th>
                    <th>Photo</th>
                    <th>Votes</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <?php foreach ($gk_list as $key) {
                      ?>
                      <tr>
                        <td><?php echo $key->fullname ?></td>
                        <td><?php echo $key->nation ?></td>
                        <td><?php echo $key->birth ?></td>
                        <td><?php echo $key->number ?></td>
                        <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $key->photo?>" alt="" width=100 height=100></td>
                        <td><?php echo $key->votes ?></td>
                        <td>
                          <a href="<?php echo base_url("index.php/gk/update/".$key->candidate_id) ?>" class="btn btn-sm btn-link">Edit</a>
                          <a href="<?php echo base_url("index.php/gk/deleteData/".$key->candidate_id) ?>" class="btn btn-sm btn-link">Hapus</a>
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






