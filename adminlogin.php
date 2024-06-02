<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login </title>
	
    <style>
       body {
            margin: 0;
            padding: 0;
            font-family: 'Verdana', sans-serif;
            background: linear-gradient(to right, #7b4397, #dc2430);
            color: #fff;
        }

        .logo-left,
        .logo-right {
            display: inline-block;
            border-radius: 50%;
            height: 120px;
            width: 120px;
            margin: 20px;
            border: 5px solid #fff;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.7);
            position: absolute;
            top: 20px;
        }

        .logo-left img,
        .logo-right img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .logo-right {
            right: 20px;
        }

        .emblem {
            display: inline-block;
            border-radius: 50%;
            height: 120px;
            width: 120px;
            margin: 20px;
            border: 5px solid #fff;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.7);
        }

        .emblem img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
		
        .admin-login-form {
             max-width: 500px;
            margin: 20px auto;
            padding: 20px;
        
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
        }

        .admin-login-form label {
            display: block;
            margin-top: 10px;
            color: #fff;
        }

        .admin-login-form input {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
        }

        .admin-login-form button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .admin-login-form button:hover {
            background-color: #45a049;
        }
		
		.navbar {
            overflow: hidden;
           
			text-align: center;
        }

        .navbar a {
            float: center;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: rgba(230, 230, 250, 0.8);
            color: black;
        }
		
		.error-message {
            color: #ff0000;
            margin-top: 5px;
        }
		
    </style>
</head>

<body>
  <div class="logo-left">
        <img src="https://www.goodmoneying.com/wp-content/uploads/2015/03/sukanya-samridhi-scheme.jpg" alt="Logo">
    </div>

    <div class="logo-right">
        <img src="https://presentations.gov.in/wp-content/uploads/2020/01/NE_Preview1.png?x68990" alt="Logo">
    </div>
	
	<br>
	
    <div class="navbar">
        <a href="first.php">Home</a>
        <a href="status.php">Check Status</a>
        <a href="interestcal.php">Interest Calculator</a>
        <a href="contactus.php">Contact Us</a>
		<a href="faq.php">FAQ's</a>
    </div>
	

    <br>
    <br>
    <br>
    <br>
	
	<h1 style="text-align: center;">Admin Login</h1>

     <div class="admin-login-form">
        
        <form onsubmit="return validateAdminLogin()" method="post" action="admin-1.php">
            <label for="adminUsername">Username:</label>
            <input type="text" id="adminUsername" name="adminUsername" required>

            <label for="adminPassword">Password:</label>
            <input type="password" id="adminPassword" name="adminPassword" required>

            <button type="submit">Login</button>
        </form>
        <p id="loginError" class="error-message"></p>
    </div>
	
  <script>
        function validateAdminLogin() {
            var adminUsername = document.getElementById("adminUsername").value;
            var adminPassword = document.getElementById("adminPassword").value;

            // Check if admin username and password match
            if (adminUsername === "user_635" && adminPassword === "234589") {
                return true; // Allow form submission and redirect to admin-1.php
            } else {
                document.getElementById("loginError").innerHTML = "Invalid admin credentials";
                return false; // Prevent form submission
            }
        }
    </script>
</body>

</html>