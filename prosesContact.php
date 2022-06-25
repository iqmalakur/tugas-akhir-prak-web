<?php
session_start();

$data = json_decode(file_get_contents("data/contact.json"));

$data[] = [
    "nama" => $_POST["nama"],
    "email" => $_POST["email"],
    "perihal" => $_POST["perihal"],
    "pesan" => $_POST["pesan"],
];

$stream = fopen("data/contact.json", "w");
fwrite($stream, json_encode($data));
fclose($stream);

$_SESSION["success"] = true;

header("location: contact.php");