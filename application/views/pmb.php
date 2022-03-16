<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/pmb.css">

    <title>PMB POLMAIN</title>
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <u><h3 class="font-weight-bold title" id="tentang_polmain" style="margin-top: 20px;">Penerimaan Mahasiswa Baru Tahun Akademik 2022/2023</h3></u>
      <p>
      <div class="row">
        <div class="col">
          <div class="col-md card" style="box-shadow: 2px 2px 3px #c7c7c7; margin-bottom: 20px;">
            <h5 style="font-weight: bold;">Jadwal:</h5>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th scope="row">Tanggal Pendaftaran</th>
                  <td>:</td>
                  <td>1 Maret - 10 September 2022</td>
                </tr>
                <tr>
                  <th scope="row">Tes/Wawancara</th>
                  <td>:</td>
                  <td>13-15 September 2022</td>
                </tr>
                <tr>
                  <th scope="row">Pengumuman Tes</th>
                  <td>:</td>
                  <td>20 September 2022</td>
                </tr>
                <tr>
                  <th scope="row">Awal Perkuliahan</th>
                  <td>:</td>
                  <td>27 September 2022</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md card" style="box-shadow: 2px 2px 3px #c7c7c7; margin-bottom: 20px; background-color: #bbdafc">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th scope="row">Uang Pendaftaran</th>
                  <td>:</td>
                  <td>Rp. 300.000</td>
                </tr>
                <tr>
                  <th scope="row">SPP</th>
                  <td>:</td>
                  <td>Rp. 3.000.000 /semester</td>
                </tr>
                <tr>
                  <th scope="row">Dana Pengembangan</th>
                  <td>:</td>
                  <td>Rp. 3.000.000 (dibayar sekali selama kuliah)</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <img src="<?= base_url();?>assets/img/brosur_PMB_POLMAIN_2022.jpg" style="width: 100%">
          <!-- <a class="btn btn-primary" href="<?= base_url();?>index.php/database/download/BROSUR" role="button" style="width: 100%;box-shadow: 3px 3px 5px #878787;border-radius: 30px;margin-top: 30px;">download PDF</a> -->
        </div>
      </div>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px;">
        <div class="col-md">
            <h5 style="font-weight: bold;">Persyaratan:</h5>
            <ol>
              <li>Foto copy Ijazah SMA/K/sederajat dari semua bidang atau Surat Keterangan Tanda Lulus dari Sekolah</li>
              <li>Foto Copy SKHUN</li>
              <li>Foto Copy Rapor Kelas 12 semester genap (terakhir)</li>
              <li>Foto Copy KTP & KK</li>
              <li>Pas Foto ukuran 3x4 2 lembar</li>
              <li>Materai 10.000 1 lembar</li>
            </ol>
        </div>
        <div class="col-md">
            <h5 style="font-weight: bold;">Pendaftaran</h5>
            <p> langsung di Lokasi Kampus POLMAIN <br>Jalan Ikan Paus 10 – 15, Desa Kertosari, Kecamatan Banyuwangi, Kabupaten Banyuwangi, Jawa Timur – 68418</p>
            <strong>Telp/WA :</strong>
            <ul>
              <li>0818-11-74-64 (Prof. dr. H. Rio Sofwanhadi, PAK(K))</li>
              <li>0822-3010-2718 (Wona Martinanda M., S.E., M.Akun.)</li>
            </ul>
        </div>
      </div>
      <div class="row" style="border-top: 1px solid #c7c7c7; padding: 10px; margin-bottom: 10px;">
        <div class="col-md">
            <h5 style="font-weight: bold;">Link</h5>
            <strong>Brosur Pendaftaran:</strong>
            <a href="https://docs.google.com/uc?export=download&id=1pzuxrQMgqzqkm3TWvPX-GL7sk1qh9-FR" style="width: 100%;">Brosur Penerimaan Mahasiswa Baru 2022</a><br>
            <strong>Unduh form Pendaftaran:</strong>
            <a href="https://drive.google.com/drive/u/3/folders/1Bmy219AP-V2m4jMu6G3-mJJrqfHGhpz7" style="width: 100%;">Formulir Pendaftaran</a><br>
            <strong>Upload Bukti Pendaftaran:</strong>
            <a href="https://docs.google.com/forms/d/1mj1_Fbm_mDIPYWw1wDvgdU5OPnuoEcW5qyOpQyt2vqc/edit" style="width: 100%;">Bukti Pendaftaran</a>
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>