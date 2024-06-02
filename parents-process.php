<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mother_prefix = $_POST['mother-prefix'];
    $mother_name = $_POST['mother-name'];
    $mother_aadhar = $_POST['mother-aadhar'];
    $father_prefix = $_POST['father-prefix'];
    $father_name = $_POST['father-name'];
    $father_aadhar = $_POST['father-aadhar'];
    $deposit_time = $_POST['deposit-time'];
    $marriage_certificate = isset($_POST['marriage-certificate']) ? 1 : 0;
    $divorce_certificate = isset($_POST['divorce-certificate']) ? 1 : 0;
    $death_certificate = isset($_POST['death-certificate']) ? 1 : 0;

    $sql = "INSERT INTO `parents` (mother_prefix, mother_name, mother_aadhar, father_prefix, father_name, father_aadhar, deposit_time, marriage_certificate, divorce_certificate, death_certificate)
            VALUES ('$mother_prefix', '$mother_name', '$mother_aadhar', '$father_prefix', '$father_name', '$father_aadhar', '$deposit_time', '$marriage_certificate', '$divorce_certificate', '$death_certificate')";

    if ($conn->query($sql) === TRUE) {
        echo "<div style='text-align:center;'><p>Parents details have been submitted successfully!</p></div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
