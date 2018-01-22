<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>

<body>

 <?php $this->load->view('menubar'); ?>
 <section id="hero">
  <div class="hero-container">
    <h1>Selamat Datang</h1>
    <?php foreach ($home as $row): ?>
      <h2><?php echo $row->judul; ?></h2>
    <?php endforeach ?>

  </div>
</section><!-- #hero -->

<main id="main">



  <?php
  $this->load->view('view_sejarah');
  $this->load->view('view_visi_misi');
  // $this->load->view('view_fasilitas');
  $this->load->view('view_struktur_organisasi');
  $this->load->view('view_contactus');
  ?>





  </main>
  <?php $this->load->view('footer'); ?>
  
</body>
</html>
