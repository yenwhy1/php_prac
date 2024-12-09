<?php
if ($_POST) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "12345") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
