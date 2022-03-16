<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/prodi.css">
    <title>UKM & Prestasi</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <!-- jumbotron -->
    <div class="container">
      <div class="jumbotron bg-transparent">
        <div class="row">
          <div class="col-md">
            <h1 class="display-5 font-weight-bold">Unit Kegiatan Mahasiswa (UKM)</h1>
          </div>
          <div class="col">
            <div class="imgcontainer">
              <img src="<?= base_url();?>assets/img/gedungkampus.jpg">
            </div>
          </div>
          </div>
            <div class="ornament">
            <div class="kotak"></div>
            <div class="bulat"></div>
          </div>
        </div>
  </div>
  <p>
    <!-- jumbotron -->
  <div class="container galeri">
        <div class="row"><p>
          <div class="col-md card">
            <img src="<?= base_url();?>assets/img/ukm/ukm_musik.jpg">
            <h5>UKM Musik</h5>
          </div>
          <div class="col-md card">
            <img src="<?= base_url();?>assets/img/ukm/ukm_esport.jpg">
            <h5>UKM E-Sport</h5>
          </div>
          <div class="col-md card">
            <img src="<?= base_url();?>assets/img/ukm/ukm_futsal.jpg">
            <h5>UKM Futsall</h5>
          </div>
          <div class="col-md card">
            <img src="<?= base_url();?>assets/img/gedungkampus.jpg">
            <h5>UKM Bulutangkis</h5>
          </div>
         </div> 
         <p>
         
        <div class="container">
            <div class="row"></div><p>
         </div>
        <p>
      <h3 class="font-weight-bold">Prestasi Mahasiswa POLMAIN</h3>
      <div class="row justify-content-center">
        <?php foreach($prestasi as $u){ ?>
            <div class="col-md-3 card">
              <img src="<?= base_url();?>assets/img/prestasi/<?= $u->nama_gambar ?>">
              <h5><?= $u->deskripsi_gambar ?></h5>
            </div>
        <?php } ?>
      </div>
      <p>
</div>
<p>
<?php include("footer.php");?>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>