<?php
session_start();

$data = json_decode(file_get_contents("data/alumni.json"));

$data[] = [
    "nama" => $_POST["nama"],
    "gender" => $_POST["gender"],
    "pekerjaan" => $_POST["pekerjaan"],
    "pesan" => $_POST["pesan"],
];

$stream = fopen("data/alumni.json", "w");
fwrite($stream, json_encode($data));
fclose($stream);

$_SESSION["success"] = true;

header("location: alumni.php");