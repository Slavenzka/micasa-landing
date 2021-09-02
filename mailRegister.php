<?php

if (filter_var($_POST['phone'])) {
    if (isset($_POST['name']) && isset($_POST['phone'])) {
        $companyName = $_POST['name'];
        $companyPhone = $_POST['phone'];
        $companyManager = $_POST['representative'];
        $messageSubject = 'Новая заявка от micasa.club';

        $to = "Info@micasa.club";
        $body = "Отримано нове звернення!\r\n";
        $body .= "Від компанії: ".$companyName. "\r\n";
        $body .= "Контактний телефон: ".$companyPhone. "\r\n";
        $body .= "Контактна особа: ".$companyManager. "\r\n";

        $headers[] = 'From: micasa.club';
        $headers[] = 'Reply-To: micasa.club';

        mail($to, $messageSubject, $body, implode("\r\n", $headers));
    }
}
