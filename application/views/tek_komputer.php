<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/prodi.css">
    <title>Prodi D3 Teknologi Komputer</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <!-- jumbotron -->
    <div class="container">
      <div class="jumbotron bg-transparent">
        <div class="row">
          <div class="col-md">
            <h1 class="display-5 font-weight-bold">PROGRAM STUDI DIPLOMA 3 TEKNOLOGI KOMPUTER</h1>
            <a class="btn btn-primary btn-lg" href="<?= base_url();?>index.php/welcome/pmb" role="button">daftar sekarang</a>
          </div>
          <div class="col">
            <div class="imgcontainer">
              <img src="<?= base_url();?>assets/img/prodi/komputer3.jpg">
            </div>
          </div>
          </div>
            <div class="ornament">
            <div class="kotak"></div>
            <div class="bulat"></div>
          </div>
        </div>
  </div>
    <!-- jumbotron -->
  <div class="container prodi">
    <h2 class="font-weight-bold title" id="dasar_pemikiran" style="margin-top: 20px;">dasar pemikiran kurikulum</h2>
    <div class="row">
      <p>Program Studi Teknologi Komputer yang diusulkan diharapkan menjadi salah satu Program Studi unggulan Diploma 3 Teknik Teknologi Komputer yang diakui, baik di tingkat nasional maupun internasional. <br>Dalam menyelenggarakan pendidikannya, Program Studi Teknologi Komputer Politeknik Mas Ami Internasional akan berupaya untuk menyesuaikan materi pendidikan dengan perkembangan Teknologi Komputer yang mutakhir, baik secara nasional maupun internasional. Hal ini diwujudkan dengan melakukan kerjasama dengan berbagai industri yang bergerak dalam bidang Teknologi Komputer ataupun industri lain yang terkait, membentuk jaringan akademis dengan institusi sejenis baik Politeknik atau Universitas Negeri maupun swasta, baik didalam maupun diluar negeri. <br>Disamping itu, era masa kini adalah era dimana penguasaan ilmu pengetahuan diukur dengan sertifikasi kompentensi dari berbagai lembaga sertifikasi maupun asosiasi profesi. Kurikulum Program Studi Teknologi Komputer diarahkan agar para peserta didik dapat menyerap pengetahuan yang diperlukan untuk mengikuti program sertifikasi yang diselenggarakan baik oleh Vendors (perusahaan perusahaan pemroduksi alat atau perangkat, seperi CISCO, Microsoft, Oracle), atau sertifikasi yang diselenggarakan oleh badan independent, yang tidak terkait dengan vendor manapun seperti ComTIA dan lain sebagainya. <br>Rancangan kurikulum seperti ini memungkinkan para peserta didik ataupun alumnus Politeknik Mas Ami Internasional untuk meraih kompetensi dalam bidang Teknologi Komputer dengan sertifikasi yang diakui secara internasional. <br>Beberapa matakuliah, diisi dengan materi materi yang diperlukan oleh mahasiswa untuk menguasai pengetahuan yang diperlukan untuk proses sertifikasi. Pada tahap awal ini, sertifikasi keahlian yang disasar adalah sertifikasi dari CISCO, produsen alat yang digunakan untuk membentuk jaringan komputer seperti switch, router dan lain sebagainya. Seperti diketahui, jaringan computer merupakan kebutuhan yang tidak CISCO menguasai sekitar 50 % dari pangsa pasar alat alat yang digunakan pada jaringan komputer diseluruh dunia. Seperti kita ketahui, teknologi jaringan komputer merupakan merupakan teknologi yang dibutuhkan oleh setiap institusi modern, baik dalam lingkungan bisnis, industry ataupun pemerintahan.</p>
  <div class="bulat1"></div>
  <div class="bulat2"></div>
  <a href="<?= base_url();?>index.php/database/download/PDF-KOM" class="btn btn-primary" style="width: 13em; border-radius: 100px; box-shadow: 2px 2px 3px #c7c7c7; margin-bottom: 10px;">Download PDF</a>
  </div>
</div>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>