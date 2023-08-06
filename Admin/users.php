<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Users</title>

   <!-- boostrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- Boostrap Modal -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- icon -->
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
   <link rel="icon" href="../assets/img/logo-admin.png" type="image/x-icon" />

   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body>
   <!-- Main Content -->
   <div class="area">
      <!-- Di dalam elemen body -->

      <!-- navigasi halaman -->
      <div class="header">
         <h1>Mengelola Users</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
               <li class="breadcrumb-item active">Users</li>
            </ol>
         </nav>
      </div>

      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div id="successMessage" style="display: none;">
                     Data pengguna berhasil ditambahkan
                  </div>

                  <div id="deleteMessage" style="display: none;">
                     Data pengguna berhasil dihapus
                  </div>
                  <?php
                  // Check if there is a success message in the URL
                  if (isset($_GET['message']) && !empty($_GET['message'])) {
                     $message = $_GET['message'];
                     echo '<div id="updateMessage">' . $message . '</div>';
                     // Tambahkan kode JavaScript untuk menyembunyikan pesan setelah 3 detik
                     echo '<script>
                              setTimeout(() => {
                                 document.getElementById("updateMessage").style.display = "none";
                              }, 3000);
                           </script>';
                  }
                  ?>


                  <div class="card-body">
                     <h5 class="card-title"><b>Users</b> Insight Mental</h5>

                     <!-- PopUp -->
                     <button type="button" class="btn-crud btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addUserModal">
                        <i class="fa fa-plus-circle"></i>
                        <font>Tambah Users</font>
                     </button>

                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th scope="col">No</th>
                              <th scope="col">Email</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Prodi</th>
                              <th scope="col">Jenis Kelamin</th>
                              <th scope="col">Tipe</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody id="userList"></tbody>
                     </table>
                     <div class="pagination" id="paginationPage"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Add -->
         <div class="modal fade" id="addUserModal" aria-labelledby="addUser">
            <div class="modal-dialog modal-dialog-scrollable">
               
               <div class="modal-content">
                  <div class="modal-header">
                     <div id="errorMessage" class="warning"></div>
                     <h1 class="modal-title fs-5" id="addUser">TAMBAH USERS</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="" method="POST" class="form" id="addUserForm">
                        <label>Email <span style="color: red;">*</span></label>
                        <input type="email" id="email" name="email" placeholder="Silahkan masukkan email..."
                           required>

                        <label>Nama <span style="color: red;">*</span></label>
                        <input type="text" id="nama" name="nama" placeholder="Silahkan masukkan nama..." required>

                        <label>Password <span style="color: red;">*</span></label>
                        <input type="text" id="password" name="password" placeholder="Silahkan masukkan password..."
                           required>

                        <label>Program Studi <span style="color: red;">*</span></label>
                        <select id="prodi" name="prodi" required>
                           <option value="">Silahkan Pilih</option>
                           <option value="S1 Psikolog">S1 Psikolog</option>
                           <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
                           <option value="S1 Teknik Telekomunikasi">S1 Teknik Telekomunikasi</option>
                           <option value="S1 Biomedis">S1 Teknik Biomedis</option>
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

                        <label>Jenis Kelamin <span style="color: red;">*</span></label>
                        <select id="jeniskelamin" name="jeniskelamin" required>
                           <option value="">Silahkan Pilih</option>
                           <option value="Laki - Laki">Laki - Laki</option>
                           <option value="Perempuan">Perempuan</option>
                        </select>

                        <label>Type <span style="color: red;">*</span></label>
                        <select id="type" name="type" required>
                           <option value="">Silahkan Pilih</option>
                           <option value="Mahasiswa">Mahasiswa</option>
                           <option value="Psikolog">Psikolog</option>
                        </select>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <button type="submit" class="btn btn-primary" id="addUserButton">Add Data</button>
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
         <li class="active-sidebar">
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
      // Event listener untuk tombol "Add Data"
      document.getElementById('addUserButton').addEventListener('click', handleAddUserFormSubmit);

      let currentPage = 1;
      let pageSize = 30;
      let totalPages;

      document.addEventListener('DOMContentLoaded', () => {
         getUsers();
      });

      async function getUsers() {
         try {
            const response = await fetch('http://localhost:3000/users/viewUsers');
            const data = await response.json();

            const mahasiswaUsers = data.data.filter(user => user.type === 'Mahasiswa' || user.type === 'Psikolog');

            // Hitung indeks data awal dan akhir untuk halaman saat ini
            const startIndex = (currentPage - 1) * pageSize;
            const endIndex = Math.min(startIndex + pageSize, mahasiswaUsers.length);

            const usersToDisplay = mahasiswaUsers.slice(startIndex, endIndex);

            const userListTable = document.getElementById('userList');
            userListTable.innerHTML = '';

            let index = startIndex + 1;

            if (mahasiswaUsers.length === 0) {
               const noDataRow = document.createElement('tr');
               noDataRow.innerHTML = '<td colspan="7">Tidak ada data</td>';
               userListTable.appendChild(noDataRow);
            } else {
               usersToDisplay.forEach(user => {
                  const userRow = document.createElement('tr');
                  userRow.innerHTML = `
    <td>${index}</td>
    <td>${user.email}</td>
    <td>${user.name}</td>
    <td>${user.prodi}</td>
    <td>${user.jeniskelamin}</td>
    <td>${user.type}</td>
    <td>
      <a href="edit-users.php?id=${user.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>

      <a href="#" class="del" onclick="return deleteUser(${user.id})"><i class="fa fa-trash-o"></i></a>
    </td>
  `;
                  userListTable.appendChild(userRow);
                  index++;
               });
            }

            totalPages = data.totalPages;

            console.log('totalPages:', totalPages);

            updatePagination(currentPage, totalPages);
         } catch (error) {
            console.error('Error fetching users:', error);
         }
      }

      function updatePage(pageNumber) {
         currentPage = pageNumber;
         getUsers();
      }

      function updatePagination(currentPage, totalPages) {
         const paginationDiv = document.getElementById('paginationPage');
         paginationDiv.innerHTML = '';

         console.log('Current page:', currentPage);

         // Tambahkan tombol Previous jika tidak berada di halaman pertama
         const prevButton = document.createElement('button');
         prevButton.textContent = '«';
         prevButton.addEventListener('click', () => {
            updatePage(currentPage - 1);
         });
         paginationDiv.appendChild(prevButton);

         // Tambahkan tombol nomor halaman
         for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement('button');
            pageButton.textContent = i;
            (function (pageNumber) {
               // Gunakan IIFE untuk membuat scope baru dan menyimpan nilai pageNumber
               pageButton.addEventListener('click', () => {
                  updatePage(pageNumber); // Panggil fungsi untuk memperbarui halaman
               });
            })(i);
            paginationDiv.appendChild(pageButton);

            // Tandai halaman saat ini sebagai aktif
            if (i === currentPage) {
               pageButton.classList.add('active');
            }
         }

         // Tambahkan tombol Next
         const nextButton = document.createElement('button');
         nextButton.textContent = '»';
         nextButton.addEventListener('click', () => {
            updatePage(currentPage + 1);
         });
         paginationDiv.appendChild(nextButton);
      }

      // Add Data
      async function handleAddUserFormSubmit() {
         const form = document.getElementById('addUserForm');
         const formData = new FormData(form);
         const { email, nama, password, prodi, jeniskelamin, type } = Object.fromEntries(formData.entries());

         try {

            const response = await fetch('http://localhost:3000/users/addData', {
               method: 'POST',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify({ name: nama, email: email, password: password, prodi: prodi, jeniskelamin: jeniskelamin, type: type }),
            });

            if (!response.ok) {
               const responseData = await response.json();
               const errorMessageDiv = document.getElementById('errorMessage');
               errorMessageDiv.textContent = responseData.message;
               errorMessageDiv.style.display = 'block';

               // Hilangkan pesan kesalahan setelah 3 detik (3000 ms)
               setTimeout(() => {
                  errorMessageDiv.style.display = 'none';
               }, 5000);

               return;
            }

            // Reset form setelah berhasil menambahkan pengguna
            form.reset();
            // Tutup modal setelah berhasil menambahkan pengguna
            $('#addUserModal').modal('hide');
            // Tampilkan pesan sukses atau lakukan tindakan lain jika diperlukan
            console.log('User added successfully.');

            // Tampilkan pesan sukses
            const successMessageDiv = document.getElementById('successMessage');
            successMessageDiv.style.display = 'block';

            // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
            setTimeout(() => {
               successMessageDiv.style.display = 'none';
            }, 5000);

            // Muat ulang data pengguna setelah berhasil menambahkan pengguna
            getUsers();
         } catch (error) {
            console.error('Error adding user:', error);
            // Tampilkan pesan kesalahan jika diperlukan
         }
      }

      function buildUserTable(users) {
         const userListTable = document.getElementById('userList');
         userListTable.innerHTML = ''; // Kosongkan tabel sebelum membangun ulang

         let index = 1;

         if (!users || users.length === 0) {
            const noDataRow = document.createElement('tr');
            noDataRow.innerHTML = '<td colspan="7">Tidak ada data</td>';
            userListTable.appendChild(noDataRow);
         } else {
            users.forEach(user => {
               const userRow = document.createElement('tr');
               userRow.innerHTML = `
                <td>${index}</td>
                <td>${user.email}</td>
                <td>${user.name}</td>
                <td>${user.prodi}</td>
                <td>${user.jeniskelamin}</td>
                <td>${user.type}</td>
                <td>
                    <a href="edit-users.php?id=${user.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="#" class="del" onclick="deleteUser(${user.id})"><i class="fa fa-trash-o"></i></a>
                </td>
            `;
               userListTable.appendChild(userRow);
               index++;
            });
         }
      }


      // Fungsi untuk menghapus pengguna berdasarkan ID
      async function deleteUser(userId) {
         // Tampilkan dialog konfirmasi
         const isConfirmed = window.confirm('Apakah Anda yakin ingin menghapus pengguna?');
         if (!isConfirmed) {
            return; // Jika pengguna membatalkan, hentikan proses penghapusan
         }

         try {
            const response = await fetch(`http://localhost:3000/users/delete/${userId}`, {
               method: 'DELETE',
            });
            if (response.ok) {
               console.log('Pengguna dengan ID', userId, 'telah dihapus.');
               // Ambil data pengguna terbaru dari server setelah pengguna dihapus
               const updatedUsersResponse = await fetch('http://localhost:3000/users/viewUsers');
               const updatedData = await updatedUsersResponse.json();
               const updatedUsers = updatedData.data;
               // Tampilkan pesan sukses
               const deleteMessageDiv = document.getElementById('deleteMessage');
               deleteMessageDiv.style.display = 'block';

               // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
               setTimeout(() => {
                  deleteMessageDiv.style.display = 'none';
               }, 5000);

               buildUserTable(updatedUsers); // Panggil kembali fungsi buildUserTable dengan data pengguna terbaru
            } else {
               console.error('Gagal menghapus pengguna dengan ID', userId);
            }
         } catch (error) {
            console.error('Error deleting user:', error);
         }
         return false; // Mengembalikan false untuk mencegah tindakan default tautan
      }

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