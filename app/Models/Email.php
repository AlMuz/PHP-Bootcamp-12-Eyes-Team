<?php

namespace NewsSite\Models;

class Email
{
    public function sendEmail($name, $email, $subject, $message)
    {
        $to = "newssite@12eyes.com";

        $name = $this->testInput($name);
        $from = $this->testInput($email);
        $subject = $this->testInput($subject);
        $message = $this->testInput($message);

        $email = $name . " <" . $from . "> wrote the following:" . "\r\n" . $message;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ' . $from . "\r\n";

        mail($to, $subject, $email, $headers);

        $confirmation = "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        echo "<script type='text/javascript'>alert('$confirmation');</script>";
    }

    private function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
