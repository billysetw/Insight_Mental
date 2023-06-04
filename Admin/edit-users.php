<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Edit Users</title>

   <!-- boostrap --> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- Boostrap Modal -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
   <!-- icon -->
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
   <link rel="icon" href="../assets/img/logo-admin.png" type="image/x-icon" />

   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>

</head>
<body>
   <!-- Main Content -->
   <div class="area">
      <!-- navigasi halaman -->
      <div class="header">
         <h1>Edit Users</h1>
         <nav>
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
             <li class="breadcrumb-item"><a href="users.php">Users</a></li>
             <li class="breadcrumb-item active">Edit User</li>
           </ol>
         </nav>
       </div>

      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><b>Edit Users</b> Insight Mental</h5>

                    <form action="" method="POST" class="form">
                        <label>Username</label>
                        <input type="text" id="username" name="username" value="Brandon Jacob">

                        <label>Nama</label>
                        <input type="text" id="nama" name="nama" value="Brandon Jacob">

                        <label>Program Studi</label>
                        <select id="prodi" name="prodi">
                            <option value="">Silahkan Pilih</option>
                            <option value="S1 Psikolog">S1 Psikolog</option>
                            <option value="D3 Digital Technology">D3 Digital Technology</option>
                            <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
                            <option value="S1 Teknik Telekomunikasi">S1 Teknik Telekomunikasi</option>
                            <option value="S1 Teknik Biomedis">S1 Teknik Biomedis</option>
                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                            <option value="S1 Software Engineering">S1 Software Engineering</option>
                            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                            <option value="S1 Sains Data">S1 Sains Data</option>
                            <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                            <option value="S1 Desain Komunikasi Visual">S1 Desain Komunikasi Visual</option>
                            <option value="S1 Digital Logistics">S1 Digital Logistics</option>
                            <option value="S1 Bisnis Digital">S1 Bisnis Digital</option>
                            <option value="S1 Elektro">S1 Elektro</option>
                        </select>

                        <label>Jenis Kelamin</label>
                        <select id="gender" name="gender">
                            <option value="">Silahkan Pilih</option>
                            <option value="M">M</option>
                            <option value="F">F</option>
                            </select>

                        <label>Type</label>
                        <select id="type" name="type">
                            <option value="">Silahkan Pilih</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Psikolog">Psikolog</option>
                            <option value="Admin">Admin</option>
                            </select>

                        <label>Kampus</label>
                        <input type="text" id="kampus" name="kampus" value="ITTP">
                        
                        <button type="button" class="btn-edit btn btn-primary" name="submit" onclick="return confirm('Anda sudah yakin benar?')">Save Changes</button>
                        <button type="button" class="btn-back btn btn-primary" name="back"><a href="users.php" onclick="return confirm('Anda yakin ingin Kembali?')">Back</a></button>
                    </form>
                    </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
      </section>
   </div>
</body>
</html>