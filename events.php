<?php
	require('config/config.php');
	require('config/connect.php');

	// Create Query
	$query = 'SELECT * FROM events';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$events = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($events);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<title>blooming beacon - events</title>
	<link rel="stylesheet" href="css/nav_bar.css">
	<link rel="stylesheet" href="css/events.css">
	<link rel="stylesheet" href="css/footer_general.css">
	<link rel="stylesheet" href="css/count_down.css">
</head>

<body>


	<?php include('inc/nav_bar.php'); ?>
  
  <section id="particles-js" style="height: 100vh; position: fixed; left:0; right: 0; z-index: 0;"></section>


  <section class="events_main" style="background: transparent; position: relative;">
	<h1 class="eve">EVENTS</h1>
	
	<!--
	<h1 class="eve">upcoming event</h1>

	<div class="street_store" style="overflow:auto;">
		<h2 class="ss_heading">Street Store</h2>
		<div class='countdown'></div>
		<div class="left">
			<img style="" src="https://preview.ibb.co/e4Vfxx/the_street_store_logo_inverted.png">
		</div>	
		<div class="right">
			<h3>
				We are back with <span>3rd chapter of Street Store</span>. <br>
				Event is on <span>1st April, 2018</span>
			</h3>
			<a class="ss_but" href="street_store.php" style="text-decoration: none;">check it out!</a>
		</div>
	</div>
	
	    <h1 class="eve">previous events</h1>
	   --> 
	    
	 	<?php foreach (array_reverse($events) as $key => $event) : ?>
	 		<div class="events_main_content">
	 			<h2 class="eve_con"><?php echo $event['name']; ?></h2>
	 			<img class="eve_img" src="img/events_img/<?php echo $event['pic']; ?>">
	 			<p class="eve_con"><?php echo $event['about']; ?></p>
	 			<br>
			</div>
		<?php endforeach; ?>	
	</section>
	<script  src="js/count_down.js"></script>
	<script >
      window.sr = ScrollReveal();
          sr.reveal('.eve', {
            duration: 2000,
            delay: 200,
            origin:'top',
            distance:'100px'
          });
          sr.reveal('.ss_heading', {
            duration: 2000,
            delay: 200,
            origin:'bottom',
            distance:'100px'
          });
          sr.reveal('.countdown', {
            duration: 2000,
            delay: 1500,
            origin:'bottom',
            distance:'100px'
          });
          sr.reveal('.left', {
            duration: 1500,
            delay: 0,
            origin:'left',
            distance:'100px'
          });
          sr.reveal('.right', {
            duration: 1500,
            delay: 0,
            origin:'right',
            distance:'100px'
          });
          sr.reveal('.eve_con', {
            duration: 2000,
            origin:'bottom'
          });
          sr.reveal('.eve_img', {
            duration: 2000,
            origin:'top'
          });

    </script>      
  	<?php include('inc/footer_general.php'); ?>