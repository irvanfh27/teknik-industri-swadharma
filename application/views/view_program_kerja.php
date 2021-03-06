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
                <br>
                <br>
                <?php foreach ($programkerja as $row): ?>

                  <div class="icon-box wow fadeInUp">
                    <div class="icon"><i class="fa fa-file-text-o"></i></div>
                    <h4 class="title"><a href="<?php echo base_url('home/programkerja_detail/').$row['slug']; ?>"><?php echo $row['judul']; ?></a></h4>
                    &nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;<small><?php echo $row['create_at']; ?></small>
                    <p class="description">&nbsp;<?php echo word_limiter($row['deskripsi'],20); ?></p>
                  </div>
                <?php endforeach ?>
                
              </div>
              <!-- <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div> -->
            </div>
          </div>
        </section><!-- #about -->

      </main>
      <?php $this->load->view('footer'); ?>