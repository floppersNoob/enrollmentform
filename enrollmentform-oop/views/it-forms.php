<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }
     .navtitle{
    text-align: center;
    float: left;
    margin-left: 5px;
    padding: 25px 20px;
    color: white;
    font-size: xx-large;
  }
  
  ul {
    list-style-type: none;
    overflow: hidden;
    background-color: #3AAFA9;
    margin: 0;
    padding: 0;
  }

  li {
    float: right;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 25px 20px;
    text-decoration: none;
    font-size: larger;
    margin-right: 10px;
    transition: color 0.3s;
  }
  
  li a:hover {
    color: #2B7A2A;
  }
  input[type=text], input[type=date], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: lightblue;
      color: black;
      padding: 10px 15px;
      margin: 20px 10px;
      border: none;
      cursor: pointer;
      display: inline-block;
      border-radius: 10%;
    }

    button:hover {
      background-color: #297373;
      color: white;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }

    .button-container {
      text-align: center;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
      padding-top: 30px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 0 auto;
      border: 1px solid #888;
      width: 70%;
      padding: 20px;
      text-align: center;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .container {
      padding: 16px;
      margin: 0 auto;
      text-align: left;
    }

    label {
      margin-bottom: 8px;
      display: inline-block;
    }
    p{
        text-align: center;
    }
    h4{
        text-align: left;
    }
    h5{
        text-align: left;
    }
    strong{
        color: maroon;
    }
    h2{
        text-align: center;
    }
    footer {
  background-color: #3AAFA9;
  padding: 10px;
  text-align: center;
  color: white;
  margin-top: 25%;
}
  </style>
</head>
<body>

<ul>
  <li class="navtitle">ENROLLMENT SYSTEM</li>
  <li><a href="../actions/logout.php">Logout</a></li>
  <li><a href="enroll-now.php">Enroll Now</a></li>
  <li><a href="courses.php">Courses</a></li>
  <li><a class="active" href="dashboard.php">Home</a></li>
</ul>

<h2>Bachelor of Science in <strong>Information Technology</strong> - Year Levels</h2>
<hr>
<p>Click your respected year level to proceed enrollment.</p>

<!-- Buttons -->
<div class="button-container">
<button id="btn01">BSIT 1</button>
<button id="btn02">BSIT 2</button>
<button id="btn03">BSIT 3</button>
<button id="btn04">BSIT 4</button>
</div>

<!-- Modals -->
<div id="id01" class="modal">
<form class="modal-content animate" action="../actions/form-actions.php" method="post">
  <div class="modal-content">
    <span class="close" onclick="document.getElementById('id01').style.display='none'">&times;</span>

    <h3>Bachelor of Science in <strong>Information Technology</strong> - 1st Year</h3>
<hr>
    <h4>Below is the list of subjects in this year level:</h4>
    <h5>&nbsp; • PROGRAMMING 1 <br>
     &nbsp;  • INTRODUCTION TO COMPUTING <br>
     &nbsp;  • IT FUNDAMENTALS</h5>

    <div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Your Address" name="address" required>

      <label for="bod"><b>Birthdate</b></label>
      <input type="date" name="bod" required>

      <label for="contactNum"><b>Contact Number</b></label>
      <input type="text" name="contactNum" required>

      <label for="gender"><b>Select your Gender</b></label>
      <select name="gender" required>
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>

      <input type="hidden" name="yrLevel" value="1st year">
      <input type="hidden" name="course" value="BSIT">
      <!-- Submit button -->
      <button type="submit" name="submit">Submit</button>
      </div>
</form>
</div>
</div>

<div id="id02" class="modal">
<form class="modal-content animate" action="../actions/form-actions.php" method="post">
  <div class="modal-content">
    <span class="close" onclick="document.getElementById('id02').style.display='none'">&times;</span>

    <h3>Bachelor of Science in <strong>Information Technology</strong> - 2nd Year</h3>
<hr>
    <h4>Below is the list of subjects in this year level:</h4>
    <h5>&nbsp;  • NETWORKING 1 <br>
     &nbsp;  • DATA STRUCTURE AND ALGORITHMS <br>
     &nbsp;  • OBJECT ORIENTED PROGRAMMING</h5>

    <div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>

      <label for="address"><b>Address</b></label>
      <input type="text" id="address" name="address" required>

      <label for="bod"><b>Birthdate</b></label>
      <input type="date" name="bod" required>

      <label for="contactNum"><b>Contact Number</b></label>
      <input type="text" name="contactNum" maxlength="11" required>

      <label for="gender"><b>Select your Gender</b></label>
      <select name="gender" required>
        <option value="Male">M</option>
        <option value="Female">F</option>
      </select>

      <input type="hidden" name="yrLevel" value="2nd year">
      <input type="hidden" name="course" value="BSIT">


      <!-- Submit button -->
      <button type="submit" name="submit">Submit</button>
      </div>
</form>
</div>
</div>

<div id="id03" class="modal">
<form class="modal-content animate" action="../actions/form-actions.php" method="post">
  <div class="modal-content">
    <span class="close" onclick="document.getElementById('id03').style.display='none'">&times;</span>

    <h3>Bachelor of Science in <strong>Information Technology</strong> - 3rd Year</h3>
<hr>
    <h4>Below is the list of subjects in this year level:</h4>
    <h5>&nbsp; • PLATFORM TECHNOLOGIES 1 <br>
     &nbsp;  • WEB SYSTEMS AND TECHNOLOGIES <br>
     &nbsp;  • FUNDAMENTALS OF DATABASE SYSTEMS <br>
     &nbsp;  • INFORMATION ASSURANCE AND SECURITY 1 <br>
     &nbsp;  • HUMAN COMPUTER INTERACTION</h5>

    <div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>

      <label for="address"><b>Address</b></label>
      <input type="text" id="address" name="address" required>

      <label for="bod"><b>Birthdate</b></label>
      <input type="date" name="bod" required>

      <label for="contactNum"><b>Contact Number</b></label>
      <input type="text" name="contactNum" required>

      <label for="gender"><b>Select your Gender</b></label>
      <select name="gender" required>
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>

      <input type="hidden" name="yrLevel" value="3rd year">
      <input type="hidden" name="course" value="BSIT">


      <!-- Submit button -->
      <button type="submit" name="submit">Submit</button>
      </div>
</form>  
</div>
</div>

<div id="id04" class="modal">
<form class="modal-content animate" action="../actions/form-actions.php" method="post">
  <div class="modal-content">
    <span class="close" onclick="document.getElementById('id04').style.display='none'">&times;</span>

    <h3>Bachelor of Science in <strong>Information Technology</strong> - 4th Year</h3>
<hr>
<h4>Below is the list of subjects in this year level:</h4>
    <h5>&nbsp; • CAPSTONE PROJECT AND RESEARCH <br>
     &nbsp;  • SYSTEMS ADMINISTRATION AND MAINTENANCE <br>
     &nbsp;  • CLOUD COMPUTING <br>
     &nbsp;  • INTERNET OF THINGS</h5>

    <div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>

      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>

      <label for="address"><b>Address</b></label>
      <input type="text" id="address" name="address" required>


      <label for="bod"><b>Birthdate</b></label>
      <input type="date" name="bod" required>

      <label for="contactNum"><b>Contact Number</b></label>
      <input type="text" name="contactNum" required>

      <label for="gender"><b>Select Your Gender</b></label>
      <select name="gender" required>
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>

      <input type="hidden" name="yrLevel" value="4th year">
      <input type="hidden" name="course" value="BSIT">


      <!-- Submit button -->
      <button type="submit" name="submit">Submit</button>
      </div>
</form>    
</div>
</div>

<script>
// Function to display the modal with the given ID
function displayModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = "block";
}

// Get the button elements
var button1 = document.getElementById('btn01');
var button2 = document.getElementById('btn02');
var button3 = document.getElementById('btn03');
var button4 = document.getElementById('btn04');

// When the user clicks the button, display the respective modal
button1.onclick = function() {
  displayModal('id01');
};

button2.onclick = function() {
  displayModal('id02');
};

button3.onclick = function() {
  displayModal('id03');
};

button4.onclick = function() {
  displayModal('id04');
};

// When the user clicks anywhere outside of the modal, close the respective modal
window.onclick = function(event) {
  if (event.target.className === 'modal') {
    event.target.style.display = 'none';
  }
};
</script>

<footer>
    <i>“Made weak by time and fate, but strong in will <br>
To strive, to seek, to find, and not to yield.” - Ulysses, Alfred Lord Tennyson
</i>
</footer>
</body>
</html>
