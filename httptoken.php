<?php

//? Token de acceso a tu Bot
$botToken ="7078542315:AAHtlsbw2LbgQ48eMVbPtfcslqLKQ4Noafo";

//? URL del Webhook
$webhookUrl ="";

//? Configura el webhook mediante una solicitud http
$apiUrl = "https://api.telegram.org/bot".$botToken."/setwebhook?url=$webhookUrl";
$response = file_get_contents($apiUrl);

echo $response;

?>