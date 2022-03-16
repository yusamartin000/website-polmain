<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/pmb.css">

    <title>Beasiswa POLMAIN</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Beasiswa POLMAIN</h3>
      <p>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <div class="col-md">
        Pemberian beasiswa oleh Politeknik Masamy Internasional terhadap mahasiswa merupakan bagian dari
        bidang Kemahasiswaan (Bidang I) yang ditujukan untuk membantu kesejahteraan
        Mahasiswa Politeknik Masamy Internasional
        <p>
        <p>Sumber dana pemberian beasiswa ini
        meliputi pemerintah dalam bentuk dana DIPA dan pemerintah daerah.
        <p>
        <p>
        Pemberian beasiswa ini dilakukan secara rutin setiap tahun dimana kuota untuk calon penerima
        disesuaikan dari kouta yang diberikan baik dari pemerintah, yayasan sosial ataupun perusahaan swasta.
        <p>
        <p>
        <b>Jenis Beasiswa POLMAIN:</b>
        <ol>
        <li>Beasiswa KIP-Kuliah</li>
        <li>Beasiswa UKT</li>
        <li>Beasiswa pemerintah daerah</li>
        </ol>
        <p>
        Untuk informasi yang lebih jelas tentang beasiswa POLMAIN, silakan menghubungi UPT POLMAIN.
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
    
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>