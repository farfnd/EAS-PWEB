<?php 
 
include 'config.php';
 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

session_start();

if(isset($_SESSION['user'])) {
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    die(json_encode([
        "error" => 0,
        "nama" => $_SESSION['user']['nama'],
        "foto" => $_SESSION['user']['foto'],
    ]));
  } else {
    die(json_encode([
      "error" => 403,
      "role" => "-",
      "status" => "Method Not Allowed"
    ]));
  }
} else {
  die(json_encode([
    "error" => 403,
    "role" => "-",
    "status" => "Forbidden"
  ]));
}

 
?>
