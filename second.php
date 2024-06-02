<?php include("conn.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interface</title>
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
		
		.link {
			display: block;
			text-align: center;
			font-size: 24px;
			margin-top: 50px;
			}
		
		

	
		#grad1 {
			height: 500px;
			background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgba(255, 0, 0, 1));
		}



		.container {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}

		.item {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 0 20px;
			width: 33.33%;
			box-sizing: border-box;
			padding: 0 20px;
		}

		.item img {
			border-radius: 50%;
			border: 2px solid #000;
			padding: 10px;
			margin-bottom: 10px;
			height: 200px;
			width: 200px;
			object-fit: cover;
		}

		.item button {
			background-color: #ddd;
			color: #000;
			border: none;
			border-radius: 5px;
			padding: 10px;
			cursor: pointer;
			font-size: 18px;
			font-weight: bold;
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
	
	
	<div class="container">
		<div class="item">
			<img src="admin.png"
				alt="Admin">
			<a href="adminlogin.php"><button>Admin</button></a>
		</div>
		
		<div class="item">
			<img src="girl.png"
				alt="Guardian">
			<a href="beneficiary.php"><button>Beneficiary</button></a>
		</div>
	</div>

</body>

</html>