<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/home.css">

    <title>Profil POLMAIN</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <!-- jumbotron -->
    <div class="container">
      <div class="jumbotron bg-transparent">
        <div class="row">
          <div class="col-md">
            <h1 class="display-5 font-weight-bold">POLITEKNIK MASAMY INTERNASIONAL</h1>
            <a class="btn btn-primary btn-lg" href="<?= base_url();?>index.php/welcome/pmb" role="button">Daftar Sekarang</a>
          </div>
          <div class="col">
            <div class="imgcontainer">
              <img src="<?= base_url();?>assets/img/gedungkampus.jpg" width="120%">
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
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Tentang POLMAIN</h2>
          <p>POLMAIN atau Politeknik Mas Ami Internasional merupakan politeknik yang didirikan oleh Perkumpulan Mas Ami Academy International yang dipimpin oleh Mr. Aminoto dari Pacific Harvest (CV) Banyuwangi yang sangat memperhatikan kebutuhan SDM yang berkualitas khususnya di wilayah Banyuwangi, Jawa Timur dalam menyongsong era industri 4.0 mendatang. <br><br>Atas dasar kepedulian itulah, POLMAIN berdedikasi membangun SDM Industri Indonesia yang kompeten di era industri 4.0. Kegiatan belajar-mengajar Polmain dimulai sejak tahun ajaran 2018 – 2019 atas dasar <strong>Keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi Republik Indonesia Nomor 731/KPT/I/2018</strong> tentang pendirian Politeknik MASAMY INTERNASIONAL di Kabupaten Banyuwangi, Provinsi Jawa Timur yang diselenggarakan oleh Perkumpulan Mas Ami Internasional.</p>
        </div>
        <div class="col-md-4" style="margin-top: 70px;"><img src="<?= base_url();?>assets/img/img1-profil.png" style="width: 90%; margin-left: 5%;"></div>
      </div>
      <div class="row">
        <div class="col">
          <h2 class="font-weight-bold title" id="visi_misi" style="margin-top: 20px;">Visi & Misi POLMAIN</h2>
          <h3>Visi</h3>
          <p>Menjadi Politeknik unggul menghasilkan lulusan yang siap kerja pada
              berbagai industri berbasis Teknologi Mesin, Teknoligi Komputer dan
              Akuntansi yang bertaraf Internasional, baik di dalam negeri maupun di luar
              negeri</p>
          <h3>Misi</h3>
          <ol style="text-align: justify;">
            <li>Menyelenggarakan pengelolaan Politeknik yang kredibel, berdasarkan prinsip transparansi, akuntabilitas, berkeadilan, mandiri dan berintegritas serta menyelenggarakan kerjasama dengan pihak lain yang saling menguntungkan</li>
            <li>Menyelenggarakan Polmain menjadi Perguruan Tinggi Swasta dengan menjalankan kurikulum yang visioner dan adaptif </li>
            <li>Menyelenggarakan Sumber Daya Manusia Polmain yang berkualitas dan profesional</li>
            <li>Menyelenggarakan lulusan yang ahli dibidangnya, terampil dan siap kerja</li>
            <li>Menyediakan sarana dan prasarana yang lengkap, berbasis teknologi Informasi yang efisien, efektif dan ramah lingkungan serta pengelolaan keuangan yang mandiri</li>
            <li>Menyelenggarakan penelitian dan pengabdian kepada masyarakat yang dapat meningkatkan kesejahteraan masyarakat.</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img src="<?= base_url();?>assets/img/img2-profil.png" style="margin-top: 70px; width: 90%; margin-left: 5%;">
        </div>
        <div class="col-md-8">
          <h2 class="font-weight-bold title" style="margin-top: 20px;">Kualitas</h2>
          <p>POLMAIN didukung oleh sumberdaya manusia yang berpengalaman dan berkualitas, antara lain:</p>
          <ol>
            <li>Purnawirawan Guru Besar serta staf ahli alumni UI</li>
            <li>Tokoh Penting dari Banyuwangi, Nasional dan Internasional</li>
          </ol>
          <p>Juga sejak pendiriannya telah memiliki gedung yang dibangun baru dan siap pakai.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <h2 class="font-weight-bold title" style="margin-top: 20px;">Keunggulan POLMAIN</h2>
          <ol>
            <li>Civitas akademika berada di kampus mulai dari pukul  07:30 – 15:30, Senin – Jum’at</li>
            <li>Tenaga pengajar profesional  yang tetap, profesional, dan berada dikampus pada jam – jam akademik</li>
            <li>Mahasiswa akan mendapatkan makan siang gratis dari kampus</li>
            <li>Sumber belajar :  buku/ perpustakaan dan <i>open courseware</i> / internet</li>
          </ol>
          <h2 class="font-weight-bold title" style="margin-top: 20px;">Fasilitas</h2>
          <ol>
            <li>Kerjasama dengan Industri</li>
            <li>Akan dilengkapi dengan Lini Produksi</li>
            <li>Dilengkapi dengan Surat Keterangan Pendamping Ijazah (SKPI) dan sertifikat kompetensi nasional (BNSP) sesuai dengan peraturan perundang-undangan yang berlaku.</li>
            <li>Laboratorium Perawatan dan Perbaikan Komputer</li>
            <li>Laboratorium Jaringan</li>
            <li>Laboratorium Jaringan</li>
            <li>Laboratorium Akuntansi Digital</li>
            <li>Laboratorium Unit Usaha dan Akuntansi Manual</li>
            <li>Perpustakaan</li>
            <li>Lapangan Bulutangkis</li>
            <li>Tempat ibadah</li>
            <li>Lahan parkir luas</li>
          </ol>
          <!-- <h2 class="font-weight-bold title" style="margin-top: 20px;">biaya pendidikan</h2>
          <ul>
            <li>SPP (Tuition Fee) : Rp. 3.000.000,-/semester</li>
            <li>Dana Pengembangan Rp. 3.000.000,- (dibayar sekali selama kuliah)</li>
          </ul>
          <p><strong>Cara Pembayaran Dana Pengembangan : </strong><br>Dapat pula diangsur sampai semester ke-6</p> -->
          <h2 class="font-weight-bold title">Penempatan Kerja Lulusan</h2>
          <ol>
            <li>Lulusan terbaik dari setiap Program Studi akan <strong>langsung diterima bekerja di industri milik Bapak Aminoto (Perkumpulan Mas Amy dan Rekanan)</strong></li>
            <li>Lulusan terbaik lainnya diupayakan bekerja di industri / perusahaan rekanan baik di dalam negeri maupun di luar negeri</li><br>
          </ol>
        </div>
        <div class="col-md-4">
          <img src="<?= base_url();?>assets/img/img3-profil.png" style="margin-top: 70px; width: 90%; margin-left: 5%;">
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
    <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>