<!DOCTYPE html>
<html>
<head>
	<!-- load header -->
    <?php $this->load->view('header');?>
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/download.css">

	<title>Download File</title>
</head>
<body>
	<!-- navbar -->
    <div style="width: 100%; background-image: linear-gradient(to top, rgba(0, 123, 255, 1), rgba(0, 59, 122, 1)); box-shadow: 3px 0 5px #050505; margin-bottom: 20px;"><?php $this->load->view('navbar');?></div>
	<div class="container">
		<div class="col">
			<h5><img src="<?= base_url();?>assets/img/icon/download.png" width="20px">Download File PDF</h5>
			<div class="row">
				<div class="col-md">
					<iframe src="https://drive.google.com/file/d/<?= $link->link_pdf ?>/preview" width="100%" height="100%" allow="autoplay"></iframe>
				</div>
				<div class="col-md">
					<h3><?= $link->label ?></h3>
					<a href="https://docs.google.com/uc?export=download&id=<?= $link->link_pdf ?>" class="btn btn-primary" style="width: 100%; border-radius: 100px; box-shadow: 2px 2px 3px #c7c7c7; margin-bottom: 10px;">Download PDF</a>
					<p>atau <a href="https://drive.google.com/file/d/<?= $link->link_pdf ?>/view?usp=sharing">klik link</a> ini jika tombol download tidak berfungsi.</p>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>
	<!-- load bootstrap js -->
  <?php $this->load->view('bootjs');?>
</body>
</html>