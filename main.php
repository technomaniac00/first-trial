<?php
if(isset($_POST['submit'])) {
    $to = "example@gmail.com";
    echo $subject = "Form Tutorial";
    echo $name_field = $_POST['name'];
    echo $email_field = $_POST['Email'];
    echo $message = $_POST['query'];

    $body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";

    echo "Data has been submitted to $to!";
    mail($to, $subject, $body);
} else {
    echo "blarg!";
}
?>