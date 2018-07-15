<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Pages - Voting System</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Action</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Another action</a>
                        </li>
                        <li><a href="#"><i class="fa fa-table fa-fw"></i> Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('index.php/login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/admin/index') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Candidate<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/coach/index') ?>">Coach Candidate</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/mfp/index') ?>">MFP Candidate</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/gk/index') ?>">GK Candidate</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Candidate</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                
                  <a href="<?php echo base_url('index.php/coach/create') ?>" class="btn btn-primary my-3 float-right"><b>Tambah</b></a>
    
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
                        <td><img src="<?php echo base_url()?>assets/uploads/<?php echo $key->nama?>" alt="" width=100 height=100></td>
                        <td><?php echo $key->tanggalGabung ?>
                          <input type="checkbox" name="newsletter" value="accept" checked="checked" /> Check box
                          <input type="radio" name="radiobutton" value="accept" checked="checked">Dito
                          <input type="radio" class="custom-control-input" name="radiobutton" value="accept" checked="checked">Ditol
                        </td>
                        <td>
                          <a href="<?php echo base_url("index.php/coach/update/".$key->id) ?>" class="btn btn-sm btn-link">Edit</a>
                          <a href="<?php echo base_url("index.php/coach/deleteData/".$key->id) ?>" class="btn btn-sm btn-link">Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>

                <br><br>
<!-- 
                <div class="row">
                  <?php foreach ($mvp as $key) { ;?>
                  <div class="col-md-4">        
                    <div class="thumbnail" align="center">
                      <img src="<?php echo base_url()?>assets/uploads/<?php echo $key->photo?>" class="img-fluid" alt="MVP" width=200 height=200>
                    </div>
                    <h3 class="text-center"><?php echo $key->nama ?></h3>        
                  </div>
                  <?php } ?>
                </div>    -->
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






