<?php include("conn.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ's</title>

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
		

        .faq-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
        }

        .faq-item {
            margin-bottom: 20px;
        }

        .question {
            font-size: 18px;
            font-weight: bold;
        }

        .answer {
            margin-top: 10px;
            font-size: 16px;
        }
		
		h1 {
            margin-bottom: 20px;
        }
		
    </style>
</head>

		
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
	
    <body>
	
	<header>
       <center><h1>FAQs</h1></center>
    </header>
	<br>

    <div class="faq-container">

        <div class="faq-item">
            <div class="question">Q: What is the maximum deposit limit in a financial year?</div>
            <div class="answer">A: The maximum deposit limit is ₹1.5 lakh in a financial year.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: What is the maturity period for the Sukanya Samriddhi Scheme account?</div>
            <div class="answer">A: The account matures after completion of 21 years from the date of opening.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: Are the deposits eligible for tax benefits under Section 80C?</div>
            <div class="answer">A: Yes, deposits made in the Sukanya Samriddhi Scheme qualify for deduction under Section 80C of the Income Tax Act.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: Is the interest earned on the account taxable?</div>
            <div class="answer">A: No, the interest earned in the account is exempt from Income Tax under Section 10 of the Income Tax Act.</div>
        </div>

   

        <div class="faq-item">
            <div class="question">Q: What documents are required to open a Sukanya Samriddhi Scheme account?</div>
            <div class="answer">A: The necessary documents include identity proof, address proof, and the birth certificate of the girl child.</div>
        </div>

 

    

        <div class="faq-item">
            <div class="question">Q: Can the Sukanya Samriddhi Scheme account be transferred to another person?</div>
            <div class="answer">A: No, the account cannot be transferred to another person.</div>
        </div>

        <div class="faq-item">
            <div class="question">Q: Is there a penalty for not depositing the minimum amount in a financial year?</div>
            <div class="answer">A: Yes, a penalty may be applicable for not depositing the minimum amount specified in a financial year.</div>
        </div>

    </div>
</body>

</html>