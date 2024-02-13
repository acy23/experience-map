<?php
    include('database.php');
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";

        // Prevent SQL injection
        $email = $mysqli->real_escape_string($email);
        $password = $mysqli->real_escape_string($password);

        $query = "SELECT * FROM logins WHERE email='$email' AND password='$password'";
        $result = $mysqli->query($query);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            $_SESSION["user_email"] = $user["email"];
            $_SESSION["username"] = "Admin";
            $_SESSION["login_message"] = "Giriş Başarılı!";

            header("Location: index.php");
            exit();
        } else {
            $_SESSION["login_message"] = "Hatalı Şifre veya Email!";
            header("Location: login.php");
            exit();
        }

        $mysqli->close();
    }
?>