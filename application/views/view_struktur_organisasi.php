 <!--==========================
      Struktur Organisasi
      ============================-->
      <section id="team">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Struktur Organisasi</h3>
           <?php foreach ($home as $row): ?>
             
            <p class="section-description"><?php echo $row->deskripsi_so; ?></p>
           <?php endforeach ?>

          </div>
          <div class="row" >
            <?php foreach ($struktur as $row): ?>

             <div class="col-lg-3 col-md-6">
              <div class="member">
                <div class="pic"><img src="<?php echo base_url(); ?>admin/assets/uploads/files/<?=$row->file_url;?>" alt=""></div>
                <h4><?=$row->nama; ?></h4>
                <span><?=$row->jabatan; ?></span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
            
          <?php endforeach ?>



        </div>

      </div>
    </section><!-- #team -->