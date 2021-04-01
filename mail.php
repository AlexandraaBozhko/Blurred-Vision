<?php 

class MailService {
    public function sendEmail(string $email, string $message, string $name, string $theme)
        {
           $to_email = "alexandra.bozhko25@gmail.com";
            $subject = "Fotosession request";
            $body = "Emeil: $email \nName: $name \nTheme: $theme\nMessage: $message";
            $headers = "From: sendmainphp@gmail.com";
            if (mail($to_email, $subject, $body, $headers)) {
                echo "Ваша заявка успешно отправлена";
            } else {
                echo "Email sending failed...";
            }
        }
}
?>