<!-- confirmation-message.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
            background-color: teal; /* Teal background color */
        }

        h2 {
            color: black;
        }

        p {
            color: green;
        }

        a {
            color: #00537E;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.5s, color 0.5s;
            font-weight: bolder;
        }

        a:hover {
            background-color: teal;
            color: #FFA500;
        }

        /* Box shadow for the container */
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            margin-top: 150px;
        }
    </style>
    <title>Confirmation</title>
</head>
<body>
    <div class="container">
        <h2>Succesfully submitted the form!</h2>
        <p>Your enrollment form will be reviewed. You may wait for further notice!</p>
        <p><a href="../views/dashboard.php">Back to Home</a></p>
    </div>
</body>
</html>
