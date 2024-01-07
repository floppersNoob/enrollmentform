<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
    margin: 0; /* Reset margin to remove default margin */
  }

  .navtitle{
    text-align: center;
    float: left;
    margin-left: 10px;
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
    padding: 25px 10px;
    text-decoration: none;
    font-size: larger;
    margin-right: 5px;
    transition: color 0.5s;
  }
  
  li a:hover {
    color: black;
  }

        p{
          text-align: center;
        }

        h2 {
         margin-bottom: 20px;
         text-align: center;
         font-size: xx-large;
        }

        form {
          width: 90%;
          max-width: 500px;
          margin: 0 auto;
          text-align: left;
          border: 1px solid black;
          border-radius: 5px;
          padding: 20px;
        }

        form div {
          margin-bottom: 20px;
        }

        form label {
         margin-right: 10px;
         margin-left: 10px; /* Added margin-left for labels */
        }

        form input {
            width: calc(100% - 22px); /* Subtracting margin and border widths */
            height: 30px;
            padding: 5px;
        }

        form .name-inputs {
            display: flex;
            margin-right: 0; /* Removed margin-right for name-inputs */
        }

        form .name-inputs label {
            margin-right: 10px;
        }

        form .name-inputs input {
            flex: 1;
            margin-right: 10px;
        }

        form .other-inputs {
            display: flex;
            margin-right: 0; /* Removed margin-right for name-inputs */
        }

        form .other-inputs label {
            margin-right: 10px;
        }

        form .other-inputs input {
            flex: 1;
            margin-left: 0;
        }

        button {
            display: block;
            margin: 0 auto;
            padding: 10px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #00537E;
        }
        footer {
           background-color: #3AAFA9;
           padding: 10px;
           text-align: center;
           color: white;
      }
      .active{
        color: black;
      }
    </style>
</head>
<body>

<ul>
  <li class="navtitle">ENROLLMENT SYSTEM</li>
  <li><a href="../actions/logout.php">Logout</a></li>
  <li><a  class="active"href="enroll-now.php">Enroll Now</a></li>
  <li><a href="courses.php">Courses</a></li>
  <li><a href="dashboard.php">Home</a></li>
</ul>

    <h2>Enrollment Form</h2>

    <p>Please fill up the Enrollment fields. </p>

    <form action="../actions/form-actions.php" method="post">
        <div class="name-inputs">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>
        </div>

        <div class="other-inputs">
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>

            <label for="bod">Birthdate:</label>
            <input type="date" id="bod" name="bod">

            <label for="gender">Select Your Gender:</label>
            <select id="gender" name="gender" required>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>

        <div>
            <label for="contactNum">Contact Number:</label>
            <input type="text" id="contactNum" name="contactNum" maxlength="11" required>
        </div>

        <div>
            <label for="yrLevel">Select Year Level :</label>
            <select id="yrLevel" name="yrLevel" required>
                <option value="1st year">1st Year</option>
                <option value="2nd year">2nd Year</option>
                <option value="3rd year">3rd Year</option>
                <option value="4th year">4th Year</option>

            </select>
        </div>

        <div>
            <label for="course">Select Your Course:</label>
            <select id="course" name="course" required>
                <option value="BSIT">Bachelor of Science in Information Technology</option>
                <option value="Educ">Bachelor of Secondary Education</option>
                <option value="BSBA">Bachelor of Science in Business Administration</option>
            </select>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <br>
    
    <footer>
    “Whatever our souls are made of, his and mine are the same.” - Wuthering Heights, Emily Bronte
    </footer>
</body>
</html>
