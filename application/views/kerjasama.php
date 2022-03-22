<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/pmb.css">

    <title>Kerjasama POLMAIN</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Kerjasama POLMAIN</h3>
      <p>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <div class="col-md">
        Kerjasama Polmain ditujukan untuk membentuk jalinan kerjasama antara Polmain dengan stakeholder
        (sesame institusi pendidikan, institusi pemerintahan, maupun perusahaan),
        sekaligus melakukan berbagai upaya untuk menjaga kesinambungan kerjasama yang telah terbentuk.
        Kerjasama dengan stakeholder dilakukan guna menggali usaha yang dapat memberikan jaminan kelangsungan
        financial resources. Prospek Polmain untuk menjalin kerjasama dengan stakeholder sangat tinggi,
        mengingat Polmain memiliki keunggulan-keunggulan yang sejalan dengan misi kerjasama.
        <p>
        <p>
        <b>Daftar Kerjasama Polmain:</b>
        <ol>
        <li>Universitas Indonesia, Fakultas Teknik Mesin, Departemen Teknik Mesin</li>
        <li>Universitas Trilogi</li>
        <li>PT. Banyuwangi Cannery Indonesia</li>
        <li>CV. Pasific Harvest 1</li>
        <li>CV. Pasific Harvest 2</li>
        <li>CV. Pasific Harvest 3</li>
        <li>CV. Pasific Harvest 4</li>
        <li>B-One Coorp (PT. Satu Visi Indocreative)</li>
        <li>Universitas  Jember</li>
        <li>Pemerintah Kabupaten Banyuwangi</li>
        </ol>
        <p>
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
    
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>