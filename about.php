<?php
  require('config/config.php');
  require('config/connect.php');

  // Create Query
  $query1 = 'SELECT * FROM members_2014_2015';
  // Get Result
  $result_2014_2015 = mysqli_query($conn, $query1);
  // Fetch Data
  $members_2014_2015 = mysqli_fetch_all($result_2014_2015, MYSQLI_ASSOC);
  //var_dump($members_2014_2015);
  // Free Result
  mysqli_free_result($result_2014_2015);
  // Close Connection
  
  $query2 = 'SELECT * FROM members_2015_2016';
  // Get Result
  $result_2015_2016 = mysqli_query($conn, $query2);
  // Fetch Data
  $members_2015_2016 = mysqli_fetch_all($result_2015_2016, MYSQLI_ASSOC);
  //var_dump($members_2015_2016);
  // Free Result
  mysqli_free_result($result_2015_2016);

  $query3 = 'SELECT * FROM members_2016_2017';
  // Get Result
  $result_2016_2017 = mysqli_query($conn, $query3);
  // Fetch Data
  $members_2016_2017 = mysqli_fetch_all($result_2016_2017, MYSQLI_ASSOC);
  //var_dump($members_2016_2017);
  // Free Result
  mysqli_free_result($result_2016_2017);

  $query4 = 'SELECT * FROM members_2017_2018';
  // Get Result
  $result_2017_2018 = mysqli_query($conn, $query4);
  // Fetch Data
  $members_2017_2018 = mysqli_fetch_all($result_2017_2018, MYSQLI_ASSOC);
  //var_dump($members_2015_2016);
  // Free Result
  mysqli_free_result($result_2017_2018);

  $query5 = 'SELECT * FROM members_2018_2019';
  // Get Result
  $result_2018_2019 = mysqli_query($conn, $query5);
  // Fetch Data
  $members_2018_2019 = mysqli_fetch_all($result_2018_2019, MYSQLI_ASSOC);
  //var_dump($members_2015_2016);
  // Free Result
  mysqli_free_result($result_2018_2019);


  // Close Connection
  mysqli_close($conn);
?>



<?php include('inc/header.php'); ?>
  <title>blooming beacon - about</title>
  <link rel="stylesheet" href="css/nav_bar.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/footer_general.css">

</head>

<body>


	<?php include('inc/nav_bar.php'); ?>


  
  <div id="particles-js" style="height: 100vh; position: fixed; left:0; right: 0; z-index: 0;"></div>

  <section class=" vision" style="">
    <h1 class="our_vision">OUR VISION</h1>
	    <div class="vision_content c1">
		    <div class="left" style="">
		      <h1>Women Empowerment </h1>
		    </div> 
		    <div class="right " style="">
				<p>
					"Modern invention has banished the spinning wheel, and the same law of progress makes the women of today a different woman from her grandmother." <BR>— said 'Susan B. Anthony' <br>
					We at Blooming Beacon are committed towards ensuring self protection for women and help them create self employment opportunities that would resonate in society for a long time to come.<br> 
					We are also committed towards right to equality for women to prevent the social fabric of mankind.
				</p>
			</div>
		</div>

		<div class="vision_content c2" style="">
		    <div class="left" style="">
		      <h1>Youth Affairs</h1>
		    </div> 
		    <div class="right" style="">
				<p>
					It is a vital part of the organization where students are counseled on various issues such as peer pressure, addiction, etc. <br>
					Members of the organization ought to find appropriate solutions and guide the young minds in the right direction. <br>
					Members at Blooming Beacon formed a students' community that marks to be a good companion to others and hence, developing better outcomes in one's personality. 
				</p>
		    </div>
		</div>

		<div class="vision_content c3">
		    <div class="left " style="">
		      <h1>Social Affairs </h1>
		    </div> 
		    <div class="right " style="">
		     	<p>
			      	With the successful events that follow up, we organize medical camps, blood donation camps, monthly visits to different orphanages and privileging the homeless with clothes and other necessities. <br>
					Hence, we strive to look forward to a better and self-sustained society against poverty and partiality.
				</p>
		    </div>
		</div>
  </section>


  <section>
  <div class="members" style="">
  	<img src="img/img/IMG-20160826-WA0052-01.jpeg" class="team-logo">
  	<h4 class="our_team">OUR TEAM</h4>
  </div>

	<div class="year1" style="height: auto; /*width: 100vw;*/ display: inline-block;">
		<h5 class="time">2018 - 2019</h5>

		<ul class="caption" id="captions">
		<!-- Team member 1 -->
		<?php foreach ($members_2018_2019 as $key => $member_2017_2018) : ?>
		<li class="caption_single">
		<img src="img/members_img/<?php echo $member_2017_2018['img']; ?>"/>
		<span class="caption_single--content fade-caption">
			<h3 class="caption_single--name"><?php echo $member_2017_2018['name']; ?></h3>
			<span class="caption_single--divider"></span>
			<h2 class="caption_single--job"><?php echo $member_2017_2018['position']; ?></h2>   
		</span>
		</li>
		<?php endforeach; ?>
		</ul>  

	</div>


  <div class="year1" style="height: auto; width: 100vw; display: inline-block;">
  <h5 class="time">2017 - 2018</h5>

  <ul class="caption" id="captions">
    <!-- Team member 1 -->
    <?php foreach ($members_2017_2018 as $key => $member_2017_2018) : ?>
    <li class="caption_single">
    <img src="img/members_img/<?php echo $member_2017_2018['img']; ?>"/>
    <span class="caption_single--content fade-caption">
      <h3 class="caption_single--name"><?php echo $member_2017_2018['name']; ?></h3>
      <span class="caption_single--divider"></span>
      <h2 class="caption_single--job"><?php echo $member_2017_2018['position']; ?></h2>   
    </span>
    </li>
    <?php endforeach; ?>
  </ul>  

</div>
  
<div class="years" style="display: inline-block;">
  <h5 class="time">2016 - 2017</h5>

  <ul class="caption" id="captions">
    <!-- Team member 1 -->
    <?php foreach ($members_2016_2017 as $key => $member_2016_2017) : ?>
    <li class="caption_single">
    <img src="img/members_img/<?php echo $member_2016_2017['img']; ?>"/>
    <span class="caption_single--content fade-caption">
      <h3 class="caption_single--name"><?php echo $member_2016_2017['name']; ?></h3>
      <span class="caption_single--divider"></span>
      <h2 class="caption_single--job"><?php echo $member_2016_2017['position']; ?></h2>   
    </span>
    </li>
    <?php endforeach; ?>
  </ul>

</div>



<div class="years" style="display: inline-block;">
  <h5 class="time">2015 - 2016</h5>

  <ul class="caption" id="captions">
    <!-- Team member 1 -->
    <?php foreach ($members_2015_2016 as $key => $member_2015_2016) : ?>
    <li class="caption_single">
    <img src="img/members_img/<?php echo $member_2015_2016['img']; ?>"/>
    <span class="caption_single--content fade-caption">
      <h3 class="caption_single--name"><?php echo $member_2015_2016['name']; ?></h3>
      <span class="caption_single--divider"></span>
      <h2 class="caption_single--job"><?php echo $member_2015_2016['position']; ?></h2>   
    </span>
    </li>
    <?php endforeach; ?>
  </ul>

</div>




<div class="years" style="display: inline-block;">
  <h5 class="time">2014 - 2015</h5>

  <ul class="caption" id="captions">
    <!-- Team member 1 -->
    <?php foreach ($members_2014_2015 as $key => $member_2014_2015) : ?>
    <li class="caption_single">
    <img src="img/members_img/<?php echo $member_2014_2015['img']; ?>"/>
    <span class="caption_single--content fade-caption">
      <h3 class="caption_single--name"><?php echo $member_2014_2015['name']; ?></h3>
      <span class="caption_single--divider"></span>
      <h2 class="caption_single--job"><?php echo $member_2014_2015['position']; ?></h2>   
    </span>
    </li>
    <?php endforeach; ?>
  </ul>

</div>

</section>






  <script >
      window.sr = ScrollReveal();
          /*sr.reveal('.content_pc', {
            duration: 2000,
            delay: 300,
            origin:'top'
          });*/
          sr.reveal('.our_vision', {
            duration: 1500,
            delay: 300,
            origin:'top',
            distance: '100px'
          });
          sr.reveal('.left', {
            duration: 2000,
            delay: 300,
            origin:'left'
          });
          sr.reveal('.right', {
            duration: 2000,
            delay: 300,
            origin:'right'
          });
          sr.reveal('.team-logo', {
            duration: 2000,
            delay: 300,
            origin:'left',
            distance: '300px'
          });
          sr.reveal('.time', {
            duration: 2000,
            delay: 300,
            origin:'top'
          });
  </script>

	<?php include('inc/footer_general.php'); ?>
