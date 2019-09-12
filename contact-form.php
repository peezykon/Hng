<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $title = $_POST["title"];
    $message = $_POST["message"];

    $email_form = "plmakinbode@gmail.com";
    $email_subject = "new form submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n". 
                    "User Title: $title.\n". 
                    "User message: $message.\n";

    $to = "plmakinbode@hotmail.com";
    $headers = "from: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to, $email_subject, $email_body, $header);
    header("Location: akinwunmi.html")
?>