<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/pmb.css">

    <title>P3M POLMAIN</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Penelitian dan Pengabdian kepada Masyarakat (P3M) POLMAIN</h3>
      <p>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <div class="col-md"><p>
        <b>Visi:</b>
        <br>
        “Menjadi pusat penelitian dan pengabdian kepada masyarakat yang
        berkomitmen tinggi mengembangkan ilmu pengetahuan dan teknologi
        dalam bidang Teknologi Komputer, Teknologi Mesin dan Akuntansi bagi kepentingan masyarakat”.<p>
        <b>Misi:</b><br>
        <ol>
        <li>Mengkoordinasikan, merencanakan, melaksanakan, memantau, menilai, serta mendokumentasikan pelaksanaan kegiatan penelitian dan pengabdian kepada masyarakat.</li>
        <li>Meningkatkan daya saing dosen dalam melakukan penelitian dan pengabdian kepada masyarakat</li>
        <li>Meningkatkan kerjasama penelitian dan pengabdian kepada masyarakat dengan berbagai institusi pemerintah maupun swasta</li>
        <li>Meningkatkan pemanfaatan hasil penelitian dan pengabdian kepada masyarakat untuk pengembangan pemyelenggaraan pendidikan</li>
        <li>Meningkatkan keterlibatan mahasiswa Politeknik Masamy Internasional dalam kegiatan penelitian dan pengabdian kepada masyarakat</li>
        </ol>
        <p>
        <b>Tujuan dan Sasaran P3M Polmain:</b><br>
        <ul style="list-style-type:square;">
        <li>Menghasilkan kuantitas dan kualitas penelitian dan pengabdian kepada masyarakat serta publikasi ilmiahnya.</li>
        <li>Menghasilkan kapasitas dan kapabilitas dosen dalam melakukan penelitian dan pengabdian kepada masyarakat.</li>
        <li>Menghasilkan kerjasama P3M dengan berbagai pihak untuk menunjang kelancaran penyelenggaraan penelitian dan pengabdian kepada masyarakat.</li>
        <li>Menghasilkan sistem pembelajaran yang berorientasi pada penelitian dan pengabdian kepada masyarakat.</li>
        <li>Meningkatkan jumlah mahasiswa yang terlibat dalam kegiatan penelitian dan pengabdian kepada masyarakat</li>
        </ol>
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
    
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>