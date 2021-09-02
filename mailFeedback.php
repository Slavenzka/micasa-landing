<?php

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userComment = $_POST['content'];
        $messageSubject = 'Новое сообщение от micasa.club';

        $to = "Info@micasa.club";
        $body = "Отримано нове звернення!\r\n";
        $body .= "Від кого: ".$userName. "\r\n";
        $body .= "Email звернувся: ".$userEmail. "\r\n";
        $body .= "Зміст запиту: ".$userComment. "\r\n";

        $headers[] = 'From: micasa.club';
        $headers[] = 'Reply-To: micasa.club';

        mail($to, $messageSubject, $body, implode("\r\n", $headers));
    }
}
