<?php include("conn.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Eligiblity </title>
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

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: rgb(228, 173, 173);
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(241, 156, 156, 0.8);
        }

        /* Caption text */
        .text {
            color: #030303;
            font-size: 20px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #eb8989;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 10px
            }
        }

        .collapsible {
            background-color: rgba(216, 191, 216, 0.8);
            color: #333;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: center;
            outline: none;
            font-size: 15px;
        }

        .collapsible:hover {
            background-color: rgba(230, 230, 250, 0.8));
        }

        .active,
        .collapsible:hover {
             background-color: rgba(230, 230, 250, 0.8);
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: rgba(176, 48, 96, 0.5);
            text-align: center;
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
	

    <br>
    <br>
    <br>
    <br>

    <center>
        <h1 style="font-size:30px">Check Eligibility for Scheme</h1>
    </center>
    <br>
	<br>
    <br>
   
  

    <button class="collapsible">Check Eligibility</button>
    <div class="content">
        <p>Enter your date of birth:</p>
        <input type="date" id="dob" style="background-color: rgba(255, 255, 255, 0.9); color: #333;">
        <button onclick="checkEligibility()" style="background-color: rgba(255, 255, 255, 1); color: #333;">Submit</button>
        <p id="result"></p>
    </div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }

        function checkEligibility() {
            var dob = new Date(document.getElementById("dob").value);
            var today = new Date();
            var age = today.getFullYear() - dob.getFullYear();
            var monthDiff = today.getMonth() - dob.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }

            if (age >= 10 && age <= 18) {
                window.location.href = "parents.php";
            } else {
                document.getElementById("result").innerHTML = "Not Eligible";
            }
        }
    </script>

    <form onsubmit="return validateForm()" method="post" action="">
        <!-- Your form elements here -->
    </form>

</body>

</html>
