<?php


$testData = json_encode([
    [
        'id' => 26,
        'from' => 6,
        'to' => 7,
        'type' => 3,
        'baggage' => 29,
        'seat' => "15A",
    ],
    [
        'id' => 263,
        'from' => 2,
        'to' => 3,
        'type' => 2,
        'baggage' => null,
        'seat' => "56B",
    ],
    [
        'id' => 9852,
        'from' => 5,
        'to' => 6,
        'type' => 2,
        'baggage' => null,
        'seat' => null,
    ],
    [
        'id' => 3569,
        'from' => 1,
        'to' => 2,
        'type' => 1,
        'baggage' => 344,
        'seat' => "45A",
    ],
    [
        'id' => 598,
        'from' => 3,
        'to' => 4,
        'type' => 3,
        'baggage' => null,
        'seat' => "23C",
    ], [
        'id' => 1254,
        'from' => 4,
        'to' => 5,
        'type' => 1,
        'baggage' => null,
        'seat' => null,
    ]
        ], JSON_FORCE_OBJECT);

$ch = curl_init('http://' . $_SERVER['HTTP_HOST'] . "/index.php");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "ticketData=" . $testData);
                                                                                                              

$result = curl_exec($ch);
curl_close($ch);