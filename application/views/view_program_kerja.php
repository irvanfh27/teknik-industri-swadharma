 <!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/viewer.css">

<body>

 <?php $this->load->view('menubar'); ?>
 <section id="hero">
  <div class="hero-container">
    <h1>Selamat Datang</h1>
  </div>
</section><!-- #hero -->

<main id="main">
 <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-12 content order-lg-1 order-2">
            <h2 class="title">Program Kerja</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <?php foreach ($programkerja as $row): ?>
              
            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-file-text-o"></i></div>
              <h4 class="title"><a href="<?php echo base_url('home/programkerja_detail/').$row['id']; ?>"><?php echo $row['judul']; ?></a></h4>
              <p class="description"><?php echo word_limiter($row['deskripsi'],20); ?></p>
            </div>

            <?php endforeach ?>

           
          </div>

          <!-- <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div> -->
        </div>

      </div>
    </section><!-- #about -->



        

    </main>
    <?php $this->load->view('footer'); ?>
