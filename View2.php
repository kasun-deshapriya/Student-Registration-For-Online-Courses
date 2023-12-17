<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./CSS/view.css">
    <link rel="stylesheet" href="./CSS/nav.css">
</head>
<body>
    
<header>
        <div id="main-menu">
            <div><img src="./Images/download.png" alt=""  class="logo"></div>
            <div class="name">Online Campus</div>
            <nav id="menu-area">
                <ul>
                    <li class="li"><span><a href="index1.php">Home</a></span></li>
                    <li class="li"><span><a href="index1.php">About-Us</a></span></li>
                    <li class="li">
                        <span><a href="index1.php">Courses</a></span></li>
                        
                    </li>
                    <li class="li"><span><a href="index1.php">Contact-Us</a></span></li>
                </ul>
            </nav>
        </div>
    </header>

    <h2>Confirm Your Regisration</h2> <br>
 
    <form action="" method="post" id="myForm">
    <div class="container">
    <br> <br> <br>
         <label for="" class="lbl1">Your Course :</label> <br>     
         <input type="text" name="progrmme" class="lbl2" value=" <?php echo $_POST["progrmme"] ?>" readonly>  <br> <br>

         <label for="" class="lbl1">Course Number :</label> <br>  
         <input type="text" name="Course_No" class="lbl2" value=" <?php echo $_POST["Course_No"] ?>" readonly> <br> <br> 

         <label for="" class="lbl1">Duration:</label>   <br>
         <input type="text" name="Duration" class="lbl2" value=" <?php echo $_POST["Duration"] ?> " readonly> <br> <br> 

         <label for="" class="lbl1">Course Fee:</label>   <br>      
         <input type="text" name="Fee" class="lbl2" value=" <?php echo $_POST["Fee"] ?> " readonly> <br> <br> 

         <label for="" class="lbl1">Branch Name :</label>  <br>     
         <input type="text" name="Branch" class="lbl2" value=" <?php echo $_POST["Branch"] ?> " readonly> <br> <br> 

         <label for="" class="lbl1">Your Full Name :</label> <br>   
         <input type="text" name="full_name" class="lbl2" value=" <?php echo $_POST["full_name"] ?>" readonly> <br> <br> 

         <label for="" class="lbl1">Your NIC Number :</label> <br>  
         <input type="text" name="NIC" class="lbl2" value=" <?php echo $_POST["NIC"] ?> " readonly> <br> <br>
         </div>
         
         <div class= "container1">
         <br> <br> <br>
         <label for="" class="lbl1">Date of Birth :</label> <br>    
         <input type="text" name="DoB" class="lbl2" value=" <?php echo $_POST["DoB"] ?> " readonly> <br> <br> 

         <label for="" class="lbl1">Gender :</label>     <br>       
         <input type="text" name="Gender" class="lbl2" value=" <?php echo $_POST["Gender"] ?> " readonly> <br> <br>

         <label for="" class="lbl1">Address :</label>      <br>     
         <input type="text" name="Address" class="lbl2" value=" <?php echo $_POST["Address"] ?> " readonly> <br> <br> 

         <label for="" class="lbl1">Mobile Number :</label> <br>     
         <input type="text" name="Mobile_Number" class="lbl2" value=" <?php echo $_POST["Mobile_Number"] ?> " readonly> <br> <br>

         <label for="" class="lbl1">Your Email :</label>  <br>     
         <input type="text" name="Email" class="lbl2" value=" <?php echo $_POST["Email"] ?> " readonly> <br> <br> 

         <label for="" class="lbl1">Promo Code:</label>   <br>     
         <input type="text" name="Promr_Code" class="lbl2" value=" <?php echo $_POST["Promr_Code"] ?> " readonly> <br> <br> 
        

    </div>
     <input type="submit" name="submit" value="Confirm" class="btn1" >  
     </form>

<?php
  $flag = '';
    if (isset($_POST['submit'])) {
    $programme = $_POST['progrmme'];
    $courseNumber = $_POST['Course_No'];
    $branch = $_POST['Branch'];
    $FullName = $_POST['full_name'];
    $NIC = $_POST['NIC'];
    $DoB = $_POST['DoB'];
    $Gender = $_POST['Gender'];
    $Adderss = $_POST['Address'];
    $MobileNumber = $_POST['Mobile_Number'];
    $Email = $_POST['Email'];
    $Promo = $_POST['Promr_Code'];

    $connection = mysqli_connect('localhost', 'root', '', 'online_campus');

    $sql="INSERT INTO `ict_applicant`(`programme`, `Course_ID`, `branch`, `fullname`, `nic`, `DoB`, `gender`, `address`, `mobile_number`, `email`, `promo_code`)
    VALUES ('$programme','$courseNumber','$branch','$FullName','$NIC','$DoB','$Gender','$Adderss','$MobileNumber','$Email','$Promo')";
    
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $flag = 'success';
    } else {
        $flag = 'failed';
    }

    mysqli_close($connection);
}
?>

<script>
        document.getElementById('myForm').addEventListener('submit', function(e) {
            e.preventDefault(); 

            setTimeout(function() {
                alert("Your Request is successfully!");
                
                window.location.href = 'index1.php';
            }, 1000);
        });
    </script>
</body>
</html>