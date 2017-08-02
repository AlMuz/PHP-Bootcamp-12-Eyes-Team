<?php
if(isset($_POST["Submit"])) {
    $name = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $comment = $_REQUEST['message'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html;charset=utf-8 \r\n";
    $message = "<p>New order</p>
    <p><strong>Name</strong> $name</p>
    <p><strong>Email</strong> $email</p>
    <p><strong>Subject</strong> $subject</p>
    <p><strong>Comment:</strong> $comment</p>";
    //mail("almuz@inbox.lv", "New order",$message, $headers);
    echo $message;
}