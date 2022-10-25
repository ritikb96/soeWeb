<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="with=device-width, initail-scale=1.0">
  <title>S.O.E Block-B Website</title>
  <link rel="stylesheet" href="new.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,100;1,400;1,700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/a813499c5a.js" crossorigin="anonymous"></script>
 <body>
  <section class ="header1">
    <nav>
        <a href="home.php"><img src="pulogo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="#">NOTES</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="Computer-Notes.php">Computer Notes</a></li>
                            <li><a href="Software-Notes.php">Software Notes</a></li>
                            <li><a href="Electrical-Notes.php">Electrical Notes</a></li>
                        </ul>
                    </div></li>
                <li><a href="#">COURSE</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="Computer-Courses.php">Computer Courses</a></li>
                            <li><a href="Software-Courses.php">Software Courses</a></li>
                            <li><a href="Electrical-Courses.php">Electrical Courses</a></li>
                        </ul>
                    </div></li>
                <li><a href="Contact.php">CONTACT US</a></li>
                <li><a href="about us.php">ABOUT-US</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
    </nav>
    <h1>About Us</h1>
    
        <div class="row">
            <div class="about-col">
                <h1>Introduction</h1>
                <p>
                    School of Engineering comes under the the Faculty of Science and Technology. It was established in 1997 under the Pokhara University Act. In 1997. PU has adopted four years Bachelor's Programs of Engineering based on credit-semester system. An academic year of the University consists of two semesters of 16 weeks each.</p>
                <h1>Objective</h1>
                <p>.To conduct an array of effective and useful programs recognizing the need of adequately qualified and capable professionals in various disciplines of Applied Science and Engineering.</p>
                    <a href="https://pu.edu.np/" class="btn">Explore Now</a>
                </div>
                <div class="about-col">
                    <img src="classroom.jpg">
                </div>
            </div>
  </section>


        
<!----- footer ---->
<section class="footer">
    <h3>About Us</h3>
    <p>School of Engineering comes under the the Faculty of Science and Technology. It was established in 1997 under the Pokhara University Act. In 1997. PU has adopted four years Bachelor's Programs of Engineering based on credit-semester system. An academic year of the University consists of two semesters of 16 weeks each.</p>
    <div class="icons">
        <a href="https://www.facebook.com/groups/2223708984578399/" class="fa fa-facebook"></a>   
        <a href="https://twitter.com/PU_Nepal?s=20&t=CEIbE6LzWe4tJFst4q_0YQ" class="fa fa-twitter"></a>
        <a href="" class="fa fa-instagram"></a>
    </div>
</section>

<!------JavaScript for TOggle Menu------->
<script>
    
    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>



 </body>
</html>
