<?php

include("../config.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if($_GET['type'] == "all") {
        $query = mysqli_query($db, "SELECT * FROM users WHERE role='guru'");
        $data = array();
        while ($guru = mysqli_fetch_array($query)) {
            array_push($data, [
                "id" => $guru["id"],
                "nama" => $guru["nama"],
                "tempat_lahir" => $guru["tempat_lahir"],
                "tanggal_lahir" => $guru["tanggal_lahir"],
                "kode_guru" => $guru["kode_guru"],
                "kelas" => $guru["kelas"],
                "mapel" => $guru["mapel"],
                "jenis_kelamin" => $guru["jenis_kelamin"],
                "agama" => $guru["agama"],
                "alamat" => $guru["alamat"],
                "foto" => $guru["foto"],
            ]);
        }
        echo json_encode($data);
    } else if($_GET['type'] == "single") {
        $id = mysqli_escape_string($db, $_GET['id']);
        $query = mysqli_query($db, "SELECT * FROM users WHERE id = $id AND role='guru'");
    
        while ($guru = mysqli_fetch_array($query)) {
            echo json_encode([
                "id" => $guru["id"],
                "nama" => $guru["nama"],
                "tempat_lahir" => $guru["tempat_lahir"],
                "tanggal_lahir" => $guru["tanggal_lahir"],
                "kode_guru" => $guru["kode_guru"],
                "kelas" => $guru["kelas"],
                "mapel" => $guru["mapel"],
                "jenis_kelamin" => $guru["jenis_kelamin"],
                "agama" => $guru["agama"],
                "alamat" => $guru["alamat"],
                "foto" => $guru["foto"],
            ]);
            echo "\n";
            break;
        }
    }

}else{
    die("Method not allowed");
}