<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/home.css">

    <title>POLMAIN</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="position: absolute; z-index: 99; width: 100%; padding-bottom: 5%; background-image: linear-gradient(to top, rgba(255, 255, 255, 0), rgba(1, 70, 143, 1));">
      <?php $this->load->view('navbar');?>
    </div>
    <!-- jumbotron -->
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url();?>assets/img/gedungkampus.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block" style="top: 20%; transform:">
                    <div style="background-color: #fff; border-radius: 100%; width: 20%; margin-left: 40%; margin-bottom: 20px; box-shadow: 1px 1px 5px #050505;"><img src="<?= base_url();?>assets/img/icon/logokampus.png" width="100%;"></div>
                    <h1 class="display-5 font-weight-bold" style="text-shadow: 1px 1px 5px #050505;">POLITEKNIK MASAMY INTERNASIONAL</h1>
                    <!-- <a class="btn btn-primary btn-lg" href="<?= base_url();?>index.php/welcome/hubungi_kami" role="button" style="width: 13em; border-radius: 100px;">daftar sekarang</a> -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url();?>assets/img/ukm/ukm_esport.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url();?>assets/img/ukm/ukm_futsal.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url();?>assets/img/ukm/ukm_musik.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- jumbotron -->
    
    <!-- tentang polmain -->
    <div class="container profil">
      <h2 class="font-weight-bold title">Tentang POLMAIN</h2>
      <div class="row">
        <div class="col">
          <img src="<?= base_url();?>assets/img/tentang_polmain.jpg" width="100%" style="border-radius: 10px;">
        </div>
        <div class="col-md-8">
          <p>POLMAIN atau Politeknik Mas Ami Internasional merupakan politeknik yang didirikan oleh Perkumpulan Mas Ami Academy International yang dipimpin oleh Mr. Aminoto dari Pacific Harvest (CV) Banyuwangi yang sangat memperhatikan kebutuhan SDM yang berkualitas khususnya di wilayah Banyuwangi, Jawa Timur dalam menyongsong era industri 4.0 mendatang. <br><br>Atas dasar kepedulian itulah, POLMAIN berdedikasi membangun SDM Industri Indonesia yang kompeten di era industri 4.0. Kegiatan belajar-mengajar Polmain dimulai sejak tahun ajaran 2018 – 2019 atas dasar <strong>Keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi Republik Indonesia Nomor 731/KPT/I/2018</strong> tentang pendirian Politeknik MASAMY INTERNASIONAL di Kabupaten Banyuwangi, Provinsi Jawa Timur yang diselenggarakan oleh Perkumpulan Mas Ami Internasional.</p>
          <a class="btn btn-primary btn-sm" href="<?= base_url();?>index.php/welcome/profil" role="button">lihat selengkapnya</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <iframe width="560" height="415" src="https://www.youtube.com/embed/QbpHK2-SF7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <!-- tentang polmain -->
    <!-- prodi -->
    <div class="container prodi">
      <h2 class="font-weight-bold title">Program Studi</h2>
      <div class="row">
        <div class="col-md">
          <div class="card card2">
            <img src="<?= base_url();?>assets/img/prodi/akuntansi1.png">
            <h5>D3 Akuntansi</h5>
            <a class="btn btn-sm" href="<?= base_url();?>index.php/prodi/akuntansi" role="button">lihat selengkapnya</a>
          </div>
        </div>
        <div class="col-md">
          <div class="card card1">
            <img src="<?= base_url();?>assets/img/prodi/komputer1.png">
            <h5>D3 Teknologi Komputer</h5>
            <a class="btn btn-sm" href="<?= base_url();?>index.php/prodi/tek_komputer" role="button">lihat selengkapnya</a>
          </div>
        </div>
        <div class="col-md">
          <div class="card card3">
            <img src="<?= base_url();?>assets/img/prodi/mesin1.png">
            <h5>D3 Teknologi Mesin</h5>
            <a class="btn btn-sm" href="<?= base_url();?>index.php/prodi/tek_mesin" role="button">lihat selengkapnya</a>
          </div>
        </div>
      </div>
        <div class="col-md">
          <div class="bulat1"></div>
          <div class="bulat2"></div>
        </div>
      </div>
    </div>
    <div class="container galeri">
      
      <h2 class="font-weight-bold">Penempatan Kerja Lulusan</h2>
      <div class="row">
        <div class="col">
          <ol>
            <li>Lulusan terbaik dari setiap Program Studi akan <strong>langsung diterima bekerja di industri milik Bapak Aminoto (Perkumpulan Mas Amy dan Rekanan)</strong></li>
            <li>Lulusan terbaik lainnya diupayakan bekerja di industri / perusahaan rekanan baik di dalam negeri maupun di luar negeri</li><br>
          </ol>
        </div>
      </div>
    </div>
    <!-- biaya -->
    <!-- kontak -->
    <div class="kontak">
      <div class="container">
        <h5></h5>
        <div class="row">
          <div class="col-md">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.7344269193236!2d114.38218691438144!3d-8.229439184890861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15b2861402d69%3A0x276b55861cd8ed21!2sPoliteknik%20Masamy%20Internasional!5e0!3m2!1sid!2sid!4v1645255761882!5m2!1sid!2sid" width="100%" height="300" style="border:0; border-radius: 10px; transition: width 2s, height 2s; margin-bottom: 20px;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-md form">
            
            <h5 style="text-align: center;">Hubungi kami melalui:</h5>
            <img src="<?= base_url();?>assets/img/icon/maps.png"><font color="white">Jl. Ikan Paus no.10-15, Kertosari, Banyuwangi, Jawa Timur<br>
            <a href="https://www.instagram.com/officialpolmain/?hl=en" target="_blank"><img src="<?= base_url();?>assets/img/icon/instagram.png">@officialpolmain</a><br>
            <a href="https://www.facebook.com/Politeknik-Masamy-Internasional-Banyuwangi-279794389297138/" target="_blank"><img src="<?= base_url();?>assets/img/icon/facebook.png">Politeknik Masamy Internasional</a><br>
            <a href="https://wa.me/6287759726999" target="_blank"><img src="<?= base_url();?>assets/img/icon/whatsapp.png">POLMAIN (0877-5972-6999)</a><br>
          </div>
        </div>
        <p>dibuat dengan sepenuh hati oleh: TIM @PoliteknikMasamyInternasional &copy; <?php echo date("Y"); ?></p>
      </div>
    </div>
    <!-- kontak -->
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>