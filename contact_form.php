<?php

    $name = $_POST["name"];
    $user_email = $_POST["email"];
    $message = $_POST["message"];

    $email_from = "kalisz90@vp.pl";

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n"."User Email: $user_email.\n"."User Message: $message.\n";

    $to = "kalisz90@vp.pl";

    $headers .= "From: $email_from \r\n";
    $headers .= "Reply to: $user_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>