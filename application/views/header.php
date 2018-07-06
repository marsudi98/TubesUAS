<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Code Igniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <style type="text/css">
        body {

        }
    </style>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F8F8F8">
        <a class="navbar-brand" href="home">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto w-100">
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/Election_Controller/index') ?>">Home </a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/Pemain/index') ?>">Data </a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo base_url('index.php/Election_Controller/voting_page') ?>"> Vote <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown float-right ml-auto">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize;"></a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout') ?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      </div>
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
  </head>