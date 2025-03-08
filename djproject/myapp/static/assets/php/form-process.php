<?php

ini_set('display_errors', 0);

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// PHONE
if (isset($_POST["phone_number"])) {
    $phone_number = $_POST["phone_number"];
}

// SUBJECT
if (isset($_POST["subject"])) {
    $subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "متن پیام الزامی است ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "yourname@domain.com";

$bodySubject = "پیام جدید از سایت شخصی";

// prepare email body text
$Body = "";
$Body .= "نام: ";
$Body .= $name;
$Body .= "\n";
$Body .= "ایمیل: ";
$Body .= $email;
$Body .= "\n";
$Body .= "شماره موبایل: ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "موضوع: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "پیام: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $bodySubject, $Body);

// redirect to success page
if ($success && $errorMSG == "") {

    echo "پیام شما با موفقیت ارسال شد";

} else {

    if ($errorMSG == "") {
        echo "خطای ناشناخته :(";
    } else {
        echo $errorMSG;
    }

}


?>