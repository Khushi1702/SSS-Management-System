<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest Calculator</title>
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

        .calculator-container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
        
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
			
        }
		

        h2 {
            color: #fff;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 14px;
            color: #fff;
            text-align: left;
        }

        input {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #217dbb;
        }

        #result {
            margin-top: 20px;
            font-size: 16px;
            color: #fff;
            text-align: left;
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
	
	<center><h1> Interest Calculator</h1></center>	
	<br>

    <div class="calculator-container">
        
        <label for="principal">Principal Amount:</label>
        <input type="number" id="principal" placeholder="Enter principal amount" required>

        <label for="interest-rate">Annual Interest Rate (%):</label>
        <input type="number" id="interest-rate" placeholder="Enter annual interest rate" required>

        <label for="duration">Investment Duration (in years):</label>
        <input type="number" id="duration" placeholder="Enter investment duration" required>

        <button onclick="calculateInterest()">Calculate Interest</button>

        <div id="result"></div>
    </div>

    <script>
        function calculateInterest() {
            const principal = parseFloat(document.getElementById('principal').value);
            const interestRate = parseFloat(document.getElementById('interest-rate').value);
            const duration = parseInt(document.getElementById('duration').value);

            const interest = (principal * interestRate * duration) / 100;
            const totalAmount = principal + interest;

            document.getElementById('result').innerHTML = `Total Interest: ₹${interest.toFixed(2)}<br>Total Amount: ₹${totalAmount.toFixed(2)}`;
        }
    </script>
</body>

</html>
