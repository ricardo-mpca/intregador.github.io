<?php

$url = "https://api.cnptia.embrapa.br/smartsolos/expert/v1/health";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
   "Authorization: Bearer a0293d1a-92a3-3edb-a767-0f1bef644c56",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
?>