<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./Css/Coures1.css">
     <link rel="stylesheet" href="./Css/nav.css">
    

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

     <img src="./Images/logo.jpg" alt="logo" class="logo2">
     <img src="./Images/logo1.png" alt="logo" class="logo3">
     <img src="./Images/logo1.png" alt="logo" class="logo4">

     <div>
        <h2>APPROVED BY THE</h2>
        <h4>Ministry of Higher Education</h4>

        <h2 class="AP">RECOGNISED BY THE</h2>
        <h4 class="Mi">University Grants Commission</h4>
     </div>

     <div class="container">
        
          <h1> Online Student Regisration Form  </h1>
     </div>
    
     <div class="container1">

         <form action="View.php" method="post">
         <br>
         <label class="lbl1">Your Programme *</label><br>
            <select name="progrmme" id="progrmme" calss="select" required>
                <option value="Certificate in English">Certificate in English</option> 
            </select> <br>

            <label class="lbl1">Course Number *</label><br>
            <select name="Course_No" id="Course_No" calss="select" required>
                <option value="8050">8050</option> 
            </select> <br>

            <label class="lbl1">Duration *</label><br>
            <select name="Duration" id="Duration" calss="select" required>
                <option value="6 Months">6 Months</option> 
            </select> <br>

            <label class="lbl1">Course Fee *</label><br>
              <select name="Fee" id="Fee" calss="select" required>
                <option value="R.s 20000.00">R.s 20000.00</option> 
            </select> <br>

            <label class="lbl1">Branch *</label><br>
            <select name="Branch" id="Branch" calss="input" required>
                <option value="Select Your Branch">Select Your Branch</option>
                <option value="Colombo">Colombo</option>
                <option value="Kandy">Kandy</option>
                <option value="Kurunagala">Kurunagala</option>
            </select><br>

            <label class="lbl1">Full Name *</label><br>
            <input type="text" name="full_name" calss="input" required><br>

            <label class="lbl1">NIC/Passport *</label><br>
            <input type="text" name="NIC" calss="input" required><br>

            <label class="lbl1">Date of Birth (DD/MM/YYYY) *</label><br>
            <input type="text" name="DoB" calss="input" required><br>

            <label class="lbl1">Gender *</label><br>
            <select name="Gender" id="Gender" calss="input" required>
                <option value="Select Your Gender">Select Your Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>

            <label class="lbl1">Address *</label><br>
            <textarea name="Address" id="1" cols="30" rows="4" class="text1" required></textarea> <br>

            <label class="lbl1">Mobile Number *</label><br>
            <input type="text" name="Mobile_Number" calss="input" required><br>

            <label class="lbl1">E-mail:</label><br>
            <input type="text" name="Email" calss="input" required><br>

            <label class="lbl1">Promo code:</label><br>
            <input type="text" name="Promr_Code" calss="input" placeholder="If You have promo code please enter that"><br>

            <label class="lbl1">Our Rules & Regulations *</label><br>
            <input type="checkbox" class="che" required>
            <p>I have read and understood the rules and regulations of the organisation and agree to abide by them. Also please note that you need to 
               fulfill the entry requirements for the specific course. Applications will be assessed individually and admission 
               will be granted upon fulfilling the prerequisites / required educational qualifications of the respective study
              programme.</p>

            <input type="submit" class="btn" name="submit" value="SUBMIT">

         </form>

         <div>
         <h2 class="Pm">Payment method</h2>

         <img src="./Images/download (1).png" alt="logo" srcset=""  class="pay">

         <h2 class="P">Copyright © 2023 Online Campus All rights reserved</h2>
         </div>
     </div>     
 

</body>
</html>