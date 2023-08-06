<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Edit Musics</title>

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
         <h1>Edit Musics</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
               <li class="breadcrumb-item"><a href="musics.php">Musics</a></li>
               <li class="breadcrumb-item active">Edit Musics</li>
            </ol>
         </nav>
      </div>

      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title"><b>Edit Musics</b> Insight Mental</h5>

                     <form onsubmit="handleUpdateUserFormSubmit(event)" method="POST" class="form">
                        <input type="hidden" id="musicsId" name="musicsId">

                        <label>Kategori</label>
                        <select id="kategori" name="kategori" required>
                           <option value="">Silahkan Pilih</option>
                           <option value="Jazz">Jazz</option>
                           <option value="Rock">Rock</option>
                           <option value="Hip hop / Rap / Rapcore">Hip hop / Rap / Rapcore</option>
                           <option value="Pop">Pop</option>
                           <option value="Country">Country</option>
                           <option value="Blues">Blues</option>
                           <option value="Classic">Classic</option>
                        </select>


                        <label>Judul Lagu</label>
                        <input type="text" id="title" name="title" value="">

                        <label>Penyanyi</label>
                        <input type="text" id="singer" name="singer" value="">

                        <label>Link</label>
                        <input type="text" id="url" name="url" value="">

                        <button type="submit" class="btn-edit btn btn-primary"
                           onclick="return confirm('Anda sudah yakin benar?')">Save Changes</button>
                        <a href="musics.php" class="btn-back btn btn-primary" name="back"
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
      async function fetchUserDataAndShowEditForm(musicsId) {
         try {
            const response = await fetch(`http://localhost:3000/musics/getMusicsData/${musicsId}`);

            if (!response.ok) {
               throw new Error('Gagal memuat data musics.');
            }

            const data = await response.json();

            // Isi data pengguna ke dalam formulir edit
            document.getElementById('musicsId').value = data.id;
            document.getElementById('kategori').value =data.kategori;
            document.getElementById('title').value = data.title;
            document.getElementById('singer').value = data.singer;
            document.getElementById('url').value = data.url;
         } catch (error) {
            console.error('Error fetching user data:', error);
            alert('Gagal memuat data pengguna.');
         }
      }

      document.addEventListener('DOMContentLoaded', () => {
         // Mengambil nilai parameter ID pengguna dari URL
         const urlParams = new URLSearchParams(window.location.search);
         const musicsId = urlParams.get(`id`);

         // Memanggil fungsi untuk mengambil data pengguna berdasarkan ID
         fetchUserDataAndShowEditForm(musicsId);
      });

      async function handleUpdateUserFormSubmit(event) {
         event.preventDefault();

         // Ambil data yang telah diubah dari formulir
         const musicsId = document.getElementById('musicsId').value;
         const kategori =document.getElementById('kategori').value;
         const title = document.getElementById('title').value;
         const singer = document.getElementById('singer').value;
         const url = document.getElementById('url').value;

         // Data pengguna yang akan diperbarui
         const updateMusics = {
            kategori:kategori,
            title: title,
            singer: singer,
            url: url,
         };

         // Menggunakan Fetch API untuk mengirim permintaan PUT ke server dengan data yang diperbarui
         try {
            const response = await fetch(`http://localhost:3000/musics/updatedata/${musicsId}`, {
               method: 'PUT',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify(updateMusics),
            });

            if (!response.ok) {
               throw new Error('Gagal memperbarui data musik.');
            }

            if (response.ok) {
               // Redirect to users.php with success message
               window.location.href = 'musics.php?message=Data berhasil diubah';
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