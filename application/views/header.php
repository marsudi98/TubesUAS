<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Code Igniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    </style>
    <style type="text/css">
        body {

        }
    </style>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F8F8F8">
        <a class="navbar-brand" href="<?php echo base_url('index.php/voting') ?>">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto w-100">
            <?php 
                if($this->session->userdata('logged_in') == NULL){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/voting/index') ?>">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/voting/candidate_data') ?>">Candidates </a>
                    </li>        
                <?php } else { ?>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/voting/index') ?>">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/voting/candidate_data') ?>">Candidates </a>
                    </li>            
                    <li>
                        <a class="nav-link" href="<?php echo base_url('index.php/voting/voting_page') ?>"> Vote <span class="sr-only">(current)</span></a>
                    </li>
                <?php }
            ?>
            <li class="nav-item dropdown float-right ml-auto">
                <?php 
                    if($this->session->userdata('logged_in') == NULL){?>
                       <a class="nav-link" href="<?php echo base_url('index.php/login') ?>"  style="text-transform: capitalize;">
                            Login 
                        </a><?php
                    } else{?>
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="   true" aria-expanded="false" style="text-transform: capitalize;">
                            Hello, <?php echo $this->session->userdata('logged_in')['username']; ?>! 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout') ?>">Logout</a>
                        </div>
                   <?php }
                ?>
            </li>
          </ul>
        </div>
    </nav>
    </div>
  </head>