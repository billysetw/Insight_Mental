<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Dashboard</title>

   <!-- bootstrap -->
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   <!-- jquery -->
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

   <!-- js chart -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

   <!-- bootstrap icon & font awasome -->
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
      rel="stylesheet">
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

   <!-- MDB icon -->
   <link rel="icon" href="../assets/img/logo-admin.png" type="image/x-icon" />

   <!-- css -->
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
   <!-- Main Content -->
   <div class="area">
      <!-- navigasi halaman -->
      <div class="header">
         <h1>Dashboard</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
         </nav>
      </div>
      <!-- Fitur -->
      <div class="cards">
         <div class="col">
            <div class="card text-center">
               <div class="card-body">
                  <h5 class="card-title">Users</h5>
                  <p class="card-text">untuk mengelola data data pada pengguna aplikasi Insight Mental ini.</p>
                  <button type="button" class="btn-go">
                     <a href="users.php"> Go >> </a>
                  </button>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card text-center">
               <div class="card-body">
                  <h5 class="card-title">Information</h5>
                  <p class="card-text">untuk mengelola informasi seputar Kesehatan Mental dari sumber yang dipilih.</p>
                  <button type="button" class="btn-go">
                     <a href="information.php"> Go >></a>
                  </button>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card text-center">
               <div class="card-body">
                  <h5 class="card-title">Musics</h5>
                  <p class="card-text">untuk mengelola data musik untuk direkomendasikan kepada pengguna.</p>
                  <button type="button" class="btn-go">
                     <a href="musics.php"> Go >></a>
                  </button>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card text-center">
               <div class="card-body">
                  <h5 class="card-title">Motivation Word</h5>
                  <p class="card-text">untuk mengelola kata-kata motivasi yang akan diberikan pada pengguna.</p>
                  <button type="button" class="btn-go">
                     <a href="motivation.php"> Go >></a>
                  </button>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card text-center">
               <div class="card-body">
                  <h5 class="card-title">FAQ</h5>
                  <p class="card-text">untuk mengelola pertanyaan umum yang dapat ditampilkan kepada pengguna.</p>
                  <button type="button" class="btn-go">
                     <a href="faq.php"> Go >></a>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- Chart -->
      <div class="cards">
         <h5 class="card-header">Chart</h5>
         <canvas id="myChart" aria-label="chart"></canvas>
      </div>
      <script>
         async function fetchData() {
            try {
               const response = await fetch('http://localhost:3000/chart/prodi');
               const data = await response.json();
               return data;
            } catch (error) {
               console.error('Error fetching data:', error);
               return null;
            }
         }

         function createChart(prodi, totalPengguna) {
            const ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, {
               type: 'doughnut',
               data: {
                  labels: prodi,
                  datasets: [{
                     backgroundColor: getRandomColors(prodi.length),
                     data: totalPengguna
                  }]
               },
               options: {
                  title: {
                     display: true,
                     text: 'Pengguna Aplikasi Insight Mental sesuai Program Studi'
                  }
               }
            });
         }

         function getRandomColors(count) {
            const colors = [];
            for (let i = 0; i < count; i++) {
               const color = '#' + Math.floor(Math.random() * 16777215).toString(16);
               colors.push(color);
            }
            return colors;
         }

         document.addEventListener('DOMContentLoaded', async () => {
            const data = await fetchData();
            if (data) {
               createChart(data.prodi, data.totalPengguna);
            }
         });
      </script>
   </div>
   <!-- Navbar Content -->
   <nav class="main-menu">
      <ul>
         <a href="dashboard.php">
            <img src="../assets/img/info.png">
         </a>
         <li class="active-sidebar">
            <a href="dashboard.php">
               <i class="fa fa-th fa-2x"></i>
               <span class="nav-text">
                  Dashboard
               </span>
            </a>
         </li>
         <li class="has-subnav">
            <a href="users.php">
               <i class="fa fa-users fa-2x"></i>
               <span class="nav-text">
                  Mengelola <b>Users</b>
               </span>
            </a>
         </li>
         <li class="has-subnav">
            <a href="information.php">
               <i class="fa fa-info fa-2x"></i>
               <span class="nav-text">
                  Mengelola <b>Information</b>
               </span>
            </a>
         </li>
         <li class="has-subnav">
            <a href="musics.php">
               <i class="fa fa-music fa-2x"></i>
               <span class="nav-text">
                  Mengelola <b>Musics</b>
               </span>
            </a>
         </li>
         <li>
            <a href="motivation.php">
               <i class="fa fa-smile-o fa-2x"></i>
               <span class="nav-text">
                  Mengelola <b>Motivation</b>
               </span>
            </a>
         </li>
         <li>
            <a href="faq.php">
               <i class="fa fa-question fa-2x"></i>
               <span class="nav-text">
                  Mengelola <b>FAQ</b>
               </span>
            </a>
         </li>
      </ul>

      <ul class="logout">
         <li>
            <a href="#" onclick="logout()">
               <i class="fa fa-power-off fa-2x"></i>
               <span class="nav-text">
                  <b>Logout</b>
               </span>
            </a>
         </li>
      </ul>
   </nav>
   <script>
      // Fungsi untuk melakukan logout
      async function logout() {
         // Tampilkan konfirmasi "Apakah Anda yakin ingin keluar?"
         const isConfirmed = window.confirm('Apakah Anda yakin ingin keluar?');

         if (isConfirmed) {
            try {
               // Panggil endpoint logout di backend menggunakan fetch
               const response = await fetch('http://localhost:3000/logout', {
                  method: 'GET', // Karena di server, endpoint /logout menggunakan GET method
                  credentials: 'include', // Sertakan opsi ini agar cookie disertakan dalam permintaan
               });

               if (response.ok) {
                  // Jika logout berhasil, hapus cookie yang menyimpan token akses
                  document.cookie = 'accessToken=; max-age=0; path=/; secure; samesite=strict;';

                  // Redirect pengguna ke halaman login setelah logout
                  window.location.replace('../index.php');
                  window.history.pushState({}, '', '../index.php');
               } else {
                  // Jika logout gagal, tampilkan pesan kesalahan
                  console.error('Logout failed:', response);
                  alert('Logout gagal. Silakan coba lagi.');
               }
            } catch (error) {
               console.error('Error during logout:', error);
               alert('Terjadi kesalahan saat logout. Silakan coba lagi.');
            }
         }
      }
   </script>
</body>

</html>