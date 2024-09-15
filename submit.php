<?php
//assign to variable
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$date = $_POST["date"];
$yearlevel = $_POST["year-level"];

echo "checkbox". json_encode($_POST["checkbox"]) ."<br>";
//echo to browser
echo "First Name: ", $first_name ."<br>";
echo "Last Name: ", $last_name ."<br>";
echo "Email: ", $email ."<br>";
echo "Password: ", $password ."<br>";
echo "Date: ", $date ."<br>";
echo "Year Level: ", $yearlevel ."<br>";

?>