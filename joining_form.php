
<?php include('inc/header.php'); ?>
	<title>blooming beacon - about</title>
	<link rel="stylesheet" href="css/nav_bar.css">
	<link rel="stylesheet" href="css/join.css">
	<link rel="stylesheet" href="css/footer_general.css">
	<title>blooming beacon - join</title>
</head>
<?php  
	require('config/config_db1.php');
	require('config/connect.php');

	if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
		$email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
		$why = mysqli_real_escape_string($conn, $_POST['why']);
		$views = mysqli_real_escape_string($conn, $_POST['views']);
		$how_help = mysqli_real_escape_string($conn, $_POST['how_help']);
		$pre_exp = mysqli_real_escape_string($conn, $_POST['pre_exp']);
		$social_issues = mysqli_real_escape_string($conn, $_POST['social_issues']);
	
		$email_check = mysqli_query($conn, "SELECT * FROM joining_requests WHERE email_id='".$email_id."'");
 		$email_exists = mysqli_num_rows($email_check);

 		if($email_exists != 0){
 			?>
 				<script>alert('emai already exists');</script>
 			<?php } 
 			elseif ($email_exists == 0){
				$query = "INSERT INTO joining_requests (name, gender, address, contact_no, email_id, why, views, how_help, pre_exp, social_issues) VALUES ('$name', '$gender', '$address', '$contact_no', '$email_id', '$why', '$views', '$how_help', '$pre_exp', '$social_issues')";
				if(mysqli_query($conn, $query)){
			 		header('Location: '.ROOT_URL.'');
			 	} else{
					echo'ERROR: '. mysqli_error($conn);
				}
			}
			else{
				echo("sorry! your reqest can't be posted, try again later");
			}
		}
?>
<body>
	<?php include('inc/nav_bar.php'); ?>
	<div id="particles-js" style="height: 100vh; position: fixed; left:0; right: 0; z-index: 0;"></div>

<section class="registration">
<h1 class="register">Registration</h1>
<form action="" method="post" id="form">
	<br><br/>
	<label>Name: </label>
	<input class="text" type="text" name="name" placeholder="your full name" value="" required><br/><br/><br/>
	
	<label for="male"> Male: </label>
	<input class="gender" name="gender" id="male" type="radio" value="male" >
	<label for="female"> Female: </label>
	<input class="gender" name="gender" id="female" type="radio" value="female" required="Select">
	<label for="other"> Other: </label>
	<input class="gender" name="gender" id="other" type="radio" value="other">
	<br><br><br>

	<label for="address">Address: </label>
	<input class="text" type="text" name="address" placeholder="your full address" value="" required><br><br><br>

	<label>Contact Number: </label>
	<input class="text" type="text" name="contact_no" placeholder="10 digit no. without code" maxlength="10" value="" required><br><br><br>

	<label for="email"> E-mail: </label>
 	<input class="text" name="email_id" id="email" type="email" placeholder="your email id" required><br><br><br>


	<label> Why are you interested in Social Service?<br> </label><br>
	<textarea class="para" name="why" rows="4" cols="40"></textarea><br><br><br>

	<label> What are your views of the Indian Society?<br> </label><br>
	<textarea class="para" name="views" rows="4" cols="40"></textarea><br><br><br>

	<label> How can you help Blooming Beacon?<br> </label><br>
	<textarea class="para" name="how_help" rows="4" cols="40"></textarea><br><br><br>

	<label> Do you have any prior work experience in any Social Organization?<br> If yes, then what?<br></label><br>
	<textarea class="para" name="pre_exp" rows="4" cols="40"></textarea><br><br><br>

	<label> What social issues do you think we shold focus on, as an NGO?<br> </label><br>
	<textarea class="para" name="social_issues" rows="4" cols="40"></textarea><br><br><br>


	<input class="join_btn" type="submit" value="Register" name="submit"><br><br>

</form>
</section>
	<script >
      window.sr = ScrollReveal();
          sr.reveal('.register', {
            duration: 2000,
            delay: 300,
            origin:'top',
            distance:'100px'
          });
          sr.reveal('#form', {
            duration: 2000,
            delay: 300,
            origin:'top'
          });

    </script>
	<?php include('inc/footer_general.php'); ?>
