<?php

$name = $_POST['name'];
$recaptcha = $_POST['g-recaptcha-response'];

if (!$name){
    echo 'wirte name';
} elseif (!$recaptcha){
    echo'check the captcha';;
} else {

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => 'secret=[Google=ReCaptcha=Secret=Key]&response=' . $recaptcha,
        CURLOPT_RETURNTRANSFER => true, 
        CURLOPT_SSL_VERIFYHOST => false, 
        CURLOPT_SSL_VERIFYPEER => false 
    ]);
    $output = curl_exec($ch);
    curl_close($ch);
    $result= json_decode($output, true);
   if($result['success']===false){ 
    echo'check the captcha';
   }else{
    echo'continue';
   }
}
?>