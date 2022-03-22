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
  <div class="container">
      <h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Visi dan Misi Program Studi D3 Teknologi Mesin</h3>
      <p>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <div class="col-md">
        <b>Visi Prodi D3 Teknologi Mesin</b><p><p><p>
        <p>
        <b>Misi Prodi D3 Teknologi Mesin</b>
        <ol>
        <!-- <li>Menyelenggarakan pengelolaan Prodi D3 Akuntansi yang kredibel, berdasarkan prinsip transparansi,
            akuntabilitas, berkeadilan, mandiri dan berintegritas serta menyelenggarakan kerjasama dengan pihak lain yang saling menguntungkan</li>
        <li>Menyelenggarakan Prodi D3 Akuntansi menjadi prodi dengan menjalankan suatu kurikulum yang visioner dan adaptif</li>
        <li>Menyelenggarakan Sumber Daya Manusia Prodi D3 Akuntansi yang berkualitas dan profesional</li>
        <li>Menyelenggarakan lulusan yang ahli dibidang akuntansi yang terampil dan siap kerja</li>
        <li>Menyelenggarakan sarana dan prasarana yang lengkap, berbasis teknologi informasi yang efisiens, efektif, 
            dan ramah lingkungan serta pengelolaan keuangan yang mandiri</li>
        <li>Menyelenggarakan riset dan pengabdian kepada masyarakat di bidang akuntansi yang dapat meningkatkan kesejahteraan masyarakat </li> -->
        </ol>
        <p>
        <h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Kurikulum Prodi D3 Teknologi Mesin 2021</h3>
      <p>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <img src="<?= base_url();?>assets/img/prodi/kurikulum-mesin-2021.jpg" style="width: 100%; border: 5px solid #4e03fc;">
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>