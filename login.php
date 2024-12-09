<?php
if ($_POST) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "12345") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
