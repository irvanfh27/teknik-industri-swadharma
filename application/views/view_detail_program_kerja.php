<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>

<body>

 <?php $this->load->view('menubar'); ?>
 <section id="hero">
  <div class="hero-container">
    <h1>Politeknik Swadharma Teknik Industri</h1>
  </div>
</section><!-- #hero -->

<main id="main">

  <!--==========================
      sejarah Us Section
      ============================-->

        <section id="sejarah">
          <div class="container">
            <div class="row sejarah-container">
              <ul>
          
                  <h2 class="title"><?php echo $pg_kerja['judul']; ?></h2>
                    <p>

                      <?php echo $pg_kerja['judul']; ?>
                 
                    </p>
                </ul>
              </div>

              <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
            </div>

          </div>
        </section><!-- #sejarah -->



    </main>
    <?php $this->load->view('footer'); ?>
  </body>
  </html>
