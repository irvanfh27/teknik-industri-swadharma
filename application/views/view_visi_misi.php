
    <!--==========================
    Call To Action Section
    ============================-->
      <?php foreach ($home as $row):?>
    <section id="visi-misi">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Visi</h3>
            <p class="cta-text"> <?php echo $row->visi; ?></p>
          </div>
          
        </div>

      </div>
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Misi</h3>
            <p class="cta-text"><?php echo $row->misi; ?>
             </p>
          </div>
          
        </div>

      </div>
    </section><!-- #call-to-action -->
<?php endforeach; ?>