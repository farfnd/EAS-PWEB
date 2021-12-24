<?php

include("../config.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($_GET['type'] == "all") {
        $query = mysqli_query($db, "SELECT * FROM jadwal_pelajaran");
        $data = array();
        while ($mapel = mysqli_fetch_array($query)) {
            array_push($data, [
                "id" => $mapel["id"],
                "mata_pelajaran" => $mapel["mata_pelajaran"],
                "tanggal" => $mapel["tanggal"],
                "jam_mulai" => $mapel["jam_mulai"],
                "jam_selesai" => $mapel["jam_selesai"],
                "kode_guru" => $mapel["kode_guru"],
            ]);
        }
        echo json_encode($data);
    } 

}else{
    die("Method not allowed");
}