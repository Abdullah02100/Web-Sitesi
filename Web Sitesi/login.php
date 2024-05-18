<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $expected_username = "g231210035@sakarya.edu.tr"; // Öğrenci numaranızı buraya yazın
    $expected_password = "g231210035"; // Öğrenci numaranızı buraya yazın

    if ($username === $expected_username && $password === $expected_password) {
        echo "Hoşgeldiniz " . explode('@', $username)[0];
    } else {
        header("Location: login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>
