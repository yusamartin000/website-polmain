<!doctype html>
<html lang="en">
  <head>
    <!-- load header -->
    <?php $this->load->view('header');?>
    <title>UKM & Prestasi</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/sdm.css">
  </head>
  <body>
    <!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505;"><?php $this->load->view('navbar');?></div>
    <div class="container">
      <h1 class="font-weight-bold">Sumber Daya Manusia</h1>
      <h3 class="font-weight-bold">Pimpinan</h3>
      <div class="row">
        <div class="col-6">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Direktur') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
        <div class="col-6">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Penasehat Direktur') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Wadir 1 bidang Akademik') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
        <div class="col-6">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Wadir 2 bidang Administrasi Keuangan & Sumber Daya Alam') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
      </div>
    </div>
    <div class="container">
      <h3 class="font-weight-bold">Kepala Prodi</h3>
      <div class="row">
        <div class="col-4">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Kaprodi Teknologi Komputer') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
        <div class="col-4">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Kaprodi Akuntansi') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
        <div class="col-4">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Kaprodi Teknologi Mesin') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
      </div>
    </div>
    <div class="container">
      <h3 class="font-weight-bold">Dosen</h3>
      <div class="row">
        <div class="col-4">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Dosen' && $s->minat_bidang == 'Teknologi Komputer') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
        <div class="col-4">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Dosen' && $s->minat_bidang == 'Akuntansi') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
        <div class="col-4">
          <?php
          foreach($sdm as $s){
          if ($s->jabatan == 'Dosen' && $s->minat_bidang == 'Teknologi Mesin') {
          if ($s->foto == NULL) { ?>
          <img class="foto" src="<?= base_url();?>assets/img/default_profile.jpg">
          <?php } else { ?>
          <img class="foto" src="<?= base_url();?>assets/img/s/<?= $s->foto ?>">
          <?php } ?>
          <h4 class="nama"><?= $s->nama ?></h4>
          <p class="jabatan"><?= $s->jabatan ?></p>
          <?php } } ?>
        </div>
      </div>
    </div>
<?php include("footer.php");?>
  <!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
  </body>
</html>