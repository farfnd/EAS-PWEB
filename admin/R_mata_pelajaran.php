<?php

include("../config.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($_GET['type'] == "all") {
        $query = mysqli_query($db, "SELECT * FROM mata_pelajaran");
        $data = array();
        while ($mapel = mysqli_fetch_array($query)) {
            array_push($data, [
                "id" => $mapel["id"],
                "nama_mapel" => $mapel["nama_mapel"],
                "kode_mapel" => $mapel["kode_mapel"],
                "jam_mapel" => $mapel["jam_mapel"],
                "kode_guru" => $mapel["users_kode_guru"]
            ]);
        }
        echo json_encode($data);
    } else if($_GET['type'] == "single") {
        $id = mysqli_escape_string($db, $_GET['id']);
        $query = mysqli_query($db, "SELECT * FROM mata_pelajaran WHERE id = $id");
    
        while ($mapel = mysqli_fetch_array($query)) {
            echo json_encode([
                "id" => $mapel["id"],
                "nama_mapel" => $mapel["nama_mapel"],
                "kode_mapel" => $mapel["kode_mapel"],
                "jam_mapel" => $mapel["jam_mapel"],
                "kode_guru" => $mapel["users_kode_guru"]
            ]);
            echo "\n";
            break;
        }
    }

}else{
    die("Method not allowed");
}