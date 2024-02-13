<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('database.php');

    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $magaza = $_POST["magaza"];
    $girisTarihi = $_POST["girisTarihi"];
    $calismaTuru = $_POST["calismaTuru"];
    $calismaGunu = $_POST["calismaGunu"];
    $bitisTarihi = $_POST["bitisTarihi"];
    $telefon = $_POST["telefon"];
    $calismaSaatleri = isset($_POST["calismaSaatleri_1"]) ? 1 : 0;
    $calismaSaatleri2 = isset($_POST["calismaSaatleri_2"]) ? 1 : 0;
    $bilgi = $_POST["bilgi"];

    $sehir_id = $_POST["sehir"];
    $sehir_name = $_POST["sehir_city"];

    $uploadDir = "uploads/"; 
    $uploadFile = $uploadDir . basename($_FILES["profilResmi"]["name"]);

    $sql = "INSERT INTO employees (first_name, last_name, email, store, city, city_id, hire_date, work_type, total_worked_day, work_end_date, phone_number, is_twelve_nine_work, is_eleven_twenty_work, information, profile_picture, is_deleted)
            VALUES ('$ad', '$soyad', '$email', '$magaza', '$sehir_name', '$sehir_id', '$girisTarihi', '$calismaTuru', '$calismaGunu', '$bitisTarihi', '$telefon', '$calismaSaatleri', '$calismaSaatleri2', '$bilgi', '$uploadFile', 0)";

    if ($mysqli->query($sql) === TRUE) {
        // Get the last inserted ID
        $employee_id = $mysqli->insert_id;

        // Use the employee_id in the second SQL query
        $pts_personel_sql = "INSERT INTO employee_login (email, password, employee_id) VALUES ('$email', 'pts2024!', $employee_id)";

        if ($mysqli_personel->query($pts_personel_sql) === TRUE) {
            echo "Yükleme başarılı";
            include('index.php');
        } else {
            echo "Error: " . $pts_personel_sql . "<br>" . $mysqli->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>
