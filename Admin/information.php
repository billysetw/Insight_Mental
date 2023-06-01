<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Information</title>

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
         <h1>Mengelola Information</h1>
         <nav>
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
             <li class="breadcrumb-item active">Information</li>
           </ol>
         </nav>
       </div>
      <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title"><b>Information</b> Insight Mental</h5>

               <!-- PopUp -->
               <button type="button" class="btn-crud btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                  <i class="fa fa-plus-circle"></i><font>Tambah Information</font>
               </button>

              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Web Url</th>
                    <th scope="col">Posted by</th>
                    <th scope="col">Topic</th>
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
                     <td>M</td>
                     <td>Institut Teknologi Telkom Purwokerto</td>
                     <td>
                        <a href="" class="edt"><i class="fa fa-pencil-square-o"></i></a>
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
      <div class="modal fade" id="add" aria-labelledby="addInfo">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="addInfo">TAMBAH INFORMATION</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="" method="POST" class="form">
                        <label>Title <span style="color: red;">*</span></label>
                        <input type="text" id="title" name="title" placeholder="Silahkan masukkan title..." required>

                        <label>Web Url <span style="color: red;">*</span></label>
                        <input type="text" id="urlWeb" name="urlWeb" placeholder="Silahkan masukkan website url..." required>

                        <label>Posted By <span style="color: red;">*</span></label>
                        <input type="text" id="postedBy" name="postedBy" placeholder="Silahkan masukkan pembuat..." required>

                        <label>Topic <span style="color: red;">*</span></label>
                        <input type="text" id="topic" name="topic" placeholder="Diubah oleh..." required>

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
         <li class="active-sidebar">
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
         <li class="has-subnav">
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

