<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Edit Information</title>

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
         <h1>Edit Information</h1>
         <nav>
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
             <li class="breadcrumb-item"><a href="information.php">Information</a></li>
             <li class="breadcrumb-item active">Edit Information</li>
           </ol>
         </nav>
       </div>

      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><b>Edit Information</b> Insight Mental</h5>

                    <form action="" method="POST" class="form">
                        <label>Title</label>
                        <input type="text" id="title" name="title" value="jajajsja" placeholder="Silahkan masukkan title..." >

                        <label>Web Url</label>
                        <input type="text" id="urlWeb" name="urlWeb" value="jsjsjs" placeholder="Silahkan masukkan website url..." >

                        <label>Posted By</label>
                        <input type="text" id="postedBy" name="postedBy" value="aaksoakos" placeholder="Silahkan masukkan pembuat..." >

                        <label>Topic</label>
                        <input type="text" id="topic" name="topic" value="wjnjannwna" placeholder="Diubah oleh..." >

                        <label>Background Image</label><br>
                        <input type="file" id="bgImg" name="bgImg"  ><br>

                        <button type="button" class="btn-edit btn btn-primary" name="submit" onclick="return confirm('Anda sudah yakin benar?')">Save Changes</button>
                        <button type="button" class="btn-back btn btn-primary" name="back"><a href="information.php" onclick="return confirm('Anda yakin ingin Kembali?')">Back</a></button>
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