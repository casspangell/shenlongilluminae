<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

ini_set('allow_url_fopen',1);

if (isset($_POST['submit'])) {

    $sender = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $recipient = 'jennifer@shenlongilluminae.com';

    $subject = "New Request";
    $message = $name." wishes to book a free consulation. Email: ".$sender." Phone: ".$phone;
    $headers = 'From:' . $sender;

    // $secretKey = "6LftqOIcAAAAABeRXjVe59Q4m7-2brQ_eOhKPQKb";
    // $responseKey = $_POST['g-recaptcha-response'];
    // $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey";

    // echo file_get_contents($url);
    // $verify = json_decode(file_get_contents($url));

    //if ($verify->success) {

    if (empty($sender)) {
        echo "<span>Invalid Email Address</span>";
    }
    else
    {
        if (mail($recipient, $subject, $message, $headers))
        {
            //header('Location: index.php?mailsent');
            echo "<span>Message Sent Successfully</span>";
        }
        else
        {
            echo "<span>Error: Invalid Captcha Please Try Again</span>";
        }
    }


//}

}

?>