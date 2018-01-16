  <!--==========================
      sejarah Us Section
      ============================-->
      <section id="sejarah">
        <div class="container">
          <div class="row sejarah-container">
            <h2 class="title">Sejarah</h2>
            <?php foreach($home  as $row): ?>
              <p>
                <?php echo $row->sejarah;  ?>
              </p>
            <?php endforeach; ?>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #sejarah -->
