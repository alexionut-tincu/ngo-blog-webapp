<?php
$password = 'add_your_pass';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo "Your password is: " . $password . "\n";
echo "Your hashed password is: " . $hashedPassword . "\n";
?>