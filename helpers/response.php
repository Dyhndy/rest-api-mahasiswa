<?php

function sendResponses ($status, $message, $data = null, $httpCode = 200) {
    https_response_code($httpsCode);
    header("Content-Type: application/json");
    echo json_encode([
    "status" => $status,
    "message" => $message,
    "data => $data"
    ]);
    exit();
}