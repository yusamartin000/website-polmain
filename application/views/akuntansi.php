<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/prodi.css">
    <title>Prodi D3 Akuntansi</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <!-- jumbotron -->
    <div class="container">
      <div class="jumbotron bg-transparent">
        <div class="row">
          <div class="col-md">
            <h1 class="display-5 font-weight-bold">PROGRAM STUDI DIPLOMA 3 AKUNTANSI</h1>
            <a class="btn btn-primary btn-lg" href="<?= base_url();?>index.php/welcome/pmb" role="button">daftar sekarang</a>
          </div>
          <div class="col">
            <div class="imgcontainer">
              <img src="<?= base_url();?>assets/img/prodi/akuntansi3.jpg" style="width: 100%;">
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
        <p>Program Studi Akuntansi diharapkan menjadi salah satu Program Studi unggulan Diploma 3 yang diakui, baik di tingkat nasional maupun internasional. <br><br>Dalam menyelenggarakan pendidikannya, Program Studi Akuntansi Politeknik Mas Ami Internasional akan berupaya untuk menyesuaikan materi pendidikan dengan perkembangan Teknik Akuntansi yang mutakhir, baik secara nasional maupun internasional. Hal ini diwujudkan dengan melakukan kerjasama dengan berbagai industri atau institusi yang menerapkan teknikakuntansimodern, membentuk jaringan akademis dengan institusi sejenis baik Politeknik atau Universitas Negeri maupun swasta, baik didalam negeri maupun diluar negeri. <br><br>Disamping itu, era masa kini adalah era dimana penguasaan ilmu pengetahuan diukur dengan sertifikasi kompentensi dari berbagai lembaga sertifikasi maupun asosiasi profesi. Kurikulum Program Studi Akuntansi diarahkan agar para peserta didik dapat menyerap pengetahuan yang diperlukan untuk mengikuti program sertifikasi yang diselenggarakanlembaga sertifikasi bidang akuntansi pada tingkat diploma 3 (misalnya seperti lembaga sertifikasi internasional CAT; Certified Accounting Technician), atau sertifikasi yang diselenggarakan oleh badan sertifikasi lain, baik ditingkat nasional maupun internasional. <br><br>Rancangan kurikulum seperti ini memungkinkan para peserta didik ataupun alumnus Politeknik Mas Ami Internasional untuk meraih kompetensi dalam bidang Akuntansidengan sertifikasi yang diakui secara internasional. <br><br>Beberapa matakuliah, diisi dengan materi materi yang diperlukan oleh mahasiswa untuk menguasai pengetahuan yang diperlukan untuk proses sertifikasi. Pada tahap awal ini, sertifikasi keahlian yang disasar adalah sertifikasi dari CAT, Seperti diketahui, sertifikasi CAT diakui di banyak negara Asia Tenggara (Singapore, Malaysia atau Philipine) maupun negara dikawasan di luar kawasan Asia Tenggara, seperti misalnya Hongkong. Sertifikasi teknisi akuntansi internasional sudah menjadi kebutuhan di negara negara seperti yang disebutkan diatas, sebagai salah satu persyaratan yang diperlukan untuk melaksanakan transaksi bisnis secara internasional.</p>
      </div>
  <div class="bulat1"></div>
  <div class="bulat2"></div>
  </div>
  <a href="<?= base_url();?>index.php/database/download/PDF-AKA" class="btn btn-primary" style="width: 13em; border-radius: 100px; box-shadow: 2px 2px 3px #c7c7c7; margin-bottom: 10px;">Download PDF</a>
</div>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>