<?php include("conn.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beneficiary details </title>
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

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="password"],
        select {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
            background-color: #f2f2f2;
        }

        select {
            background-color: #fff;
        }

        textarea {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
            background-color: #f2f2f2;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="checkbox"] {
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
        }

        .error-message {
            display: none;
            color: red;
        }

        .error {
            border-color: red;
        }

        .error+.error-message {
            display: block;
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

    <h1 style="font-size:30px" >Beneficiary Details</h1>
    <br>
   
    <div class="container">

    <form onsubmit="return validateForm()" method="post" action="">
        <form onsubmit="return validatePassword()">
            

            <label for="name">Name:</label>
            <input type="text" placeholder="Enter name" name="name" required>
<br>


            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
<br>

            <label for="aadhar">Aadhaar Card Number (12 digits):</label>
            <input type="text" id="aadhar" name="aadhar" pattern="[0-9]{12}" maxlength="12" required onkeypress="return validate(event)">
<br>

            <label for="state">State:</label>
            <select id="state" name="state" onchange="populateCities()" required>
                <option value="">Select a state</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Rajasthan">Rajasthan</option>
            </select>
<br>


            <label for="city">City:</label>
            <select id="city" name="city" onchange="populateTalukas()" required>
                <option value="">Select a city</option>
            </select>
<br>

            <label for="taluka">Taluka:</label>
            <select id="taluka" name="taluka" onchange="populateVillage()" required>
                <option value="">Select a taluka</option>
            </select>
<br>

            <label for="village">Village:</label>
            <textarea id="village" name="village" rows="4" placeholder="Enter your village name"
                required></textarea>
<br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required>
            <button type="button" id="toggle-password" onclick="togglePasswordVisibility()">Show</button>
<br>


            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <br>
            <br>
			<br>

            <div class="checkboxes">
                <label><input type="checkbox" name="photo">  Photograph</label>
                <label><input type="checkbox" name="aadhar-copy"> Aadhaar Card</label>
                <label><input type="checkbox" name="birth-cert"> Birth Certificate</label>
            </div>
            <br>
            <br>
            
    
            <input type="submit" name="submit" 
             onclick="validatePassword()" value="submit" >
        </form>
    </form>
	
	</div>

    <script>
        var cities = {
            Maharashtra: ["Mumbai", "Pune", "Nagpur", "Nashik"],
            Gujarat: ["Ahmedabad", "Surat", "Vadodara", "Rajkot"],
            Karnataka: ["Bangalore", "Mysore", "Mangalore", "Hubli"],
            Rajasthan: ["Jaipur", "Jodhpur", "Udaipur", "Kota"]
        };

        var talukas = {
            Mumbai: ["Mumbai City", "Mumbai Suburban"],
            Pune: ["Haveli", "Khed", "Mawal", "Mulshi"],
            Nagpur: ["Nagpur City", "Nagpur Rural"],
            Nashik: ["Nashik City", "Nashik Rural"],
            Ahmedabad: ["Ahmedabad City", "Ahmedabad Rural"],
            Surat: ["Surat City", "Surat Rural"],
            Vadodara: ["Vadodara City", "Vadodara Rural"],
            Rajkot: ["Rajkot City", "Rajkot Rural"],
            Bangalore: ["Bangalore North", "Bangalore South"],
            Mysore: ["Mysore North", "Mysore South"],
            Mangalore: ["Mangalore North", "Mangalore South"],
            Hubli: ["Hubli North", "Hubli South"],
            Jaipur: ["Jaipur North", "Jaipur South"],
            Jodhpur: ["Jodhpur North", "Jodhpur South"],
            Udaipur: ["Udaipur North", "Udaipur South"],
            Kota: ["Kota North", "Kota South"]
        };

        function populateCities() {
            var state = document.getElementById("state").value;
            var city = document.getElementById("city");
            city.innerHTML = "";
            var cityOptions = "<option value=''>Select a city</option>";
            if (state !== "") {
                var stateCities = cities[state];
                for (var i = 0; i < stateCities.length; i++) {
                    cityOptions += "<option value='" + stateCities[i] + "'>" + stateCities[i] + "</option>";
                }
            }
            city.innerHTML = cityOptions;
            populateTalukas();
        }

        function populateTalukas() {
            var city = document.getElementById("city").value;
            var taluka = document.getElementById("taluka");
            taluka.innerHTML = "";
            var talukaOptions = "<option value=''>Select a taluka</option>";
            if (city !== "") {
                var cityTalukas = talukas[city];
                for (var i = 0; i < cityTalukas.length; i++) {
                    talukaOptions += "<option value='" + cityTalukas[i] + "'>" + cityTalukas[i] + "</option>";
                }
            }
            taluka.innerHTML = talukaOptions;
        }
    
        function validatePassword() {
            const passwordInput = document.getElementById("password");
            const confirmPasswordInput = document.getElementById("confirm-password");

            if (passwordInput.value !== confirmPasswordInput.value) {
                alert("Password Mismatch. Please enter the passwords again.");
                passwordInput.value = "";
                confirmPasswordInput.value = "";
                passwordInput.focus();
                return false;
            } else {
                alert("Password Match!");
                return true;
            }
        }
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const toggleButton = document.getElementById("toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.textContent = "Hide";
            } else {
                passwordInput.type = "password";
                toggleButton.textContent = "Show";
            }
        }
		
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


<?php 

     if (isset($_POST['submit']))  {

        $name = $_POST['name'];
        $dob =   $_POST['dob'];
        $aadhar =   $_POST['aadhar'];
        $state =   $_POST['state'];
        $city =   $_POST['city'];
        $taluka =   $_POST['taluka'];
        $village =   $_POST['village'];
    


 
    /*   $sub = mysqli_query($conn,"insert into `pending_list`(name,dob,aadhar,state,city,taluka,village,status)value(`$name`,`$dob`,`$aadhar`,`$state`,`$city`,`$taluka`,`$village`,`pending`)");

 if($sub>0){

  echo "your request is  under process! ";

 }
 else
 {
  
  echo "something went wrong ! ";
 }*/


       
 $sql = "INSERT INTO  `pending_list`(`name`,`dob`,`aadhar`,`state`,`city`,`taluka`,`village`,`status`)values('$name','$dob','$aadhar','$state','$city','$taluka','$village','pending')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "<div style='text-align:center;'><p>Successfully Registered!</p></div>";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
 }
     

      

?>
