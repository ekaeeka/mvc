<?php
$to = "admin@site.ru";
$subject = "Заголовок письма";
$message = 'text';

$headers = "Content-type:text/html; charset=windows-1251 \r\n";
$headers .= "From: admin@site.ru . \r\n";
$headers = "Reply to admin@site.ru";

mail($to, $subject, $message, $headers);
