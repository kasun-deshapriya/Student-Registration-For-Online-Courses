<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/index.css">
    <link rel="stylesheet" href="./Css/detail.css">
    <link rel="stylesheet" href="./Css/fotter.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		   <link href="http://fonts.googleapis.com/css?family=Cookie">
      

    <script>
        // Function to toggle the visibility of the submenu
        function toggleSubMenu() {
            var submenu = document.getElementById("submenu");
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        }
    </script>
</head>

<body>
<header>
        <div id="main-menu">
            <div><img src="./Images/download.png" alt=""  class="logo"></div>
            <div class="name">Online Campus</div>
            <nav id="menu-area">
                <ul>
                    <li class="li"><span><a href="index1.php">Home</a></span></li>
                    <li class="li"><span><a href="#aboutus">About-Us</a></span></li>
                    <li class="li">
                        <span><a href="#couses">Courses</a></span></li>
                        
                    </li>
                    <li class="li"><span><a href="#contact">Contact-Us</a></span></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <img src="./Images/download.jpeg" width="100%" height="450">
        
      </div>



<div class="container1">
    <h3 class="since">since 2010</h3>
    </div>

    <div class="container2">
    <h3 class="Largest">Largest</h3>
    <h3 class="Higher">Higher</h3>
    <h3 class="Education">Education</h3>
    <h3 class="Online">Online</h3>
    <h3 class="Center">Center</h3>
</div>

<div>
    
    <img src="./Images/images.jpeg" alt="" class="img1"> 
    <img src="./Images/images (2).jpeg" alt="" class="img2">
    <img src="./Images/download (5).jpeg" alt="" class="img3">
  
</div>

<section id="aboutus"> 
    <br><br>
    <div>
    <h1 class="about">About-us</h1>
    <div class="container3">
        <p class="p1">Welcome to Online Campus </p>

         <p class="p2"> we are committed to providing high-quality online education
             that empowers individuals to achieve their academic and professional goals.
              Our institution was founded on the principles of accessibility, innovation, and excellence in education.</p>
    </div>
    <div class="container4">
        <h4 class="h4">Our Misson</h4>
        <p class="p3">Our mission is to make education accessible to everyone, regardless of geographical location or time constraints. We strive to create 
            an inclusive learning environment that fosters intellectual growth, critical thinking, and lifelong learning.</p>
    </div>
</div>
</section>

<section id="couses">

<br><br>


   <div>
        <h1 class="about">Our courses</h1>

        <div>
            <a href="english.php" class="container5">  
            <p class="p5"><br><br><br><br>English<br> Courses </p> <p class="p6">Learn More!</p>
    </a>
        </div>

        <div>
        <a href="ICT.php" class="container6">   
            <p class="p5"> <br><br><br><br>ICT <br> Courses  </p> <p class="p6">Learn More!</p>
    </a>
        </div>

        <div>
            <a href="managment.php" class="container7">   
            <p class="p5"> <br><br><br><br>Management <br>Courses </p>  <p class="p6">Learn More!</p>
    </a>
        </div>

    </div>
    </section>

<section id="contact">

<br><br>
    <div>
           
        <div class="container8">
        <div>
          <h3>CONTACT US <span class="h31">For Any Query</span></h3></div>
            
          <div>
            <!--icon-->
              <div>
                <img src="./Images/download - Copy.png" alt="icon" width="30px" height="30px" class="img10">
              </div>
    
              <div>
                <img src="./Images/images (1).png" alt="icon" width="30px" height="30px" class="img20">
              </div>
    
              <div >
                <img src="./Images/download (3).png" alt="icon" width="30px" height="30px" class="img30">
              </div>
           </div>

            
           <form action="" method="post">
                      <div class="text1">
                        <p>No 05,T.B Jaya Mawatha,<br>
                           Colombo 06
                       </p>

                      </div>

                       <div class="text2">
                         <p>Phone: 0789853243</p>
                         <p>Fax : 0789853243</p>

                      </div>

                       <div class="text3">
                         <p>Email:<a href="mailto:sagar00001.co@gmail.com" class="A"> onlinecampus@gmail.com</a></p>
                      </div>

                      <div class="Con"> 
                      </div>

                      <div>
                        <input type="text" class="Con1" name="Name" placeholder="Name" required>
                      </div>


                      <div>
                        <input type="email" class="Con2" name="Email" placeholder="Email" required>
                     </div>
           
                      <div>
                        <input type="text" class="Con3" name="Subject" placeholder="Subject" required>
                    </div>
  
                    <div>
                        <textarea id="" class="Con4" name="Massage" placeholder="Your Massage" rows="11" cols="50" required></textarea>
                    </div>
  
                    <div>
                    <input type="submit" class="button1" name="submit" value="SUBMIT">
                     </div>
            </form>    
<?php
$flag = '';
if (isset($_POST['submit'])) {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Massage = $_POST['Massage'];

       $conn = mysqli_connect('localhost', 'root','','online_campus');
       
       $sql = "INSERT INTO `contactus`( `name`, `email`, `subject`, `message`) 
          VALUES ('$Name','$Email','$Subject','$Massage')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $flag = 'success';
            } else {
                $flag = 'failed';
                }

              }
?>
             </div>
  </div>
    </div>
            </section>
        
<!--Foter Start -->
        
<footer class="footer-distributed">

  <div class="footer-left">
      <h3 class="fname">Online Campus</h3>

      <p class="footer-links">
          <a href="#">Home</a>
          |
          <a href="#">About</a>
          |
          <a href="#">Courses</a>
          |
          <a href="#">Contact Us</a>
      </p>

      <p class="footer-company-name">Copyright © 2023 <strong>Online Campus</strong> All rights reserved</p>
  </div>

  <div class="footer-center">
      <div>
          <i class="fa fa-map-marker"></i>
          <p><span>No 05,T.B Jaya Mawatha,</span>
          Colombo 06</p><br>
                          
      </div>

      <div>
          <i class="fa fa-phone"></i>
          <p>+94 789853243</p>
      </div>
      <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:sagar00001.co@gmail.com">onlinecampus@gmail.com</a></p>
      </div>
  </div>
  <div class="footer-right">
      <p class="footer-company-about">
          <span>STAY WITH US</span>
          <strong>   </strong> Get the latest updates and offers.
      </p>
      <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
  </div>
</footer>
<!--foter end-->


</body>
</html>