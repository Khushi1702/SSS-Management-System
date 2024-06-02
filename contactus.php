<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
		
		.container1 {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
        }

        header {
            background: linear-gradient(to right, #7b4397, #dc2430);
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        h1, h2 {
            color: #fff;
        }
		
		h3{
			color: #555;
			}

        p {
            color: #fff;
            line-height: 1.5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        .contact-section {
            background-color: rgba(230, 230, 250, 0.8);
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .contact-heading {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .contact-info {
            color: #555;
        }
    </style>
</head>

<body>

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
	
    <div class="logo-left">
        <img src="https://www.goodmoneying.com/wp-content/uploads/2015/03/sukanya-samridhi-scheme.jpg" alt="Logo">
    </div>

    <div class="logo-right">
        <img src="https://presentations.gov.in/wp-content/uploads/2020/01/NE_Preview1.png?x68990" alt="Logo">
    </div>
	
    <header>
        <h1>Contact Us</h1>
    </header>
	<div class="container1">

    <div class="container">
        <h2>Sukanya Samriddhi Scheme Office</h2>
        <p>For any queries related to the Sukanya Samriddhi Scheme, please contact our dedicated team. We are here to assist you with information and support.</p>
       

        <div class="contact-section">
            <h3 class="contact-heading">Contact Details</h3>
            <p class="contact-info">
                If you have any questions or need assistance, feel free to reach out to our Sukanya Samriddhi Scheme office.
                <br>
                Email: <a href="mailto:sukanya@schemesample.com">mailto:sukanya@schemesample.com</a>
                <br>
                Phone: +1 (123) 456-7890
            </p>
        </div>
    </div>
	</div>
</body>

</html>
