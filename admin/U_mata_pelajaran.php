<?php

include("../config.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = mysqli_escape_string($db, $_POST['id_mapel']);
    $nama_mapel = mysqli_escape_string($db, $_POST['nama_mapel']);
    $kode_mapel = mysqli_escape_string($db, $_POST['kode_mapel']);
    $kode_guru = mysqli_escape_string($db, $_POST['kode_guru']);
    $jam_mapel = mysqli_escape_string($db, $_POST['jam_mapel']);

    $query = mysqli_query(
        $db, 
        "UPDATE mata_pelajaran SET nama_mapel='$nama_mapel', kode_mapel='$kode_mapel', users_kode_guru='$kode_guru', jam_mapel='$jam_mapel' WHERE id=$id"
    );
    
    if ($query) {
        die(json_encode([
            "error" => 0,
            "status" => "OK"
        ]));
    } else {
        die(json_encode([
            "error" => 500,
            "status" => "Internal Server Error",
            "message" => mysqli_error($db)
        ]));
    }
}else{
    die(json_encode([
        "error" => "Method not allowed"
    ]));
}