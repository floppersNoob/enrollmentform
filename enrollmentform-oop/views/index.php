<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment System Login</title>
</head>
<style>
    body{
        margin-top: 150px;
        padding: 0;
        background-color: teal;
    }

    .content {
        width: 1200px;
        height: auto;
        margin: auto;
        color: #fff;
        position: relative;
    }

    .content .par{
        padding-left: 20px;
        padding-bottom: 25px;
        letter-spacing: 1px;
        line-height: 30px;  
    }

    .content h1{
        font-size: 50px;
        padding-left: 20px;
        letter-spacing: 2px;
    }

    .content span{
        color: orange;
        font-size: 60px;
    }

    .form{
        width: 250px;
        height: 400px;
        background: rgb(14, 66, 66);
        position: absolute;
        top: -30px;
        left: 750px;
        transform: translate(0%, -5%);
        border-radius: 10px;
        padding: 25px;
    }
    
    .form h2{
        width: 220px;
        font-family: sans-serif;
        text-align: center;
        color: white;
        font-size: 22px;
        border-radius: 10px;
        margin: 2px;
        padding: 8px;
    }

    .form input{
        width: 240px;
        height: 35px;
        background: transparent;
        border-bottom: 1px solid white;
        border-top: none;
        border-right: none;
        border-left: none;
        color: #fff;
        font-size: 15px;
        margin-top: 30px;
        font-family: sans-serif;
    }

    .form input:focus{
        outline: none;
    }

    ::placeholder{
        color: #fff;
    }

    .bttn{
        width: 240px;
        height: 40px;
        background: teal;
        border: none;
        margin-top: 30px;
        font-size: 18px;
        border-radius: 10px;
        cursor: pointer;
        color: white;
        transition: 0.5s ease;
    }

    .bttn:hover{
        background: darkgray;
    }

    .bttn a{
        text-decoration: none;
        font-weight: bold;
    }

    .form .register{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        padding-top: 5px;
        text-align: left;
    }

    .form .register a{
        text-decoration: none;
        color: orange;
    }

    .liw{
        padding-top: 0;
        padding-bottom: 10px;
        text-align: center;
        color:  #fff;
    }

    .icon a{
        text-decoration: none;
        color: #fff;
    }

    .icon ion-icon{
        color: #fff;
        font-size: 30px;
        padding-left: 14px;
        padding-top: 5px;
        transition: 0.5s ease;
    }

    .icon ion-icon:hover{
        color: #ff7200;
    }

    .admin-link {
        position: absolute;
        top: 20px;
        left: 40px;
        color: white;
        font-size: 18px;
        text-decoration: none;
        font-weight: bold;
    }

    .admin-link:hover {
        color: #ff7200;
    }

</style>
<body>

<a href="admin-login.php" class="admin-link">Admin</a>

    <div class="nav">
    </div>

    <div class="content">
        <h1>ENROLLMENT <br> <span>SYSTEM</span></h1>
        <p class="par">&nbsp; This is the final project for our Object-Oriented Programming 
                <br> Subject. We are task to create a Enrollment System using all the 
                <br> lessons we learned at this subject.</p>

                <form action="../actions/user-actions.php" method="post" class="form">
                    <h2>Login Your Account</h2>

                    <input type="text" name="username" placeholder="Enter username" required>
                    <input type="password" name="password" placeholder="Enter password" required>

                    <button type="submit" class="bttn" name="login">Login</button>

                    <p class="register">Don't have an account?<a href="registration.php"> Create Account </p>

                    <p class="liw">Log in with</p>

                    <div class="icon">
                        <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href=""><ion-icon name="logo-google"></ion-icon></a>
                        <a href=""><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
</html>