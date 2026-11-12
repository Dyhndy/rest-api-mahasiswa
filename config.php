<?php

require_once __DIR__ . "helpers/response.php";

myqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_mhsdly";

$koneksi = @myqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    sendResponse(
        false,
        "koneksi ke database gagal",
        null,
        500
    );
}