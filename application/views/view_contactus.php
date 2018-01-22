<!--==========================
      Contact Section
      ============================-->
      <section id="contact">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Kontak <i class="icofont icofont-cur-taka-minus"></i></h3>
          </div>
        </div>

        <div id="google-map" data-latitude="-6.3460892" data-longitude="106.7510095"></div>

        <div class="container wow fadeInUp">
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4">
              <div class="info">
                <div>
                  <i class="fa fa-map-marker"></i>
                  <p>JL. Raya Pondok Cabe No 36, Pondok Cabe Tangerang Selatan</p>
                </div>

                <div>
                  <i class="fa fa-envelope"></i>
                  <p>hmtipoltekswad@gmail.com</p>
                </div>

                <div>
                  <i class="fa fa-phone"></i>
                  <p>021-23741561</p>
                </div>
              </div>

              <div class="social-links">
                <a href="https://www.facebook.com/groups/hmtipolswa/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/hmti_poltekswad/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
              </div>

            </div>

            <div class="col-lg-5 col-md-8">
              <div class="form">
                <?php if($this->session->flashdata('item')):?>
                  <p><?php echo $this->session->flashdata('item'); ?></p>
                  <?php endif?>

                  <div id="errormessage"></div>
                  <div class="contactForm">
                    <?php echo form_open('home/sendmessage'); ?>
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>

              </div>
            </div>

          </div>

        </div>
    </section><!-- #contact -->