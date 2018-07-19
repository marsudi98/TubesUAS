<?php 
    $this->load->view('admin/header');
?>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Coach Candidate</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <?php echo form_open_multipart('coach/update/'.$this->uri->segment(3)); ?>
                  <?php echo validation_errors(); ?>
                  <div class="form-group">
                    <label for=""><b>Fullname</b></label>
                    <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $coach[0]->fullname ?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for=""><b>Nation</b></label>
                    <input type="text" class="form-control" name="nation" id="nation" value="<?php echo $coach[0]->nation ?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" class="form-control" name="userfile" value="<?php echo $coach[0]->photo?>" placeholder="Input field">
                  </div>
                  <button type="submit" class="btn btn-primary"><b>Submit</b></button>
                  <?php echo form_close(); ?>
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




