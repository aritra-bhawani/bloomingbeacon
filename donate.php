
<?php include('inc/header.php'); ?>
	<title>blooming beacon - about</title>
	<link rel="stylesheet" href="css/nav_bar.css">
	<link rel="stylesheet" href="css/donate.css">
	<link rel="stylesheet" href="css/footer_general.css">
	<title>blooming beacon - donate</title>
</head>
<body>
	<?php include('inc/nav_bar.php'); ?>

	<div id="particles-js" style="height: 100vh; position: fixed; left:0; right: 0; z-index: 0;"></div>

	<section class="donate">
		<h1 class="don">Donate</h1>
		<h2 class="paytm">PayTM us on:</h2>
		<h3 class="paytm">+91 9521397700</h3>
		<h3 class="paytm" style="color:#1A5276">name : Ashutosh Bhardwaj</h3>
		<img class="paytm" src="https://image.ibb.co/mDymoS/Whats_App_Image_2018_03_07_at_11_46_30_AM.jpg">
	</section>

	<section class="sponsors">
		<h1 class="spon" >Our Sponsors</h1>
		<div class="left" style="float: left;">
			<img src="https://preview.ibb.co/geGaF7/1494497407_Zebronics.jpg" alt="1494497407_Zebronics" alt="zebronics" border="0"">
		</div>
		<div class="right" style=" float: left;">
			<img src="https://image.ibb.co/k22oDb/vanga.jpg" alt="vanga" border="0"">
		</div>
	</section>

	<script>
		window.sr = ScrollReveal();
		sr.reveal('.don', {
            duration: 2000,
            delay: 300,
            origin:'top',
            distance:'100px'
          });
		sr.reveal('.paytm', {
	            duration: 2000,
	            delay: 300,
	            origin:'bottom',
	            distance:'50px'
	          });

		sr.reveal('.spon', {
	            duration: 2000,
	            delay: 300,
	            origin:'bottom'
	          });
		sr.reveal('.left', {
	            duration: 2000,
	            delay: 300,
	            origin:'left',
	            distance:'50px'
	          });
		sr.reveal('.right', {
	            duration: 2000,
	            delay: 300,
	            origin:'right',
	            distance:'50px'
	          });
      </script>
    <?php include('inc/footer_general.php'); ?>
