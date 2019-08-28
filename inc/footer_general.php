<section class="social" style="">
    <div class="right_content" style="">
      <form action="" method="post" class="myform">
        <h1> stay notified </h1><p class="h6">Subscribe to get updates of our upcoming events</p>
        <br><input class="footer_field" name="name" type="text" placeholder=" Full Name" required>
        <br><br><p class="h6">and</p><br>
        <input class="footer_field" name="email" type="email" placeholder="e-mail id" required>
        <br><br><input class="footer_btn" type="submit" value="Subscribe" name="submit" style=" font-family: Poppins;">
      </form>
    </div>
    <div class="left_content" style="">
      <h1 style="color: white;">follow us on</h1><br>
      <div class="social-logos">
        <a href="https://www.facebook.com/bloomingbeacon/?fref=ts" target="_blank"><img src="img/img/fb.png"></a>
        <a href="https://www.instagram.com/beaconblooming/" target="_blank"><img src="img/img/insta.png"></a>
        <!--<a href="" target="_blank"><img src="img/twi.png"></a>-->
        <a href="https://www.youtube.com/channel/UC9F9fCEZcFO7vj8ZozMxPjw" target="_blank"><img src="img/img/yt.png"></a>
      </div><br>
      <p id="heart" class="heart_pc" style="color:white ; text-align: center; font-size:1.8rem; font-family:'Patrick Hand SC';"><b>MADE WITH <img class="bottom" src="https://image.ibb.co/gxNieG/heart.png" alt="heart" border="0"" width="30rem"> IN INDIA!</b>
        <br>BLOOMING BEACON © 2017
      </p>
      <p id="heart" class="heart_mobile" style="padding: 2vh 0 0 0; color:white ; text-align: center; font-size:3.1rem; font-family:'Patrick Hand SC';"><b>MADE WITH <img class="bottom" src="https://image.ibb.co/gxNieG/heart.png" alt="heart" border="0"" width="60rem"> IN INDIA!</b>
        <br>BLOOMING BEACON © 2018
      </p><br>
      <a class="ab" href="http://www.aritra-bhawani.tk" target="_blank"><img src="img/img/abw.png"></a>
    </div> 
  </section>

  <?php
 if(isset($_POST["submit"])){
 if(!empty($_POST['name']) && !empty($_POST['email'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $conn = new mysqli('localhost', 'id4318893_blooming_beacon', '81021002') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'id4318893_db1') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM newsletter WHERE email='".$email."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO newsletter(name,email) VALUES('$name','$email')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result){
 ?>
 <script>alert('Your Account Created Successfully');</script>
 <?php
   //echo "Your Account Created Successfully";
 }
 else
 {
 ?> 
  <script>alert('Failure! try again');</script>
 <?php  //echo "Failure!";
 }
 }
 else
 {
  ?>
 <script>alert('That E-mail id already exists! Please try again.');</script>
 <?php  //echo "That E-mail id already exists! Please try again.";
 }
 }
 else
 {
 ?>
 <!--Javascript Alert -->
 <script>alert('Required all felds');</script>
 <?php
 }
}
//unset($_POST);
//unset($_REQUEST);
//header("file:///Users/aritrabhawani/Desktop/bb_d+m/index.html");
//exit;
?>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js'></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/jquery.gsap.min.js'></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js'></script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    
  <script 
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  
    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>

    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>

  <script src='https://threejs.org/examples/js/libs/stats.min.js'></script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src='https://jnicol.github.io/particleground/js/jquery.particleground.min.js'></script>

  <script type="text/javascript" src="js/particles.js"></script>

  <script>
      $(function() {
        // Smooth Scrolling
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
  </script>

</body>