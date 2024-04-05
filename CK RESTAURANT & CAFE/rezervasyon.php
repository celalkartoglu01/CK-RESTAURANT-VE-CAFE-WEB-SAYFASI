<?php
$isim = $_POST['name'];
$telefon = $_POST['phone'];
$saat = $_POST['clock'];
$not = $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "ckrestaurant";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
}

$sql = "INSERT INTO rezervasyon (ad, telno, saat, notlar) VALUES ('$isim', '$telefon', '$saat', '$not')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Rezervasyon başarıyla yapıldı.'); window.location='rezervasyon.html';</script>";
}else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
