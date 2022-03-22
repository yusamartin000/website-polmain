<style type="text/css">
  .waktu {
    width: 100%; 
    text-align: right; 
    margin: 0; 
    padding: 10px; 
    padding-bottom: 0; 
    color: #fff;
  }
  @media (max-width: 770px){
    .waktu {
      font-size: 12px;
    }
  }
  .goog-logo-link, #goog-gt-tt, .goog-te-balloon-frame, .goog-te-banner-frame.skiptranslate {
    display: none !important;
  }
  .goog-te-gadget {
    color: transparent !important;
  } 
  .goog-text-highlight {
    background: none !important;
    box-shadow: none;
  }
  #google_translate_element select {
    margin: 0;
    margin-top: 10px;
    padding: 5px 15px;
    border: none;
    border-radius: 100px;
    outline: none;
    box-shadow: inset 1px 1px 3px #878787;
  }
  body {
    top: 0px !important; 
    }
</style>
<!-- navbar -->
    <div class="container" style="border: none; display: flex;">
      <p class="waktu"><?php date_default_timezone_set('Asia/Jakarta'); echo date('l, d-m-Y H:i:s'); ?></p>
      <div id="google_translate_element"></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container" style="border: none; margin-top: 0">
        <div style="height: 60px; background-color: #fff; border-radius: 100%; margin-right: 10px;"><img src="<?= base_url();?>assets/img/icon/logokampus.png" style="height: 100%;"></div>
        <a class="navbar-brand font-weight-bold" href="<?= base_url();?>">POLMAIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url();?>">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Profil</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/profil#tentang_polmain">Tentang POLMAIN</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/profil#visi_misi">Visi Misi</a>
                <a class="dropdown-item" href="#">Struktur Organisasi</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/kerjasama">Kerjasama</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/profil#fasilitas">Fasilitas</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/database/download/RESTRA">Rencana Strategis</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Program Studi</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url();?>index.php/prodi/akuntansi">D3 Akuntansi</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/prodi/tek_mesin">D3 Teknologi Mesin</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/prodi/tek_komputer">D3 Teknologi Komputer</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Akademik</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url();?>index.php/database/download/KAL-AKA">Kalender Akademik</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/database/download/BP-PKL">Praktik Kerja Lapangan</a>
                <a class="dropdown-item" href="#">Tugas Akhir</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/beasiswa">Beasiswa</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/kemahasiswaan">Kemahasiswaan</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/ukm">UKM & Prestasi</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Pendaftaran</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/pmb">Penerimaan Mahasiswa Baru</a>
              </div>
            </li>
            <a class="nav-link" href="<?= base_url();?>index.php/welcome/p3m" role="button"aria-haspopup="true" aria-expanded="false" style="color: #fff;">Penelitian & Pengabdian</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Layanan</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="<?= base_url();?>index.php/database/download/KM-SPMI" class="dropdown-item">Kebijakan Mutu SPMI</a>
                <a href="<?= base_url();?>index.php/database/download/MM-SPMI" class="dropdown-item">Manual Mutu SPMI</a>
                <a class="dropdown-item" href="<?= base_url();?>index.php/welcome/sdm">Sumber Daya Manusia</a>
              </div>
            </li>
            <a class="nav-link" href="<?= base_url();?>index.php/welcome/hubungi_kami" role="button"aria-haspopup="true" aria-expanded="false" style="color: #fff;">Kontak</a>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar -->
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages:'en,id'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>