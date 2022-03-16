<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/hubungi_kami.css">

    <title>KOntak</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <u><h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Hubungi Kami</h3></u>
      <p><p><p><p><p>
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.7344269193236!2d114.38218691438144!3d-8.229439184890861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15b2861402d69%3A0x276b55861cd8ed21!2sPoliteknik%20Masamy%20Internasional!5e0!3m2!1sid!2sid!4v1645255761882!5m2!1sid!2sid" width="100%" height="100%" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-md-6">
          <div class="col">
            <h5>Alamat</h5>
            <p>Jalan Ikan Paus No. 10 – 15, Kelurahan Kertosari,
              <br>Kecamatan Banyuwangi, Kabupaten Banyuwangi, <br>Jawa Timur  –  68418</p>
            <h5>Narahubung</h5>
            0818-11-74-64 (Prof. dr. H. Rio Sofwanhadi, PAK(K))
            <br>033-333-84593
            <br>0877-5972-6999
            <p>E-mail: masami.internasional@gmail.com</p>
          </div>
          <div class="col">
            <h5>Jam Kerja</h5>
            Senin-Jumat: 08.00 – 16.00 WIB
          </div>
        </div>
      </div>
      <!-- <div class="row" id="biaya">
        <div class="col-4">
          <h2 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Biaya Pendidikan</h2>
          <p>SPP (Tuition Fee) : <strong>Rp. 3.000.000,-/semester</strong> <br>Dana Pengembangan</p>
          <ul>
            <li><strong>Rp. 5.000.000,- (satu kali) </strong></li>
          </ul>
          <p>Cara Pembayaran Dana Pengembangan : <br>Dapat pula diangsur <strong>sampai semester ke-6</strong></p>
        </div>
        <div class="col">
          <h5 id="form_kontak">Anda membutuhkan informasi? Silakan gunakan formulir kontak di bawah ini:</h5>
          <h5 class="font-weight-bold">Kirim pesan/pertanyaan</h5>
          <p>Isian yang ditandai dengan * wajib diisi</p>
          <p class="font-weight-bold" style="margin-bottom: 0; margin-top: 10px;">Nama<span>*</span></p>
          <input type="text" name="Nama" placeholder="Nama Lengkap Pengirim"><br>
          <p class="font-weight-bold" style="margin-bottom: 0; margin-top: 10px;">Email<span>*</span></p>
          <input type="Email" name="Email" placeholder="Pastikan alamat email valid agar panitia PMB dapat merespon dengan baik."><br>
          <p class="font-weight-bold" style="margin-bottom: 0; margin-top: 10px;">Pesan<span>*</span></p>
          <textarea name="Pesan" placeholder="Masukkan Pesan"></textarea> 
        </div>
      </div> -->
    </div>
    <?php include('footer.php');?>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>