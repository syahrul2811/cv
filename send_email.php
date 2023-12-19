<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "arul.gaming28@email.com";
    $headers = "From: $email";

    // Mengirim email
    mail($to, $subject, $message, $headers);

    // Redirect ke halaman sukses atau lainnya
    header("Location: thank_you.html");
} else {
    // Jika formulir tidak disubmit, redirect ke halaman formulir
    header("Location: contact_form.html");
}
?>
