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
 </head>
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
    <h1>CONTACT US</h1>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>School of Engineering Block-B</h5>
                        <p>Pokhara Metropolitan City-30 ,Lekhnath, Kaski</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>Nepal Telephone:</h5> 
                        <p>+977-61-504046,+977-61-504039 </p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                       <h5> E-mail: info@pu.edu.np</h5>
                       <p>
                        Post Box: 427
                        </p>    
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="https://formsubmit.co/ritikgurungb96@gmail.com.com" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter Email address" required>
                    <input type="text" name="'field" placeholder="Enter your Field" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="btn reb-btn"> Send Message</button>
                </form>
            </div>
        </div>
          </section>
  </section>

  <SEction class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13277.144437611112!2d84.03729637737092!3d28.18722531933542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399597b93139b86d%3A0xc810d3ad871b63e3!2sPokhara%20University%20School%20Of%20Engineering%20Block%20B!5e0!3m2!1sen!2snp!4v1663602439343!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </SEction>



        
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
    
    var navLinks = Document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>



 </body>
</html>
