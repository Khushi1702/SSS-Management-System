<?php
include("conn.php");

// Function to check the Aadhar status
function checkStatus($aadhar) {
    global $conn;

    // Query the database to check if the Aadhar is in the approved list
    $result = $conn->query("SELECT * FROM pending_list WHERE aadhar = '$aadhar'");

    if ($result->num_rows > 0) {
        return "Approved";
    } else {
        return "Request not approved. Contact the government office for more detials.";
    }
}

// Process form submission
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $aadhar = $_POST['aadhar'];
    $status = checkStatus($aadhar);
    $message = $status;
    if ($status === "Approved") {
        header("Location: transactions.php"); // Redirect to transaction page when approved
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Status </title>
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
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
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
            background-color: rgba(230, 230, 250, 0.8);
        }

        .active,
        .collapsible:hover {
            background-color: rgba(230, 230, 250, 0.8);
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
        <h1 style="font-size:30px">Check Status</h1>
    </center>
    <br>
	
	<center>
        <h6 style="font-size:15px">Check the status of your application here!</h6>
    </center>

    <div class="container">
        <div class="content">
            <form method="post" action="">
                <p>Enter your Aadhar card number:</p>
                <input type="text" name="aadhar" pattern="[0-9]{12}" maxlength="12" required onkeypress="return validate(event)" style="background-color: rgba(255, 255, 255, 0.9); color: #333;">
                <br>
                <br>
                <button type="submit" name="submit" style="background-color: rgba(255, 255, 255, 1); color: #333;">Submit</button>
            </form>
            <p id="status"><?php echo $message; ?></p>
        </div>
    </div>

    <script>
        function validate(event) {
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