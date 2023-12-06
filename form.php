<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['description'];

    // $to = 'info@iftheselandscouldtalk.org';
    // $events = 'events@iftheselandscouldtalk.org';
    $test = 'max@max@indigenousfriends.org';
    $to = $test;

    $cc = 'pam@indigenousfriends.org, solivan@max@indigenousfriends.org';
    $subject = 'New contact form message from the ITLCT website';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "CC: $test" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

    if(mail($to, $subject, $body, $headers)){
        echo 'Message sent successfully';
    } else{
        echo 'Message sending failed';
    }
}
?>