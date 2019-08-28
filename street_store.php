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
  <title>blooming beacon - events</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="css/nav_bar.css">
  <link rel="stylesheet" href="css/events.css">
  <link rel="stylesheet" href="css/footer_general.css">
  <link rel="stylesheet" href="css/street_store.css">

  <link rel="stylesheet" href="css/count_down.css">

</head>

<body>


	<?php include('inc/nav_bar.php'); ?>
  
  <section id="particles-js" style="height: 100vh; position: fixed; left:0; right: 0; z-index: 0;"></section>


  <section class="events_main" style="background: transparent; position: relative;">
	<h1 class="eve e">STREET STORE</h1>
	<h3 class="e" style="font-family: Poppins; font-size: 1.75rem;">CHAPTER 4</h3>

	<!--<div class='countdown'></div>-->

		<div class="events_main_content" style="margin-bottom: 9vh;">
			<h3><span>"</span>This year we are organizing<span> WORLD'S BIGGEST STREET STORE on 6th April, 2019</span> which will be recognized by <span>Guinness Book of World Record</span> and <span>Limca Book of Records"</span></h3>
			<br><br><br><br>
			<h3>We have the following agenda:</h3>
			<br>
			<p>
				<span>“Dignified shopping experience to the needy”</span> where we will be giving free Clothes, Toys, Bags, Mattresses, Women accessories and Other necessary things to impact more than 15,000 slum people. 
			</p>
			<br>
			<p>
				 Launch of the campaign <span>“Give pads-Gift Hygiene”</span> on the same day to provide 2000 women/girls free sanitary pads for a year.
			</p>
		</div>
		<!--<section class="fund">-->
		<!--	<div class="iframe1">-->
		<!--		<iframe style="height: 100%; width: 100%;" frameborder="0" src="https://www.fueladream.com/home/bloomingbeacon"></iframe>-->
		<!--	</div>-->
		<!--	<div class = "fund_content">-->
		<!--		<h5 style="position: ;">We have raised INR 5 lakhs in 20 days</h5><br>-->
		<!--		<a href="http://bit.ly/2Cqymna" style="text-decoration: none;" class="ss_but">click here to view</a>-->
		<!--	</div>-->
		<!--</section>-->
		<section class="ak">
			<div class="iframe2" >
				<iframe class="fb_iframe pc" style="background-color: white;" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fakshaykumarofficial%2Fposts%2F10155810739828283&width=500&show_text=true&height=363&appId" width="500" height="363" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

				<iframe class="fb_iframe mobile" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fakshaykumarofficial%2Fposts%2F10155810739828283&width=750&show_text=true&height=486&appId" width="750" height="486" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			<div class="ak_content">
				<p>Our compaign is supported by the famous bollywood actor <span>Mr. Akshay Kumar</span> for social media promotion.<br>It has also been featured in popular newspapers like <span>The Times of India, Hindustan Times, Matrubhumi, Malyalam and many others.</span><br><span>"We are really thankful for your help and support!"</span></p>
			</div>
			
		</section>
		<section class="blogs">
			<h3>some of the popular blogs covering our story are:</h3>
			<div class="icons">
				<div class="blog_gr1">
					<a href="https://www.outlookindia.com/newsscroll/students-take-to-crowdfunding-to-provide-sanitary-napkins/1270942"><img src="https://image.ibb.co/fNHYXx/logo.jpg"></a>
					<a href="https://www.indiatoday.in/pti-feed/story/students-take-to-crowd-funding-to-provide-sanitary-napkins-1189455-2018-03-14"><img src="https://image.ibb.co/hkKVCx/logo.png"></a>
					<a href="http://swachhindia.ndtv.com/gift-pads-gift-hygiene-chennai-students-initiate-campaign-provide-year-supply-sanitary-napkins-underprivileged-girls-18218/"><img src="https://image.ibb.co/bMZaec/ndtvlogo23march.png"></a>
					<a href="http://www.india.com/news/agencies/students-take-to-crowd-funding-to-provide-sanitary-napkins-2943561/"><img src="https://image.ibb.co/fprkfH/india_com_logo.png"></a>
					<a href="http://www.zeebiz.com/india/news-to-provide-sanitary-napkins-these-students-of-srm-institute-of-science-and-technology-take-to-crowd-funding-39163"><img src="https://image.ibb.co/cT9Qec/Zee_Business.png"></a>
				</div>
				<div class="blog_gr2">
					<a href="http://kalvimalar.dinamalar.com/news-details.asp?id=27695&cat=1"><img style="" src="https://image.ibb.co/kYmRLH/KALVIMALAR.jpg"></a>
					<a href="http://www.onmalayalam.com/stories/chennai-srm-university-students-blooming-beacon-social-welfare-association-start-a-campaign-give-pads-gift-hygiene"><img style="" src="https://image.ibb.co/nwVWnx/logo_1.png"></a>
					<a style="" href="http://www.business-standard.com/article/pti-stories/students-take-to-crowd-funding-to-provide-sanitary-napkins-118031400820_1.html"><img style="" src="https://image.ibb.co/crGSsx/business_standard_logo.png"></a>
					<a href="https://www.google.co.in/amp/s/m.timesofindia.com/city/chennai/meet-pad-students-who-raise-funds-to-make-city-slums-hygiene-happy/amp_articleshow/63131267.cms"><img style="" src="https://preview.ibb.co/k6cVEc/TOI_Logo_in_Red_Bakcground.jpg"></a>
				</div>	
			</div>
		</section>
		<section class="direction">
			<div class="iframe3">
				<iframe class="iframe_maps pc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.562840858268!2d80.15520061421107!3d12.935794819164409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525ef6d2465a65%3A0xb9663556a5e33ce3!2sCommunity+Hall%2C+Thirumalai+Nagar%2C+Kanchipuram+Dist%2C+Sembakkam+Municipality!5e0!3m2!1sen!2sin!4v1521136264183" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

				<iframe class="iframe_maps mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.562840858268!2d80.15520061421107!3d12.935794819164409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525ef6d2465a65%3A0xb9663556a5e33ce3!2sCommunity+Hall%2C+Thirumalai+Nagar%2C+Kanchipuram+Dist%2C+Sembakkam+Municipality!5e0!3m2!1sen!2sin!4v1521146494898" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class = "direction_content">
				<h3>VENUE OF STREET STORE</h3><br>
				<p>
					Sembakkam Municipal Community Hall, Kamarajapuram, Chennai-600073.<br>
					<span>time : 9:30AM to 5:00 PM <br> date : 6th April 2019</span><br>
					<a href="tel:+919791492688" style="text-decoration:none; color: #0E6251;">+91 9176100424</a> /
					<a href="tel:+91 8428273091" style="text-decoration:none; color: #0E6251;">+91 95661 86484</a>
				</p>
			</div>
		</section>
		<section class="sponsors">  
			<h3>we are supported by:</h3>
			
			<div class="sponsors_icon">
				<div class="spon_gr2">
					<img style="margin-bottom: 2vh;" src="https://image.ibb.co/dC1M4c/efe9ce9c_e930_4532_9ed9_0a7911d5760d.jpg">
					<img src="https://image.ibb.co/ki5FvH/fuel_logo.png">
					<img src="https://image.ibb.co/g5gc9c/Vanga_logo.jpg">
					<img src="https://image.ibb.co/i5cOhx/download.png">
				</div>
				<div class="spon_gr1">

					<img src="https://image.ibb.co/jfZKNx/220px_Bhumi.jpg">
					<img src="https://preview.ibb.co/mE379c/final_logo2.jpg">
					<img src="https://preview.ibb.co/hVcOhx/84c0680cda26471d041d29b64d33971d57b1c205.jpg">

				</div>
				<div class="spon_gr3">
					<img src="https://image.ibb.co/nK45Uc/download_2.png">
					<img src="https://image.ibb.co/diWDFH/download_1.png">
					<img src="https://image.ibb.co/gdb8hx/download.jpg">
				</div>	
			</div>
		</section>
		<br><br>
		<p class="down"><a style="text-decoration: none;" class="ss_but" href="Blooming beacon- street store.pdf" download>Click here to download the brochure</a></p>
	</section>
	<script  src="js/count_down.js"></script>
	<script >
      window.sr = ScrollReveal();
          sr.reveal('.e', {
            duration: 2000,
            delay: 0,
            origin:'top',
            distance:'100px'
          });
          sr.reveal('.countdown', {
            duration: 2000,
            delay: 1000,
            origin:'bottom',
            distance:'10px'
          });
          sr.reveal('.events_main_content h3', {
            duration: 2000,
            origin:'down'
          });
          sr.reveal('.events_main_content p', {
            delay:20,
            duration: 2000,
            origin:'down'
          });
          sr.reveal('.iframe1', {
            delay:20,
            duration: 2000,
            origin:'left'
          });
          sr.reveal('.iframe2', {
            delay:20,
            duration: 2000,
            origin:'right'
          });
          sr.reveal('.iframe3', {
            delay:20,
            duration: 2000,
            origin:'left'
          });
          sr.reveal('.icons', {
            delay:20,
            duration: 2000,
            origin:'bottom'
          });
          sr.reveal('.sponsors_icon', {
            delay:20,
            duration: 2000,
            origin:'bottom'
          });
    </script>      
  	<?php include('inc/footer_general.php'); ?>