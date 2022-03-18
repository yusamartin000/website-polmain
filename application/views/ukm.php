<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/ukm.css">
    <title>UKM & Prestasi</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="font-weight-bold">Unit Kegiatan Mahasiswa (UKM)</h3>
        </div>
        <div class="col-md-3">
          <img src="<?= base_url();?>assets/img/ukm/ukm_esport.jpg">
            <h5 style="text-align: center;">UKM E-Sport</h5>
        </div>
        <div class="col-md-3">
          <img src="<?= base_url();?>assets/img/ukm/ukm_musik.jpg">
            <h5 style="text-align: center;">UKM Musik</h5>
        </div>
        <div class="col-md-3">
          <img src="<?= base_url();?>assets/img/ukm/ukm_futsal.jpg">
            <h5 style="text-align: center;">UKM Futsal</h5>
        </div>
        <div class="col-md-3">
          <img src="<?= base_url();?>assets/img/ukm/ukm_futsal.jpg">
            <h5 style="text-align: center;">UKM Bulutangkis</h5>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="font-weight-bold">Prestasi Mahasiswa POLMAIN</h3>
        </div>
        <?php $x= 1; foreach($prestasi as $u){ ?>
            <div class="col-md-3 card">
              <div>
                <img src="<?= base_url();?>assets/img/prestasi/<?= $u->nama_gambar ?>">
                <i style="color: #878787;"><?= $u->tahun_gambar ?></i>
                <h5><?= $u->deskripsi_gambar ?></h5>
              </div>
            </div>
        <?php } ?>
      </div>
    </div>
<?php include("footer.php");?>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>