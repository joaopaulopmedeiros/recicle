
    
    <footer class="site-footer">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-3">
            <h2 class="mb-4">Recicle</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
          </div>

          <div class="col-md-2">
            <h2 class="mb-4">Menu</h2>
            <ul class="list-unstyled">
              <?php
                if (isset($footer)) {
                  if ($footer == 'Logon') {
                    echo '<li><a href="ecopontos">Ecopontos</a></li>';
                  }
                }
                else {
                  echo '<li><a href="login">Entrar</a></li>';
                }
              ?>
              <li><a href="<?php echo base_url();?>user_public/desafios">Desafios</a></li>
              <li><a href="<?php echo base_url();?>user_public/contact">Contato</a></li>
              <li><a href="<?php echo base_url();?>user_public/about">Sobre</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2 class="mb-4">Redes Sociais</h2>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          </div>
        </div>

        <div class="row mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="<?= base_url();?>assets/template/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/jquery-ui.js"></script>
  <script src="<?= base_url();?>assets/template/js/popper.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/bootstrap.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/owl.carousel.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/jquery.countdown.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url();?>assets/template/js/aos.js"></script>
  <script src="<?= base_url();?>assets/template/js/main.js"></script>
  </body>
</html>