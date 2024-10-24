<?php
session_start();
include('D:/xampp/htdocs/Uchhero/Project/content/connection.php');

$email_name = $password = $confirm_password = $first_name = $second_name = $contact_no = "";

if (isset($_POST['submit'])) {
    // Sanitize inputs using mysqli_real_escape_string to prevent SQL injection 
    $email_name = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $second_name = mysqli_real_escape_string($conn, $_POST['second_name']);
    $contact_no = mysqli_real_escape_string($conn, $_POST['contact_number']);

    // Server-side validation for password confirmation 
    if ($password !== $confirm_password) {
        $_SESSION['error'] = 'Passwords do not match!';
    } elseif (!preg_match('/^[0-9]{10}$/', $contact_no)) {
        // Validate contact number (10 digits)         
        $_SESSION['error'] = 'Contact number must be 10 digits!';
    } elseif (!filter_var($email_name, FILTER_VALIDATE_EMAIL)) {
        // Validate email format         
        $_SESSION['error'] = 'Invalid email format!';
    } else {
        // Insert sanitized data into the database         
        $qry = mysqli_query($conn, "INSERT INTO login (u_name, pwd, first_name, second_name, contact_no, rol)                                      VALUES ('$email_name', '$password', '$first_name', '$second_name', '$contact_no', 'u')");

        if (!$qry) {
            // Output detailed error message for database issues             
            $_SESSION['error'] = 'There is an error: ' . mysqli_error($conn);
        } else {
            // Set success message and redirect             
            $_SESSION['success'] = 'Account created successfully!';
            // Clear the previous data
            $email_name = $password = $confirm_password = $first_name = $second_name = $contact_no = "";
            header("Location: login.php");
            exit(); // Stop script execution         
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('http://localhost/Uchhero/Project/pics/b_5.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .error-message {
            color: red;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="flex flex-col items-center justify-center min-h-screen relative z-10">
        <form id="accountForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg" method="POST" action="">
            <img class="mx-auto h-48 w-48 object-contain" src="http://localhost/Uchhero/Project/pics/Uchhero.png" alt="Uchhero Logo">

            <h2 class="text-2xl font-bold text-center mb-6">Create an Account</h2>

            <table class="w-full">
                <tr>
                    <td class="w-1/2">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">
                                First Name
                            </label>
                            <input type="text" id="first_name" name="first_name" placeholder="First Name" value="<?php echo htmlspecialchars($first_name); ?>" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <p id="firstNameError" class="error-message"></p>
                        </div>
                    </td>
                    <td class="w-1/2">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="second_name">
                                Second Name
                            </label>
                            <input type="text" id="second_name" name="second_name" placeholder="Second Name" value="<?php echo htmlspecialchars($second_name); ?>" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <p id="secondNameError" class="error-message"></p>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="contact_number">
                    Contact Number
                </label>
                <input type="tel" id="contact_number" name="contact_number" placeholder="Contact Number" value="<?php echo htmlspecialchars($contact_no); ?>" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p id="contactNumberError" class="error-message"></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email Address
                </label>
                <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($email_name); ?>" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p id="emailError" class="error-message"></p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input type="password" id="password" name="password" placeholder="Password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p id="passwordError" class="error-message"></p>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">
                    Confirm Password
                </label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p id="confirmPasswordError" class="error-message"></p>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" name="submit" class="bg-[#25523B] hover:bg-[#62BD69] text-white hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                    Create Account
                </button>
            </div>
        </form>
    </div>

    <?php
    // Display error or success messages
    if (isset($_SESSION['error'])) {
        echo "<script>alert('" . $_SESSION['error'] . "');</script>";
        unset($_SESSION['error']); // Clear the message after displaying it
    }
    if (isset($_SESSION['success'])) {
        echo "<script>alert('" . $_SESSION['success'] . "');</script>";
        unset($_SESSION['success']); // Clear the message after displaying it
    }
    ?>
    <script>
        document.getElementById('accountForm').addEventListener('submit', function(event) {
            let isValid = true;

            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach(p => p.textContent = '');

            // Validate first name
            const firstName = document.getElementById('first_name');
            if (!firstName.value.trim()) {
                document.getElementById('firstNameError').textContent = 'First Name is required';
                isValid = false;
            }

            // Validate second name
            const secondName = document.getElementById('second_name');
            if (!secondName.value.trim()) {
                document.getElementById('secondNameError').textContent = 'Second Name is required';
                isValid = false;
            }

            // Validate contact number
            const contactNumber = document.getElementById('contact_number');
            const contactNumberValue = contactNumber.value.trim();
            if (!/^[0-9]{10}$/.test(contactNumberValue)) {
                document.getElementById('contactNumberError').textContent = 'Contact Number must be exactly 10 digits!';
                isValid = false;
            }

            // Validate email
            const email = document.getElementById('email');
            const emailValue = email.value.trim();
            if (!emailValue || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email!';
                isValid = false;
            }

            // Validate password
            const password = document.getElementById('password');
            if (!password.value) {
                document.getElementById('passwordError').textContent = 'Password is required!';
                isValid = false;
            }

            // Validate confirm password
            const confirmPassword = document.getElementById('confirm_password');
            if (password.value !== confirmPassword.value) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match!';
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if invalid
            }
        });
    </script>
</body>

</html>