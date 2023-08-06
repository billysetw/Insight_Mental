<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Musics</title>

   <!-- boostrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <!-- Boostrap Modal -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

   <!-- jQuery -->
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
      <!-- navigasi halaman -->
      <div class="header">
         <h1>Mengelola Musics</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
               <li class="breadcrumb-item active">Musics</li>
            </ol>
         </nav>
      </div>
      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">

                  <div id="successMessage" style="display: none;">
                     Data Information berhasil ditambahkan
                  </div>

                  <div id="deleteMessage" style="display: none;">
                     Data Information berhasil dihapus
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
                     <h5 class="card-title"><b>Musics</b> Insight Mental</h5>

                     <!-- PopUp -->
                     <button type="button" class="btn-crud btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addMusics">
                        <i class="fa fa-plus-circle"></i>
                        <font>Tambah Musics</font>
                     </button>

                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kategori</th>
                              <th scope="col">Judul Lagu</th>
                              <th scope="col">Penyanyi</th>
                              <th scope="col">Link</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody id="musicsList"></tbody>
                     </table>
                     <div class="pagination" id="paginationPage"></div>
                  </div>

               </div>
            </div>
         </div>
         <!-- addMusics -->
         <div class="modal fade" id="addMusics" aria-labelledby="addMus">
            <div class="modal-dialog modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <div id="errorMessage" class="warning"></div>
                     <h1 class="modal-title fs-5" id="addMus">TAMBAH MUSICS</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="" method="POST" class="form" id="addmusicsForm">
                        <label>Kategori <span style="color: red;">*</span></label>
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

                        <label>Judul Lagu <span style="color: red;">*</span></label>
                        <input type="text" id="title" name="title" placeholder="Silahkan masukkan title..." required>

                        <label>Penyanyi <span style="color: red;">*</span></label>
                        <input type="text" id="singer" name="singer" placeholder="Silahkan masukkan singer..." required>

                        <label>Link <span style="color: red;">*</span></label>
                        <input type="text" id="url" name="url" placeholder="Silahkan masukkan url..." required>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" name="submit" id="addDataButton">Add Data</button>
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
         <li class="active-sidebar">
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
            <a href="#" onclick="logoout()">
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
      document.getElementById('addDataButton').addEventListener('click', handleAddmusicsFormSubmit);

      let currentPage = 1;
      let pageSize = 30;
      let totalPages;

      document.addEventListener('DOMContentLoaded', () => {
         getmusics();
      });

      async function getmusics() {
         try {
            const response = await fetch('http://localhost:3000/musics/viewMusics');
            const data = await response.json();

            // Hitung indeks data awal dan akhir untuk halaman saat ini
            const startIndex = (currentPage - 1) * pageSize;
            const endIndex = Math.min(startIndex + pageSize, data.data.length);

            const musicsToDisplay = data.data.slice(startIndex, endIndex);

            const musicsListTable = document.getElementById('musicsList');
            musicsListTable.innerHTML = '';

            let index = startIndex + 1;

            if (data.data.length === 0) {
               const noDataRow = document.createElement('tr');
               noDataRow.innerHTML = '<td colspan="6">Tidak ada data</td>';
               musicsListTable.appendChild(noDataRow);
            } else {
               musicsToDisplay.forEach(musics => {
                  const musicsRow = document.createElement('tr');
                  musicsRow.innerHTML = `
    <td>${index}</td>
    <td>${musics.kategori}</td>
    <td>${musics.title}</td>
    <td>${musics.singer}</td>
    <td>${musics.url}</td>
    <td>
      <a href="edit-musics.php?id=${musics.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>

      <a href="#" class="del" onclick="return deletemusics(${musics.id})"><i class="fa fa-trash-o"></i></a>
    </td>
  `;
                  musicsListTable.appendChild(musicsRow);
                  index++;
               });
            }

            totalPages = data.totalPages;

            console.log('totalPages:', totalPages);

            updatePagination(currentPage, totalPages);
         } catch (error) {
            console.error('Error fetching musics:', error);
         }
      }

      function updatePage(pageNumber) {
         currentPage = pageNumber;
         getmusics();
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
      async function handleAddmusicsFormSubmit() {
         const form = document.getElementById('addmusicsForm');
         const formData = new FormData(form);
         const { kategori, title, singer, url} = Object.fromEntries(formData.entries());

         try {

            const response = await fetch('http://localhost:3000/musics/addData', {
               method: 'POST',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify({ kategori:kategori, title: title, singer: singer, url: url }),
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
            $('#addmusics').modal('hide');

            // Tampilkan pesan sukses atau lakukan tindakan lain jika diperlukan
            console.log('musics added successfully.');

            // Tampilkan pesan sukses
            const successMessageDiv = document.getElementById('successMessage');
            successMessageDiv.style.display = 'block';

            // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
            setTimeout(() => {
               successMessageDiv.style.display = 'none';
            }, 5000);

            // Muat ulang data pengguna setelah berhasil menambahkan pengguna
            getmusics();
         } catch (error) {
            console.error('Error adding musics:', error);
            // Tampilkan pesan kesalahan jika diperlukan
         }
      }

      function buildmusicsTable(musics) {
         const musicsListTable = document.getElementById('musicsList');
         musicsListTable.innerHTML = ''; // Kosongkan tabel sebelum membangun ulang

         let index = 1;

         if (!musics || musics.length === 0) {
            const noDataRow = document.createElement('tr');
            noDataRow.innerHTML = '<td colspan="5">Tidak ada data</td>';
            musicsListTable.appendChild(noDataRow);
         } else {
            musics.forEach(musics => {
               const musicsRow = document.createElement('tr');
               musicsRow.innerHTML = `
               <td>${index}</td>
    <td>${musics.kategori}</td>
    <td>${musics.title}</td>
    <td>${musics.singer}</td>
    <td>${musics.url}</td>
      <a href="edit-musics.php?id=${musics.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>

      <a href="#" class="del" onclick="return deletemusics(${musics.id})"><i class="fa fa-trash-o"></i></a>
    </td>
  `;
               musicsListTable.appendChild(musicsRow);
               index++;
            });
         }
      }


      // Fungsi untuk menghapus pengguna berdasarkan ID
      async function deletemusics(musicsId) {
         // Tampilkan dialog konfirmasi
         const isConfirmed = window.confirm('Apakah Anda yakin ingin menghapus pengguna?');
         if (!isConfirmed) {
            return; // Jika pengguna membatalkan, hentikan proses penghapusan
         }

         try {
            const response = await fetch(`http://localhost:3000/musics/delete/${musicsId}`, {
               method: 'DELETE',
            });
            if (response.ok) {
               console.log('Pengguna dengan ID', musicsId, 'telah dihapus.');
               // Ambil data pengguna terbaru dari server setelah pengguna dihapus
               const updatedmusicsResponse = await fetch('http://localhost:3000/musics/viewMusics');
               const updatedData = await updatedmusicsResponse.json();
               const updatedmusics = updatedData.data;
               // Tampilkan pesan sukses
               const deleteMessageDiv = document.getElementById('deleteMessage');
               deleteMessageDiv.style.display = 'block';

               // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
               setTimeout(() => {
                  deleteMessageDiv.style.display = 'none';
               }, 5000);

               buildmusicsTable(updatedmusics); // Panggil kembali fungsi buildmusicsTable dengan data pengguna terbaru
            } else {
               console.error('Gagal menghapus pengguna dengan ID', musicsId);
            }
         } catch (error) {
            console.error('Error deleting musics:', error);
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