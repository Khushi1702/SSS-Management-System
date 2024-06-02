<?php include("conn.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parents </title>
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

        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
            
        }

        label {
            display: block;
            margin-top: 10px;
        }

        .parent-details {
            display: flex;
            justify-content: space-between;
        }

        .mother-details,
        .father-details {
            flex: 0 0 48%;
        }

        .parent-details label {
            display: block;
            margin-top: 10px;
            margin: center;
        }

        .parent-details input[type="text"],
        .parent-details select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .checkboxes {
            margin-top: 20px;
        }

        .checkboxes label {
            margin-right: 10px;
        }

        .checkboxes input[type="checkbox"] {
            margin-right: 5px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
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
		
		.container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
        }
		
		.button-link {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
    }
	
		.button-link:hover {
            background-color: #45a049;
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
    <center><h2 style="font-size:30px">Enter Parents Details</h2></center>
	
	<center>
        <h6 style="font-size:15px">Warning! Fill in all the details before going to the next page to avoid rejection of application.</h6>
    </center>
    
    <div class="container">
        <form method="post" >
            <div class="parent-details">
                <div class="mother-details">
                    <label for="mother-prefix">Mother</label>
                    <select id="mother-prefix" name="mother-prefix" required>
                        <option value="Ms">Ms</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Late">Late</option>
                        <option value="NA">NA</option>
                    </select>
                    <label for="mother-name">Name</label>
                    <input type="text" id="mother-name" name="mother-name" required>
                    <label for="mother-aadhar">Aadhar Card Number</label>
                    <input type="text" id="mother-aadhar" name="mother-aadhar" pattern="[0-9]{12}" maxlength="12" required onkeypress="return validate(event)"
                        required>
                </div>
                <div class="father-details">
                    <label for="father-prefix">Father</label>
                    <select id="father-prefix" name="father-prefix" required>
                        <option value="Mr">Mr</option>
                        <option value="Late">Late</option>
                        <option value="NA">NA</option>
                    </select>
                    <label for="father-name">Name</label>
                    <input type="text" id="father-name" name="father-name" required>
                    <label for="father-aadhar">Aadhar Card Number</label>
                    <input type="text" id="father-aadhar" name="father-aadhar" pattern="[0-9]{12}" maxlength="12" required onkeypress="return validate(event)"
                        required>
                </div>
            </div>
            <br>
            <br>
            <label for="deposit-time">Accept Time Interval to Deposit Money</label>
            <select id="deposit-time" name="deposit-time" required>
                <option value="1 month">1 month</option>
                <option value="6 months">6 months</option>
                <option value="1 year">1 year</option>
            </select>
            <br>
            <br>
            <div class="checkboxes">
                <label><input type="checkbox" name="marriage-certificate"> Marriage Certificate</label>
                <label><input type="checkbox" name="divorce-certificate"> Divorce Certificate</label>
                <label><input type="checkbox" name="death-certificate"> Death Certificate</label>
            </div>
            <br>
            <br>
            <button type="submit">Submit</button>
			
			        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $motherPrefix = $_POST['mother-prefix'];
            $motherName = $_POST['mother-name'];
            $motherAadhar = $_POST['mother-aadhar'];
            $fatherPrefix = $_POST['father-prefix'];
            $fatherName = $_POST['father-name'];
            $fatherAadhar = $_POST['father-aadhar'];
            $depositTime = $_POST['deposit-time'];
            $marriageCertificate = isset($_POST['marriage-certificate']) ? 1 : 0;
            $divorceCertificate = isset($_POST['divorce-certificate']) ? 1 : 0;
            $deathCertificate = isset($_POST['death-certificate']) ? 1 : 0;

            $sql = "INSERT INTO `parents` 
                    (`mother_prefix`, `mother_name`, `mother_aadhar`, `father_prefix`, 
                    `father_name`, `father_aadhar`, `deposit_time`, 
                    `marriage_certificate`, `divorce_certificate`, `death_certificate`) 
                    VALUES ('$motherPrefix', '$motherName', '$motherAadhar', 
                    '$fatherPrefix', '$fatherName', '$fatherAadhar', '$depositTime', 
                    $marriageCertificate, $divorceCertificate, $deathCertificate)";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='text-align:center;'>Parent details inserted successfully!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>
			
			<center><button><a href="bdetails-1.php" class="button-link">Next</a></button></center>
        
    </div>
 </form>
 
 <script>
 function validate(event) {
            // Allow only alphanumeric characters
            var regex = /^[0-9.]*$/;
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
</script>

</body>

</html>

