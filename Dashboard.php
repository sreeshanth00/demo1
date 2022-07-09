<?php
session_start();
if($_SESSION['email'])
{

}
else{
  header("Location: login.html");
}?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="sty.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    </head>
  <body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Hi,There</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Courses</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">Profile</a></li>
                    
                    <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>


                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <br>



  <!-- javacourse-->
  <section id="course-inner">
        <div class="overview">
          <video  class="course-img"  controls>
            <source src="work5.mp4" type="video/mp4">
          </video>
          <div class="course-head">
            <div class="c-name">
              <h2>Java beginner Course</h2>
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Morden java course from the beginning - all the way level 1!the must have hava 2022.</p>
            </div>

          </div>


          <!----------------tutuor--------------->
            <h3>Instructor</h3>
            <div class="tutor">
            <img src="assets/img/ram.png" alt="">
            <div class="tutor-det">
              <h5>Abhi</h5>
              <p>Web Developer at google </p>
            </div>
          </div>

          <hr><!----------------Course Overviev<--------------->


          <h3>What you'll learn</h3>
          <div class="learn">
            <p><i class="far fa-check-circle"></i>Java from scratch-beginner to advanced</p>
            <p><i class="far fa-check-circle"></i>Everything you need to be a java expert and apply for javas jobs</p>
            <p><i class="far fa-check-circle"></i>All about variables ,functions,obejects and arrys</p>
            <p><i class="far fa-check-circle"></i>All core features and concepts you need to know in java development</p>
            <p><i class="far fa-check-circle"></i>Project driven learing with penalty of example</p>
            <p><i class="far fa-check-circle"></i>Object orianted program</p>
          </div>


          <hr><!--------------What you'll learn----------------->


          <h3>Course Overviev</h3>
          <p> This Course is the first of a series of courses that make up the Core Java Specialization.<br>
              The Core Java Specialization, in turn, is part of a series of programming specializations, derived from LearnQuest's private Java Bootcamps, designed to provide the skill set necessary to be hired as an IT developer using Java in many corporate environments.<br>
              This course includes hands-on practice and will give you a solid knowledge of the Java language.<br> After completing this course, you will be able to identify Java’s benefits, program in basic Java syntax using Java data types, and incorporate branches and loops.<br>
              The audience for this course: - Anyone interested in learning Java - Programmers - Technical Managers - Application Developers Prerequisites: To be successful with this course, you should understand the fundamentals of software development in either a procedural or object-oriented language.
          </p><br>


        </div>


        <!----------------------------------enroll------------------------------->




   </section>





  <script src="https://unpkg.com/scrollreveal"></script>
</body>
</html>
