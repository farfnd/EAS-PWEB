<?php

include '../config.php';

session_start();

if (!isset($_SESSION['user']['nama'])) {
    header("Location: /login.php");
} else if ($_SESSION['user']['role'] == 'siswa') {
    header("Location: /siswa");
}

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <link rel='stylesheet' href='https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css'>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/style.css" >

  <title>Daftar Guru - SMA Pagi Sore</title>
</head>
<body>
  <main class="grid grid-cols-12 gap-x-10">
    <!-- sidebar  -->
    <div class="col-span-3 flex flex-col h-screen px-3 py-4 space-y-8 pl-5" style="background: #3E8CFF;">
        <a href="/admin" class="flex items-center space-x-3">
            <img class="block w-16" src="/assets/img/logo.png" alt="Logo Sekolah">
            <div class="text-white flex flex-col">
                <span class="text-lg">Admin</span>
                <span class="font-bold text-xl">SMA Pagi Sore</span>
            </div>
        </a>
        <ul class="text-white space-y-2 text-lg pl-3">
          <ul class="text-white space-y-2 text-lg">
            <a href="daftar_guru.html">
                <li class="space-x-1"><img class="inline-block" src="/assets/img/daftar-guru.png" alt=""><span class="text-center text-gray-400 font-bold hover:text-white">Data Guru</span></li>
            </a>
            <li class="space-x-1"><img class="inline-block" src="/assets/img/daftar-guru.png" alt=""><span class="text-center text-gray-400 font-bold">Data Siswa</span></li>
            <li class="space-x-1"><img class="inline-block" src="/assets/img/daftar-guru.png" alt=""><span class="text-center text-gray-400 font-bold">Data Wali Murid</span></li>
        </ul>
    </div>
    <div class="col-span-9 font-semibold mr-10 min-h-screen">
      <!-- Table -->
      <div class="my-12 px-4 py-8 bg-red-400 mx-auto bg-white rounded-sm border border-gray-200">
        <!-- header  -->
        <div class="flex justify-between ">
          <h1 class="text-3xl">Selamat datang di portal Admin SMA Pagi Sore</h1>
          <a href="/logout.php" class="flex justify-between items-center py-1 px-4 rounded-full transition" style="background: #3E8CFF;"  onMouseOver="this.style.background='#3778da'" onMouseOut="this.style.background='#3E8CFF'"><span class="text-white font-semibold">Log Out</span></a>
        </div>
      </div>
    </div>
  </main>
</body>
</html>