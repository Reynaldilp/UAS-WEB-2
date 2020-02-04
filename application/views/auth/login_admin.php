  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <!-- untuk membuat header awal -->
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="#">STT BANDUNG</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Info Kampus</a></li>
              <!--   <li><a href="#site-section" class="nav-link">Pendaftaran</a></li> -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('<?= base_url('gambar/ptn.jpg'); ?>');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="100">Informasi Seputar Kampus</h1>
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod a minima harum ipsa voluptates. Ab commodi quisquam cupiditate, incidunt possimus, provident alias deleniti minima voluptates temporibus veritatis, iure fuga, tenetur?</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="https://www.doetaindonesia.com/bantu-siswa-dapatkan-info-perguruan-tinggi-sma-76-gelar-education-fair/" class="btn btn-primary py-3 px-5 btn-pill">Read More</a></p>
                </div>

                <!-- form login -->
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="<?= base_url('Auth/admin_login')?>" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Login Admin</h3>
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Masukan Username Anda" name="username" id="username" value="<?= set_value('username') ?>">
                      <?php echo form_error('username','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                      <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group justify-content-center">
                      <input type="submit" class="btn btn-primary btn-pill btn-block" value="Sign In">
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?= base_url('auth') ?>">Login Mahasiswa!</a>
                    </div> 
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- form berita -->
    <div class="site-section courses-title" id="courses-section">

      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">PROGRRAM STUDI</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="https://www.instagram.com/sttbandung/?hl=id"><img src="<?= base_url('gambar/sttb.png'); ?>" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="#">TEKNIK INFORMATIKA</a></h3>
                <p>JURUSAN TEKNIK INFORMATIKA</p>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="https://www.instagram.com/sttbandung/?hl=id"><img src="<?= base_url('gambar/sttb.png'); ?>" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <h3><a href="#">TEKNIK INDUSTRI</a></h3>
                <p>JURUSAN TEKNIK INDUSTRI</p>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="https://www.instagram.com/sttbandung/?hl=id"><img src="<?= base_url('gambar/sttb.png'); ?>" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
        
                <h3><a href="#">DESAIN KOMUNIKASI VISUAL</a></h3>
                <p>JURUSAN DKV</p>
              </div>
             
            </div>
          </div>
        </div>

      </div>
    </div>
  <footer class="footer-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Sekolah Tinggi Teknologi Bandung</h3>
          <p>Jl. Soekarno Hatta No.378 Bandung 40235</p>
        </div>
        <div class="col-md-4">
          <h3>Contact Us</h3>
          <ul class="list-unstyled footer-links">
            <li><a href="#">Phone. (+6222) 522 4000</a></li>
            <li><a href="#">Fax. (+6222) 520 9272</a></li>
            <li><a href="#">Hp. +6281 2222 55 777 / +6287 7888 99 777</a></li>
            <li><a href="#">Email. info@sttbandung.ac.id</a></li>
        </div>

      </div>

      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> Web Programing 2 <i class="" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Reynaldi Lesmana Putra </a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>
  </div> <!-- .site-wrap -->