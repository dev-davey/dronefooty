<html>
<?php
    $message_sent = false;
    if(isset($_POST['user_email'])&& $_POST['user_email'] != ''){
        if(filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)&& $_POST['user_message']!=''){
            $userName = $_POST['user_name'];
            $userEmail = $_POST['user_email'];
            $userMessage = $_POST['user_message'];
            $lastName = $_Post['user_last'];
            $to = "admin@sdcountydrone.com";
            $subject = "message from site";
            $body = "";
            $body .= "From: ".$userName. "\r\n";
            $body .= "Last: ".$lastName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$userMessage. "\r\n";
            mail($to,$subject,$body);

            $message_sent = true;
        }
    }
?>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head> 
<body>
<?php
if($message_sent):
?>
<div class="container">
    <div class="row mt-5">
        <div class="col text-center">
        <h1 class="">Message Sent</h1>
        <a class="btn-info btn-lg" href="https://sdcountydrone.com/index.html">Return To Home</a>
        </div>
    </div>
</div>    


<?php
else:
?>

<h1>Error</h1>

<?php
endif;
?>

</body>
</html>