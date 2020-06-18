<?php

$email = $_POST["inputEmail"];

//var_dump($_POST);

//Inicializa uma sessao curl
$ch = curl_init();

//Define uma transferencia curl
//estou tratando a resposta do reCaptcha fornecida pelo usuario
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//Passo as informacoes minhas de host para o servidor da Google 
//para q eu possa receber as informacoes do captcha
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LfRTaYZAAAAAAL0FfxTZB1vjlpYsjpLQVx8ZQ53",
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptcha);
if ($recaptcha["success"] === true) {

    echo "OK: " . $_POST["inputEmail"];

} else {

    header("Location: ex-4.php");

}

?>