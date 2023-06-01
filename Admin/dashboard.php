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
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
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
         <canvas id="myChart" aria-label="chart" height="200" width="580"></canvas>
      </div>
      <script>
         var xValues = ["D3 Digital Technology", "D3 Teknik Telekomunikasi","S1 Teknik Telekomunikasi","S1 Teknik Biomedis", "S1 Teknik Informatika", "S1 Software Engineering", "S1 Sistem Informasi", "S1 Sains Data", "S1 Teknik Industri", "S1 Desain Komunikasi Visual", "S1 Digital Logistics", "S1 Bisnis Digital", "S1 Elektro"];
         var yValues = [55, 49, 44, 24, 15, 55, 49, 44, 24, 15, 55, 49, 44];
         var barColors = [
            "#FFF2CC",
            "#FFD966",
            "#F4B183",
            "#DFA67B",
            "#DDFFBB",
            "#F7C8E0",
            "#DFFFD8",
            "#B4E4FF",
            "#95BDFF",
            "#6096B4",
            "#93BFCF",
            "#BDCDD6",
            "#EEE9DA",
         ];

         new Chart("myChart", {
         type: "doughnut",
         data: {
            labels: xValues,
            datasets: [{
               backgroundColor: barColors,
               data: yValues
            }]
         },
         options: {
            title: {
               display: true,
               text: "Pengguna Aplikasi Insight Mental sesuai Program Studi"
            }
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
            <a href="logout.php">
               <i class="fa fa-power-off fa-2x"></i>
               <span class="nav-text">
                  <b>Logout</b>
               </span>
            </a>
         </li>  
      </ul>
   </nav>
</body>
</html>

