<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/prodi.css">
    <title>Prodi D3 Teknologi Mesin</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <!-- jumbotron -->
    <div class="container">
      <div class="jumbotron bg-transparent">
        <div class="row">
          <div class="col-md">
            <h1 class="display-5 font-weight-bold">PROGRAM STUDI DIPLOMA 3 TEKNOLOGI MESIN</h1>
            <a class="btn btn-primary btn-lg" href="<?= base_url();?>index.php/welcome/pmb" role="button">daftar sekarang</a>
          </div>
          <div class="col">
            <div class="imgcontainer">
              <img src="<?= base_url();?>assets/img/prodi/mesin3.jpeg">
            </div>
            
          </div>
          </div>
            <div class="ornament">
            <div class="bulat"></div>
          </div>
        </div>
  </div>
    <!-- jumbotron -->
  <div class="container prodi">
    <h2 class="font-weight-bold title" id="dasar_pemikiran" style="margin-top: 20px;">dasar pemikiran kurikulum</h2>
    <div class="row">
      <div class="col">
        <p>Program Studi Teknologi Mesin diharapkan ikut mengembangkan kemampuan para tenaga terampil siap berkarya di bidang Teknologi Mesin, dengan kemampuan beradaptasi dan bekerja sebagai individu dan tim. Kebutuhan tenaga vokasi lulusan terknik mesin sangat membutuhkan kemampuan adaptasi yang tinggi, terutama dalam bidang otomasi dan komputer, sehingga para lulusan akan dibekali dengan kemampuan penguasaan teknologi canggih ini pada masa kuliah. Program studi teknologi mesin memiliki keselarasan yang saling mengisi dengan Program Studi Teknik Mekatronik, kesamaan ini lebih mengarah pada aktifitas yang menjadi warna Politeknik Mas Ami Internasional (Mas Ami Engineering Polytechnic), terutama pada penanganan mesin-mesin industri sebagai Student Training Centre. Sebagai suatu Program Studi yang dibangun oleh Industri dengan pengalaman dan pasar yang mendunia, serta didukung oleh tenaga pengajar yang berpengalaman dengan klasifikasi S2, serta sarana dan prasarana yang sangat memadai, tujuan ideal pendirian Program Studi Teknologi Mesin akan dapat menjawab kebutuhan tenaga kerja terampil di bidang Teknologi Mesin di Indonesia maupun di luar negeri. Kebutuhan lulusan Teknologi Mesin sebagai salahsatu Ilmu tertua dapat masuk dalam sektor pertambangan, perindustrian, transportasi bahkan dalam beberapa bidang lainnya.</p>
      </div>
  <div class="bulat1"></div>
  <div class="bulat2"></div>
  </div>
  <a href="<?= base_url();?>index.php/database/download/PDF-MSN" class="btn btn-primary" style="width: 13em; border-radius: 100px; box-shadow: 2px 2px 3px #c7c7c7; margin-bottom: 10px;">Download PDF</a>
</div>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>