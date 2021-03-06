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
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Daftar Guru - SMA Pagi Sore</title>
</head>
<body>
  <main class="grid grid-cols-12 gap-x-10">
    <!-- sidebar  -->
    <div class="col-span-3 flex flex-col h-screen px-3 py-4 space-y-8 pl-5" style="background: #3E8CFF;">
        <div class="flex items-center space-x-3">
            <img class="block w-16" src="/assets/img/logo.png" alt="Logo Sekolah">
            <div class="text-white flex flex-col">
                <span class="text-lg">Admin</span>
                <span class="font-bold text-xl">SMA Pagi Sore</span>
            </div>
        </div>
        <ul class="text-white space-y-2 text-lg pl-3">
          <ul class="text-white space-y-2 text-lg">
            <li class="space-x-1"><img class="inline-block" src="/assets/img/jadwal-pelajaran.png" alt=""><span class="text-center text-white font-bold">Data Guru</span></li>
            <li class="space-x-1"><img class="inline-block" src="/assets/img/daftar-guru.png" alt=""><span class="text-center text-gray-400 font-bold">Data Siswa</span></li>
            <li class="space-x-1"><img class="inline-block" src="/assets/img/daftar-guru.png" alt=""><span class="text-center text-gray-400 font-bold">Data Wali Murid</span></li>
        </ul>
    </div>
    <div class="col-span-9 font-semibold mr-10 min-h-screen">
      <!-- Table -->
      <div class="mt-12 px-4 bg-red-400 mx-auto bg-white rounded-sm border border-gray-200">
        <!-- header  -->
        <div class="flex justify-between ">
          <h1 class="text-3xl mt-8">Daftar Guru SMA Pagi Sore</h1>
          <div class="flex items-end space-x-3">
            <button class="flex justify-between items-center  py-1 px-4 rounded-full transition" style="background: #3E8CFF;"  onMouseOver="this.style.background='#3778da'" onMouseOut="this.style.background='#3E8CFF'"><img src="/assets/img/tambah-baru.png" alt=""><span class="text-white font-semibold pl-1">Tambah Baru</span></button>
            <button class="flex justify-between items-center text-white py-1 px-4 rounded-full font-semibold transition" style="background: #3E8CFF;"  onMouseOver="this.style.background='#3778da'" onMouseOut="this.style.background='#3E8CFF'" ><img src="/assets/img/unduh-rekap.png" alt=""><span class="text-white font-semibold pl-1">Unduh Rekap</span></button>
          </div>
        </div>
        <div class="p-3 mt-8">
            <div class="">
                <table id="table-guru" class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nama Guru</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Kode</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Usia</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Kelas</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                              <div class="flex items-center">
                                  <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                  <div class="text-gray-800 flex flex-col">
                                    <span class="font-medium ">Alex Shatov</span>
                                    <span class="text-gray-400">05111940000050</span>
                                  </div>
                              </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">MA</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">40 Tahun</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex flex-col">
                                  <span>XII</span>
                                  <span class="text-gray-400">Bahasa Jawa</span>
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex flex-col space-y-1">
                                  <button class="transition rounded-full text-white py-1 font-semibold" style="background: #5D5FEF;" onMouseOver="this.style.background='#5052ce'" onMouseOut="this.style.background='#5D5FEF'">Lihat Detail</button>
                                  <div class="flex justify-between space-x-2">
                                    <button class="transition rounded-full text-white w-1/2 py-1 px-3" style="background: #FEC400;" onMouseOver="this.style.background='#ca9b01'" onMouseOut="this.style.background='#FEC400'">Edit</button>
                                    <button class="transition rounded-full text-white w-1/2 py-1 px-3" style="background: #F12B2C;" onMouseOver="this.style.background='#c72424'" onMouseOut="this.style.background='#F12B2C'">Hapus</button>
                                  </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    $( document ).ready(function(){
      let table = $('#table-guru').DataTable();
      if($(window).outerHeight() < 937){
        table.page.len(10).draw(); 
      }else if($(window).outerHeight() >= 937){
        // $('#table-barang').attr('data-page-length', '25')
        table.page.len(25).draw(); 
      }

      /* ======== GET GURU DATA ======== */
      $.ajax({
        url: "/admin/R_guru.php",
        method: "GET",
        data: {
          type: "all"
        },
        success: (response) => {
          console.log(response)
        }
      })
    })

  </script>
</body>
</html>