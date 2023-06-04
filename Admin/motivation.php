<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Motivation</title>

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
         <h1>Mengelola Motivation Words</h1>
         <nav>
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
             <li class="breadcrumb-item active">Motivation</li>
           </ol>
         </nav>
       </div>
      <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title"><b>Motivation Words</b> Insight Mental</h5>

               <!-- PopUp -->
               <button type="button" class="btn-crud btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                  <i class="fa fa-plus-circle"></i><font>Tambah Motivation</font>
               </button>

              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kata Kata</th>
                    <th scope="col">Url</th>
                    <th scope="col">Background Image</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</th>
                    <td>BrandonJacob</td>
                    <td>Brandon Jacob</td>
                    <td>S1 Sistem Informasi</td>
                    <td>
                        <a href="edit-motivation.php" class="edt"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="" class="del" onclick="return confirm('Anda yakin ingin Hapus?')"><i class="fa fa-trash-o"></i></a>
                     </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Add -->
      <div class="modal fade" id="add" aria-labelledby="addMot">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="addMot">TAMBAH MOTIVATION WORDS</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="" method="POST" class="form">
                        <label>Words <span style="color: red;">*</span></label>
			               <input type="text" id="words" name="words" placeholder="Silahkan masukkan words..." required>
                     
                        <label>Url <span style="color: red;">*</span></label>
			               <input type="url" id="url" name="url" placeholder="Silahkan masukkan url..." required>

                        <label>Background Image <span style="color: red;">*</span></label>
                        <input type="file" id="bgImg" name="bgImg"  required>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" name="submit">Add Data</button>
                  </div>
               </div>
            </div>
         </div>
    </section>
   </div>
   <!-- Navbar Content -->
   <nav class="main-menu">
      <ul>
         <a href="dashboard.php">
            <img src="../assets/img/info.png">
         </a>
         <li class="has-subnav">
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
         <li class="active-sidebar">
            <a href="motivation.php">
               <i class="fa fa-smile-o fa-2x"></i>
               <span class="nav-text">
                  Mengelola <b>Motivation</b>
               </span>
            </a>
         </li>
         <li class="has-subnav">
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

