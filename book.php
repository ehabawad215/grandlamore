<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grand_lamor";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استقبال البيانات من النموذج
$name = $_POST['name'];
$phone = $_POST['phone'];
$occasion = $_POST['occasion'];
$guests = $_POST['guests'];
$event_date = $_POST['date'];
$budget = $_POST['budget'];

// إدخال البيانات إلى قاعدة البيانات
$sql = "INSERT INTO bookings (name, phone, occasion, guests, event_date, budget)
        VALUES ('$name', '$phone', '$occasion', $guests, '$event_date', '$budget')";

if ($conn->query($sql) === TRUE) {
    echo "تم تسجيل الحجز بنجاح!";
} else {
    echo "حدث خطأ أثناء تسجيل الحجز: " . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>
