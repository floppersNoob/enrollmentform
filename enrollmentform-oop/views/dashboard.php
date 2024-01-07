<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment System Dashboard</title>
    <style>
        body{
            margin: 0;
        }
        .navtitle{
            float: left;
            margin-left: 10px;
            padding: 25px 20px;
            font-size: xx-large;
            color: white;
        }
        ul{
            list-style-type: none;
            overflow: hidden;
            margin: 0;
            padding: 0;
            background-color: teal;
        }
        li{
            float: right;
        }
        li a{
            text-decoration: none;
            display: block;
            color: white;
            text-align: center;
            padding: 25px 10px;
            text-align: none;
            font-size: larger;
            margin-right: 5px;
            transition: color 0.5s;
        }
        li a:hover{
            color: black;
        }
        .dropdown{
            float: right;
            overflow: hidden;
        }
        .dropdown .dropbtn{
            display: block;
            color: white;
            padding: 25px 10px;
            text-decoration: none;
            margin-right: 5px;
            transition: color 0.5s;
        }
        .dropdown-content{
            display: none;
            position: absolute;
            background-color: teal;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            border-radius: 2px;
        }
        .dropdown-content a:hover {
            color: black;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        h1, h2{
            text-align: center;
        }
        h3 a{
            text-decoration: none;
            color: white;
        }
        strong{
            color: darkred;
        }
        p{
            margin: 15px;
            font-size: large;
        }
        .school{
            float: right;
            margin-left: 20px;
            margin-right: 20px;
            width: 450px;
            height: 300px;
            margin-top: 20px;
            box-shadow: 10px 10px 5px grey;
        }
        .row{
            display: flex;
            width: 90%;
            height: 150px;
            margin: 0 auto;
        }
        .container{
            display: flex;
            position: relative;
            max-width: 400px;
            flex: 33.33%;
            padding: 1px;
        }
        .container img{
            width: 100%;
        }
        .container .content{
            position: absolute;
            background: rgba(0, 0, 0, 0.6);
            bottom: 0;
            color: #f1f1f1;
            width: 75%;
            padding: 1px;
        }
        .active{
            color: black;
        }
        .it{
            float: right;
            margin: 0px 20px 15px 0px;
            box-shadow: 10px 10px 10px grey;
            width: 30%;
            margin-left: 20px;
        }
        .bsit{
            margin-left: 20px;
            margin-right: 30px;
        }
        .educ{
            float: left;
            margin: 0px 10px 15px 10px;
            box-shadow: 10px 10px 10px grey;
            width: 30%;
            margin-left: 20px;
            margin-right: 30px;
        }
        .education{
            margin-right: 20px;
        }
        .education strong{
            color: darkblue;
        }
        .ba{
            float: right;
            box-shadow: 20px 10px 10px grey;
            width: 30%;
            margin-left: 10px;
            margin-right: 20px;
        }
        .bsba{
            margin-right: 20px;
            margin-left: 20px;
        }
        .bsba strong{
            color: goldenrod;
        }
        #btn{
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            font-size: 15px;
            border: none;
            outline: none;
            background-color: teal;
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 50px;
        }
        #btn:hover{
            background-color: darkgreen;
        }
        footer {
            background-color: #3AAFA9;
            padding: 10px;
            text-align: center;
            color: white;
        }
        html{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="btn" title="Return to Top">Back to Top</button>
<ul>
    <li class="navtitle">ENROLLMENT SYSTEM</li>
    <li><a href="../actions/logout.php">Logout</a></li> 
    <li><a href="enroll-now.php">Enroll Now</a></li>
    <li><a href="#courses">Courses</a></li>
    <li><a class="active" href="dashboard.php">Home</a></li>
</ul>

<img src="../assets/school.jpg" class="school">

<h1>SAINT KERBY UNIVERSITY</h1>

<h2>The <strong>Most Trusted</strong> University in Northern Mindanao</h2>
<p>SKU  is quickly gaining recognition for its innovative approach to learning 
    and commitment to nurturing well-rounded individuals. The school places a strong emphasis on fostering creativity, 
    critical thinking, and practical problem-solving skills. With state-of-the-art facilities and a dedicated faculty, 
    students engage in dynamic learning experiences that go beyond the confines of textbooks.
</p>
<p> The school's curriculum is designed to be both rigorous and relevant, preparing students 
    for the challenges of the modern world. Technology integration is seamless, empowering students with the tools they 
    need to thrive in an increasingly digital society. As a rising school, St. Kerby Univeristy is continuously evolving,
     incorporating feedback and staying at the forefront of educational advancements. Parents, students, and educators 
     alike are excited to be part of this dynamic learning community that is shaping the leaders of tomorrow.
</p>
<br>
<br>

<div class="row">
    <div class="container">
        <img src="../assets/bsit.jpg" alt="BSIT" style="width:100%;margin-right:30px;">
        <div class="content">
            <h3><a href="it-forms.php">BSIT</a></h3>
            <p>Enroll now and be one of us!</p>
        </div>
    </div>

    <div class="container">
        <img src="../assets/educs.jpg" alt="EDUCATION" style="width:100%;margin-right:30px;">
        <div class="content">
            <h3><a href="educ-forms.php">EDUCATION</a></h3>
            <p>Enroll now and be one of us!</p>
        </div>
    </div>

    <div class="container">
        <img src="../assets/BSBA.jpg" alt="BSBA" style="width:100%;margin-right:30px;">
        <div class="content">
            <h3><a href="ba-forms.php">BSBA</a></h3>
            <p>Enroll now and be one of us!</p>
        </div>
    </div>
</div>
<br>

<h1 id="courses"><b>COURSES OFFERED : </b></h1>

<img src="../assets/BSIT.jpg" height="200" class="it">

<div class="bsit">
<h2>Bachelor of Science in <strong>Information Technology - (BSIT)</strong></h2>

<p>
&nbsp; &nbsp; &nbsp; &nbsp;
A Bachelor of Science in Information Technology (BSIT) is a comprehensive undergraduate program designed to equip 
students with the knowledge and skills necessary to navigate and contribute to the rapidly evolving field of 
information technology. This degree program typically blends theoretical foundations with practical applications, 
preparing students for a wide range of careers in the IT industry.
</p>
<p>
The BSIT curriculum covers a diverse set of subjects, including computer science, programming languages, 
database management, network administration, cybersecurity, software development, and systems analysis. 
Students often engage in hands-on projects and real-world applications, fostering problem-solving abilities and critical thinking.
</p>
</div>
<br>
<hr>
<br>
<br>

<img src="../assets/educs.jpg" height="200" class="educ">

<div class="education">
<h2>Bachelor of <strong>Secondary Education - (BSED)</strong></h2>

<p>
&nbsp; &nbsp; &nbsp; &nbsp;A Bachelor of Secondary Education (BSED) is an undergraduate degree program designed for 
individuals aspiring to become licensed educators and pursue a career in teaching. This program combines pedagogical 
theory with practical classroom experience to prepare students for the challenges and responsibilities of educating 
students at various levels.
</p>
</div>
<br>
<br>
<br>
<hr>
<br>

<img src="../assets/bsba.jpg" height="200" class="ba">

<div class="bsba">
<h2>Bachelor of Science in <strong>Business Administration - (BSBA)</strong></h2>

<p>
&nbsp; &nbsp; &nbsp; &nbsp;A Bachelor of Science in Business Administration (BSBA) is an undergraduate degree 
program that provides students with a comprehensive understanding of various business principles and practices. 
This program is designed to equip students with the knowledge and skills needed to excel in a wide range of 
business-related careers. The curriculum typically covers areas such as management, marketing, finance, accounting, 
human resources, and business strategy.
</p>
</div>
<br>

<script>
    // Get the button
    let mybutton = document.getElementById("btn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      window.scrollTo({
        top: 0, behavior: 'smooth'
      });
    }
    </script>

<br>
<br>
<footer>
    “It matters not what someone is born, but what they grow to be.” - Harry Potter and the Goblet of Fire, J.K. Rowling
</footer>
</body>
</html>
