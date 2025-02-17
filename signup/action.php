<?php
if (isset($_POST["submit_button"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $date_of_birth = $_POST["date_of_birth"];
    $password1 = $_POST["password1"];

}
echo "first_name = " . $first_name . "<br>";
echo "last_name = " . $last_name . "<br>";
echo "phone_number = " . $phone_number  . "<br>";
echo "email = " . $email . "<br>";
echo "date_of_birth = " . $date_of_birth . "<br>";
echo "password = " . $password1 . "<br>";
?>