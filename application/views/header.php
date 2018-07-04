<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Code Igniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">Top navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php/Election_Controller/index') ?>">Home </a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php/Pemain/index') ?>">Data </a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo base_url('index.php/Election_Controller/voting_page') ?>"> Vote <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
  </head>