<?php 
  $this->load->view('header');
?>   
    <br><br>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Voting MVP World Cup 2018</h1>
        <p class="lead">Halaman ini digunakan untuk
        memilih pemain terbaik dari Piala Dunia 2018
        </p>
        <a class="btn btn-lg btn-primary" href="<?php echo base_url('index.php/Election_Controller/index') ?>"" role="button">Let's vote!</a>
      </div>
    </main>

  

    
    <?php 
        $this->load->view('footer');
     ?>
