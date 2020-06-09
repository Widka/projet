<?php 

$url = "https://api.chucknorris.io/jokes/random";
// $params = "?limit=20&category=blague";

// $jwt = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiI1ZGRlY2VmMGE4ZTNkIiwiZXhwIjoiMjAxOS0xMS0yOSAyMDozMDo1NiIsInRlc3QiOiIrXC89In0.bZhb_fgx2IHj-M6Lbr3B-CyFoVZPzvtFzbpBsrBsKnzQFSomB-UFCTXZaNolcIWvslsvorq_YLjTgMZRpfSsRQ";

$headers = [
    "Content-Type: application/json",
    // "Authorization: Bearer " . $jwt
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_TIMEOUT, 60);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
$jsonResponse = curl_exec($curl);
$response = json_decode($jsonResponse, 1);
curl_close($curl);

// echo "‹pre›";
echo json_encode([
    "data" => $response
]);
// echo "‹/pre›";
