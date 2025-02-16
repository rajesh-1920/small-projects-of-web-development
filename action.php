<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize it
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $password = htmlspecialchars($_POST['password']);
    $repeat_password = htmlspecialchars($_POST['repeat_password']);

    // Simple validation to check if passwords match
    if ($password !== $repeat_password) {
        $error_message = "Passwords do not match!";
    } else {
        // You can save the data to the database or show success message
        $success_message = "Sign up successful! Welcome, $first_name $last_name.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <!-- Header start -->
    <header>
        <p>Sign up form<br></p>
    </header>
    <!-- Main part -->
    <hr>
    <main>
        <h3>Please fill up the form</h3>

        <!-- Display success or error message -->
        <?php if (isset($success_message)) { echo "<p style='color: green;'>$success_message</p>"; } ?>
        <?php if (isset($error_message)) { echo "<p style='color: red;'>$error_message</p>"; } ?>

        <form action="action.php" method="POST">
            <input type="text" name="first_name" placeholder="First name" required><br><br>
            <input type="text" name="last_name" placeholder="Last name" required><br><br>
            <input type="number" name="phone" placeholder="Phone number" required><br><br>
            <input type="email" name="email" placeholder="Email address" required><br><br>
            
            <div>
                Date of birth <br>
                <input type="date" name="dob" required><br><br>
            </div>
            
            <input type="password" name="password" placeholder="Create a password" required><br><br>
            <input type="password" name="repeat_password" placeholder="Repeat the password" required><br><br>

            <input type="submit" value="Sign up">
        </form>
    </main>
    <hr>
    <!-- Footer part -->
    <footer>
        <p>footer</p>
    </footer>
</body>

</html>
