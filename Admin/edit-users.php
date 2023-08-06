<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Edit Users</title>
   <!-- Boostrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- Boostrap Modal -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
   <!-- Icon -->
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

                     <form onsubmit="handleUpdateUserFormSubmit(event)" class="form">
                        <input type="hidden" id="userId" name="userId">

                        <label>Nama</label>
                        <input type="text" id="nama" name="nama">

                        <label>Email</label>
                        <input type="email" id="email" name="email">

                        <label>Password</label>
                        <input type="text" id="password" name="password">

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
                           <option value="S1 Teknik Logistik">S1 Teknik Logistik</option>
                           <option value="S1 Bisnis Digital">S1 Bisnis Digital</option>
                           <option value="S1 Elektro">S1 Elektro</option>
                        </select>

                        <label>Jenis Kelamin</label>
                        <select id="gender" name="gender">
                           <option value="">Silahkan Pilih</option>
                           <option value="Laki - Laki">Laki - Laki</option>
                           <option value="Perempuan">Perempuan</option>
                        </select>

                        <button type="submit" class="btn-edit btn btn-primary"
                           onclick="return confirm('Anda sudah yakin benar?')">Save Changes</button>
                        <a href="users.php" class="btn-back btn btn-primary" name="back"
                           onclick="return confirm('Anda yakin ingin Kembali?')">Back</a>

                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

   <script>
      async function fetchUserDataAndShowEditForm(userId) {
         try {
            const response = await fetch(`http://localhost:3000/users/getUserData/${userId}`);

            if (!response.ok) {
               throw new Error('Gagal memuat data pengguna.');
            }

            const data = await response.json();

            // Isi data pengguna ke dalam formulir edit
            document.getElementById('userId').value = data.id;
            document.getElementById('nama').value = data.name;
            document.getElementById('email').value = data.email;
            document.getElementById('password').value = data.password;
            document.getElementById('prodi').value = data.prodi;
            document.getElementById('gender').value = data.jeniskelamin;
         } catch (error) {
            console.error('Error fetching user data:', error);
            alert('Gagal memuat data pengguna.');
         }
      }

      document.addEventListener('DOMContentLoaded', () => {
         // Mengambil nilai parameter ID pengguna dari URL
         const urlParams = new URLSearchParams(window.location.search);
         const userId = urlParams.get(`id`);

         // Memanggil fungsi untuk mengambil data pengguna berdasarkan ID
         fetchUserDataAndShowEditForm(userId);
      });

      async function handleUpdateUserFormSubmit(event) {
         event.preventDefault();

         // Ambil data yang telah diubah dari formulir
         const userId = document.getElementById('userId').value;
         const name = document.getElementById('nama').value;
         const email = document.getElementById('email').value;
         const password = document.getElementById('password').value;
         const prodi = document.getElementById('prodi').value;
         const jeniskelamin = document.getElementById('gender').value;

         // Data pengguna yang akan diperbarui
         const updatedUser = {
            name: name,
            email: email,
            password:password,
            prodi: prodi,
            jeniskelamin: jeniskelamin,
         };

         // Menggunakan Fetch API untuk mengirim permintaan PUT ke server dengan data yang diperbarui
         try {
            const response = await fetch(`http://localhost:3000/users/updatedata/${userId}`, {
               method: 'PUT',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify(updatedUser),
            });

            if (!response.ok) {
               throw new Error('Gagal memperbarui data pengguna.');
            }

            if (response.ok) {
               // Redirect to users.php with success message
               window.location.href = 'users.php?message=Data berhasil diubah';
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