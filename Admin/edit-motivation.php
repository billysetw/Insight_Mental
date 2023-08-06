<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Edit Motivation</title>

   <!-- boostrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- Boostrap Modal -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

   <!-- icon -->
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
   <link rel="icon" href="../assets/img/logo-admin.png" type="image/x-icon" />

   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />

</head>

<body>
   <!-- Main Content -->
   <div class="area">
      <!-- navigasi halaman -->
      <div class="header">
         <h1>Edit Motivation</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
               <li class="breadcrumb-item"><a href="motivation.php">Motivation</a></li>
               <li class="breadcrumb-item active">Edit Motivation</li>
            </ol>
         </nav>
      </div>

      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-author"><b>Edit Motivation</b> Insight Mental</h5>

                     <form onsubmit="handleUpdateMotivationFormSubmit(event)" method="POST" class="form">
                        <input type="hidden" id="motivationId" name="motivationId">

                        <label>Words</label>
                        <input type="text" id="katakata" name="katakata" value="">

                        <label>Author</label>
                        <input type="text" id="author" name="author" value="">

                        <button type="submit" class="btn-edit btn btn-primary"
                           onclick="return confirm('Anda sudah yakin benar?')">Save Changes</button>
                        <a href="motivation.php" class="btn-back btn btn-primary" name="back"
                           onclick="return confirm('Anda yakin ingin Kembali?')">Back</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
   </div>
   </div>
   </section>
   </div>
   <script>
      async function fetchMotivationDataAndShowEditForm(motivationId) {
         try {
            const response = await fetch(`http://localhost:3000/motivation/getMotivationData/${motivationId}`);

            if (!response.ok) {
               throw new Error('Gagal memuat data FAQ.');
            }

            const data = await response.json();

            // Isi data pengguna ke dalam formulir edit
            document.getElementById('motivationId').value = data.id;
            document.getElementById('katakata').value = data.katakata;
            document.getElementById('author').value = data.author;
         } catch (error) {
            console.error('Error fetching user data:', error);
            alert('Gagal memuat data pengguna.');
         }
      }

      document.addEventListener('DOMContentLoaded', () => {
         // Mengambil nilai parameter ID pengguna dari URL
         const urlParams = new URLSearchParams(window.location.search);
         const motivationId = urlParams.get(`id`);

         // Memanggil fungsi untuk mengambil data pengguna berdasarkan ID
         fetchMotivationDataAndShowEditForm(motivationId);
      });

      async function handleUpdateMotivationFormSubmit(event) {
         event.preventDefault();

         // Ambil data yang telah diubah dari formulir
         const motivationId = document.getElementById('motivationId').value;
         const katakata = document.getElementById('katakata').value;
         const author = document.getElementById('author').value;

         // Data pengguna yang akan diperbarui
         const updateMotivation = {
            katakata: katakata,
            author: author,
         }
            // Menggunakan Fetch API untuk mengirim permintaan PUT ke server dengan data yang diperbarui
            try {
               const response = await fetch(`http://localhost:3000/motivation/updatedata/${motivationId}`, {
                  method: 'PUT',
                  headers: {
                     'Content-Type': 'application/json',
                  },
                  body: JSON.stringify(updateMotivation),
               });

               if(!response.ok) {
                  throw new Error('Gagal memperbarui data motivation.');
      }

      if (response.ok) {
         // Redirect to users.php with success message
         window.location.href = 'motivation.php?message=Data berhasil diubah';
      } else {
         // Display error message returned from the backend
         const data = await response.json();
         errorMessage.textContent = data.message;
      }
         } catch (error) {
         // Tangani kesalahan jika terjadi
         console.error('Error saat memperbarui data pengguna:', error);
         alert('Terjadi kesalahan saat menyimpan perubahan. Silakan coba lagi.');
      }
      }
   </script>
</body>

</html>