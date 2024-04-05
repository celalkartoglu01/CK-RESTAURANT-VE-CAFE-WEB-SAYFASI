<?php


$isim = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['phone'];
$mesaj = $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "ckrestaurant";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
}

$sql = "INSERT INTO iletisim (ad, eposta, telno, mesaj) VALUES ('$isim', '$email', '$telefon', '$mesaj')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Formunuz başarıyla gönderildi..'); window.location='iletisim.html';</script>";
}else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

