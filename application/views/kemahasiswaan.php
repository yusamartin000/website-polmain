<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <title>Kemahasiswaan</title>
  </head>
  <body>
      <!-- navbar -->
      <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505; margin-bottom: 20px;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <h2 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Badan Eksekutif Mahasiswa (BEM)</h2>
      <h5>VISI BEM POLMAIN</h5>
      <ul>
        <li>Menjadikan BEM POLMAIN sebagai teladan yang berkarakter dan inovatif untuk POLMAIN yang lebih berkompoten</li>
      </ul>
      <h5>MISI BEM POLMAIN</h5>
      <ul>
        <li>Membangun internal rasa kekeluargaan dan profesianal</li>
        <li>Mewadahi potensi, bakat dan minat mahasiswa untuk polmain yang lebih berinovasi</li>
        <li>Menjalankan program kerja yang berlandaskan Tri Dharma perguruaan tinggi</li>
        <li>Menciptakan relasi yang harmonis dan berkesinambungan bagi mahasiswa</li>
        <li>Menjadikan BEM sebagai mediator antar mahasiswa politeknik dan mahasiswa dalam berkomunasi dan berdiskusi</li>
      </ul>
      <h5>Struktur Organisasi BEM</h5>
      <di class="row">
        <div class="col" style="border: 1px solid #c7c7c7; border-radius: 10px; margin: 5px;">
          <img src="<?= base_url();?>assets/img/bem/struktur_org_BEM.jpg" style="width: 100%;">
          <h5>proker bidang penalaran dan keilmuan</h5>
          <ol>
            <li><strong>Jangka pangjang</strong></li>
              <ul>
                <li>Lomba essai/KTI tingkat SMA sederajat</li>
                <li>UKM Jurnalistik</li>
              </ul>
              <li><strong>jangka pendek</strong></li>
              <ul>
                <li>Pengumpulan sampah masker</li>
                <li>Info lomba</li>
                <li>Kajian keilmuan</li>
                <li>Seminar/Webinar nasional</li>
                <li>Karya inovatif dan produktif</li>
              </ul>
          </ol>
        </div>
        <div class="col-md-6">
        <?php foreach($bem as $b){ ?>
            <div class="row" style="border: 1px solid #c7c7c7; border-radius: 10px; margin-bottom: 5px;">
              <img src="https://docs.google.com/uc?export=download&id=<?= $b->link_foto ?>" style="width: 100px;height: 100px;object-fit: cover;border-radius: 5px;margin: 5px;">
              <div class="col">
                <strong><?= $b->jabatan ?></strong>
                <p><?= $b->nama ?></p>
                <p><?= $b->tugas ?></p>
              </div>
            </div>
        <?php } ?>
        </div>
      </div>
    </div>
    <div class="container" style="border: 1px solid #c7c7c7; border-radius: 10px; margin-bottom: 5px;">
      <div class="row">
        <div class="col">
          <h2>bidang kepemimpinan</h2>
          <strong>Ketua bidang : Heri Kurniawan</strong><br>
          <strong>Sekertaris bidang : Rizky M</strong><br>
          <strong>Program Kerja :</strong>
          <ol>
            <li><strong>Jangka Pangjang :</strong> Seminar Kepemimpinan</li><li><strong>Jangka Pendek :</strong> Jum'at amal</li>
          </ol>
        </div>
        <div class="col">
          <h5>proker bidang kepemimpinan</h5>
          <ol>
            <li><strong>Jangka panjang :</strong></li>
              <ul>
                <li>Diklat kepemimpinan</li>
                <li>Peringatan hari nasional</li>
              </ul>
            <li><strong>Jangka pendek</strong></li>
            <ul>
              <li>Jum'at amal</li>
              <li>Melakukan rapat evaluasi</li>
              <li>Melakukan kolaborasi dengan bidang lain</li>
              <li>Sosialisasi kedisiplinan</li>
              <li>POLMAIN berbagi (internal)</li>
            </ul>
          </ol>
        </div>
      </div>
    </div>
    <div class="container" style="border: 1px solid #c7c7c7; border-radius: 10px; margin-bottom: 5px;">
      <div class="row">
        <div class="col">
          <h2>bidang bakat & minat</h2>
          <strong>Ketua bidang : M Ihsan</strong><br>
          <strong>Sekertaris bidang : Asri W</strong><br>
          <strong>Program Kerja :</strong>
          <ol>
            <li><strong>Jangka Pangjang :</strong> Classmeet</li><li><strong>Jangka Pendek :</strong> Latihan futsal, Latihan badminton</li>
          </ol>
        </div>
        <div class="col">
          <h5>proker bidang bakat & minat</h5>
          <ol>
            <li><strong>Jangka panjang :</strong></li>
              <ul>
                <li>Lomba E-Sport (Mobile Legends Bang Bang)</li>
                <li>UKM tari</li>
              </ul>
            <li><strong>Jangka pendek</strong></li>
            <ul>
              <li>Jum'at amal</li>
              <li>Latihan badminton</li>
              <li>Sparing futsal</li>
              <li>Latihan musik</li>
              <li>Student day (internal)</li>
              <li>Cooking day (internal)</li>
            </ul>
          </ol>
        </div>
      </div>
    </div>
  <?php include('footer.php');?>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>