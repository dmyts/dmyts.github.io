<?php
session_start();
include "./config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $passw = $_POST['passw'];

    // Debugging: output received data
    echo "Received username: $username, password: $passw<br>";

    // Prepare and bind
    $stmt = $conn->prepare("SELECT passw FROM login_admin WHERE username = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("s", $username);

    // Execute the statement
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();

        // Debugging: check number of rows
        echo "Number of rows found: " . $result->num_rows . "<br>";

        // Check if the user exists
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['passw'];

            // Verify the password
            if (password_verify($passw, $hashed_password)) {
                // Password is correct, set session and redirect to admin page
                $_SESSION['login'] = true;
                header('Location: ./admin.php');
                exit; // Stop further execution
            } else {
                // Invalid password
                echo "Invalid username or password.";
            }
        } else {
            // User not found
            echo "Invalid username or password.";
        }
    } else {
        // Error executing the statement
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
