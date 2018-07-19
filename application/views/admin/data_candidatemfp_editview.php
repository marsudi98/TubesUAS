<?php 
    $this->load->view('admin/header');
?>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit MFP Candidate</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <?php echo form_open_multipart('mfp/update/'.$this->uri->segment(3)); ?>
                  <?php echo validation_errors(); ?>
                  <div class="form-group">
                    <label for=""><b>Nama Pemain</b></label>
                    <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $mfp[0]->fullname ?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for=""><b>Negara</b></label>
                    <input type="text" class="form-control" name="nation" id="nation" value="<?php echo $mfp[0]->nation ?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for=""><b>Nomor Punggung</b></label>
                    <input type="text" class="form-control" name="number" id="number" value="<?php echo $mfp[0]->number ?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for=""><b>Posisi</b></label>
                    <input type="text" class="form-control" name="position" id="position" value="<?php echo $mfp[0]->position ?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for=""><b>Votes</b></label>
                    <input type="text" class="form-control" name="votes" id="votes" value="<?php echo $mfp[0]->votes ?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" class="form-control" name="userfile" value="<?php echo $mfp[0]->photo?>" placeholder="Input field">
                  </div>
                  <div class="form-group">
                    <label for=""><b>Lahir</b></label>
                    <input type="date" name="lahir" placeholder="YYYY-MM-DD" id="lahir" class="form-control" 
                          pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
                          title="Enter a date in this format YYYY-MM-DD"/>
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