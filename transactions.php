<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        h1 {
            text-align: center;
            font-size: 30px;
            color: #fff;
            margin-top: 30px;
        }

        form {
             max-width: 500px;
            margin: 20px auto;
            padding: 20px;
       
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #fff;
        }

        input[type="text"],
        select,
        input[type="date"] {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
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

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff0000;
            margin-top: 5px;
        }

        /* New style for success message */
        .success-message {
            color: #fff;
            margin-top: 10px;
            text-align: center;
            font-weight: bold;
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

    <h1> Transactions</h1>
<br>

    <!-- Transaction Form Section -->
    <form onsubmit="return validateTransactionForm()" method="post" action="">
        <!-- Add your transaction form fields here -->
        <label for="account_number">Account Number:</label>
        <input type="text" placeholder="Enter account number" name="account_number" id="account_number" pattern="[0-9]{12}" maxlength=" 12" required onkeypress=" validateAccountNumber(event)">

        <label for="transaction_type">Transaction Type:</label>
        <select id="transaction_type" name="transaction_type" required>
            <option value="">Select transaction type</option>
            <option value="Deposit">Deposit</option>
            <option value="Withdrawal">Withdrawal</option>
        </select>

        <!-- New Section for Mode of Payment -->
        <label for="mode_of_payment">Mode of Payment:</label>
        <select id="mode_of_payment" name="mode_of_payment" required>
            <option value="">Select mode of payment</option>
            <option value="UPI">UPI</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Debit Card">Debit Card</option>
        </select>

        <label for="amount">Amount:</label>
        <input type="text" placeholder="Enter amount (up to 1.5 lakhs)" name="amount" id="amount" pattern="[0-9]{6}" maxlength="6" required onkeypress="return validateAmount(event)">

        <label for="transaction_date">Transaction Date:</label>
        <input type="date" id="transaction_date" name="transaction_date" required>

        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
          function validateAccountNumber(event) {
            // Allow only alphanumeric characters
            var regex = /^[0-9.]*$/;
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }

        function validateAmount(event) {
            // Allow only numeric characters and a single dot
            var regex = /^[0-9.]*$/;
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }

            // Allow only one dot in the amount
            if (key === '.' && event.target.value.includes('.')) {
                event.preventDefault();
                return false;
            }
        }

        function validateTransactionForm() {
            // ... (existing validation code remains unchanged)

            // For demo purposes, simulate successful form submission
            var isFormValid = true; // Replace this with your actual form validation logic

            if (isFormValid) {
                // Show success message
                showSuccessMessage("You will be redirected to a payment gateway. This may take a few minutes.");

                // For demo purposes, prevent actual form submission
                return false;
            }

            // If form validation fails, return false to prevent submission
            return false;
        }

        function showSuccessMessage(message) {
            // Create success message element
            var successMessageElement = document.createElement("div");
            successMessageElement.className = "success-message";
            successMessageElement.textContent = message;

            // Append success message
            var form = document.querySelector("form");
            form.appendChild(successMessageElement);

            // Optional: Hide success message after a certain time (e.g., 3 seconds)
            setTimeout(function () {
                successMessageElement.remove();
            }, 4000); // 4000 milliseconds (4 seconds)
        }
    </script>
</body>

</html>