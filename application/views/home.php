<?php 
  $this->load->view('header');
?>

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
          <li>
            <a class="nav-link" href="<?php echo base_url('index.php/Election_Controller/voting_page') ?>">Vote <span class="sr-only">(current)</span></a></li>
        </ul>
        
      </div>
</nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Voting MVP World Cup 2018</h1>
        <p class="lead">Halaman ini digunakan untuk
        memilih pemain terbaik dari Piala Dunia 2018
        </p>
        <a class="btn btn-lg btn-primary" href="<?php echo base_url('index.php/Election_Controller/index') ?>"" role="button">View navbar docs &raquo;</a>
      </div>
    </main>

    
    <<?php 
        $this->load->view('footer');
     ?>
