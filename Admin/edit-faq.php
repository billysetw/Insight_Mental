<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Edit FAQ</title>

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
         <h1>Edit FAQ</h1>
         <nav>
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
             <li class="breadcrumb-item"><a href="faq.php">FAQ</a></li>
             <li class="breadcrumb-item active">Edit FAQ</li>
           </ol>
         </nav>
       </div>

      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><b>Edit FAQ</b> Insight Mental</h5>

                    <form action="" method="POST" class="form">
                        <label>Question</label>
                        <input type="text" id="question" name="question" placeholder="Silahkan masukkan question..." >

                        <label>Answer</label>
                        <input type="text" id="answer" name="answer" placeholder="Silahkan masukkan answer..." >
                        
                        <button type="button" class="btn-edit btn btn-primary" name="submit" onclick="return confirm('Anda sudah yakin benar?')">Save Changes</button>
                        <button type="button" class="btn-back btn btn-primary" name="back"><a href="faq.php" onclick="return confirm('Anda yakin ingin Kembali?')">Back</a></button>
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