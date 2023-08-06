<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Motivation</title>

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

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
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
                     <h5 class="card-title"><b>Motivation Words</b> Insight Mental</h5>

                     <!-- PopUp -->
                     <button type="button" class="btn-crud btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addMotivation">
                        <i class="fa fa-plus-circle"></i>
                        <font>Tambah Motivation</font>
                     </button>

                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kata Kata</th>
                              <th scope="col">Author</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody id="motivationList"></tbody>
                     </table>
                     <div class="pagination" id="paginationPage"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- addMotivation -->
         <div class="modal fade" id="addMotivation" aria-labelledby="addMot">
            <div class="modal-dialog modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <div id="errorMessage" class="warning"></div>
                     <h1 class="modal-title fs-5" id="addMot">TAMBAH MOTIVATION WORDS</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="" method="POST" class="form" id="addmotivationForm">
                        <label>Words <span style="color: red;">*</span></label>
                        <input type="text" id="katakata" name="katakata" placeholder="Silahkan masukkan words..."
                           required>

                        <label>Author <span style="color: red;">*</span></label>
                        <input type="text" id="author" name="author" placeholder="Silahkan masukkan author..." required>
                  </div>
                  <div class="modal-footer">
                     <button type="submit" class="btn btn-primary" name="submit" id="addDataButton">Add Data</button>
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
            <a href="motivation.php">
               <i class="fa fa-music fa-2x"></i>
               <span class="nav-text">
                  Mengelola <b>motivation</b>
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
      document.getElementById('addDataButton').addEventListener('click', handleAddmotivationFormSubmit);

      let currentPage = 1;
      let pageSize = 30;
      let totalPages;

      document.addEventListener('DOMContentLoaded', () => {
         getmotivation();
      });

      async function getmotivation() {
         try {
            const response = await fetch('http://localhost:3000/motivation/viewMotivation');
            const data = await response.json();

            // Hitung indeks data awal dan akhir untuk halaman saat ini
            const startIndex = (currentPage - 1) * pageSize;
            const endIndex = Math.min(startIndex + pageSize, data.data.length);

            const motivationToDisplay = data.data.slice(startIndex, endIndex);

            const motivationListTable = document.getElementById('motivationList');
            motivationListTable.innerHTML = '';

            let index = startIndex + 1;

            if (data.data.length === 0) {
               const noDataRow = document.createElement('tr');
               noDataRow.innerHTML = '<td colspan="3">Tidak ada data</td>';
               motivationListTable.appendChild(noDataRow);
            } else {
               motivationToDisplay.forEach(motivation => {
                  const motivationRow = document.createElement('tr');
                  motivationRow.innerHTML = `
    <td>${index}</td>
    <td>${motivation.katakata}</td>
    <td>${motivation.author}</td>
    <td>
      <a href="edit-motivation.php?id=${motivation.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>

      <a href="#" class="del" onclick="return deletemotivation(${motivation.id})"><i class="fa fa-trash-o"></i></a>
    </td>
  `;
                  motivationListTable.appendChild(motivationRow);
                  index++;
               });
            }

            totalPages = data.totalPages;

            console.log('totalPages:', totalPages);

            updatePagination(currentPage, totalPages);
         } catch (error) {
            console.error('Error fetching motivation:', error);
         }
      }

      function updatePage(pageNumber) {
         currentPage = pageNumber;
         getmotivation();
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
      async function handleAddmotivationFormSubmit() {
         const form = document.getElementById('addmotivationForm');
         const formData = new FormData(form);
         const { katakata, author } = Object.fromEntries(formData.entries());

         try {

            const response = await fetch('http://localhost:3000/motivation/addData', {
               method: 'POST',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify({ katakata: katakata, author: author }),
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
            $('#addmotivation').modal('hide');

            // Tampilkan pesan sukses atau lakukan tindakan lain jika diperlukan
            console.log('motivation added successfully.');

            // Tampilkan pesan sukses
            const successMessageDiv = document.getElementById('successMessage');
            successMessageDiv.style.display = 'block';

            // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
            setTimeout(() => {
               successMessageDiv.style.display = 'none';
            }, 5000);

            // Muat ulang data pengguna setelah berhasil menambahkan pengguna
            getmotivation();
         } catch (error) {
            console.error('Error adding motivation:', error);
            // Tampilkan pesan kesalahan jika diperlukan
         }
      }

      function buildmotivationTable(motivation) {
         const motivationListTable = document.getElementById('motivationList');
         motivationListTable.innerHTML = ''; // Kosongkan tabel sebelum membangun ulang

         let index = 1;

         if (!motivation || motivation.length === 0) {
            const noDataRow = document.createElement('tr');
            noDataRow.innerHTML = '<td colspan="3">Tidak ada data</td>';
            motivationListTable.appendChild(noDataRow);
         } else {
            motivation.forEach(motivation => {
               const motivationRow = document.createElement('tr');
               motivationRow.innerHTML = `
               <td>${index}</td>
    <td>${motivation.katakata}</td>
    <td>${motivation.author}</td>
      <a href="edit-motivation.php?id=${motivation.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>

      <a href="#" class="del" onclick="return deletemotivation(${motivation.id})"><i class="fa fa-trash-o"></i></a>
    </td>
  `;
               motivationListTable.appendChild(motivationRow);
               index++;
            });
         }
      }


      // Fungsi untuk menghapus pengguna berdasarkan ID
      async function deletemotivation(motivationId) {
         // Tampilkan dialog konfirmasi
         const isConfirmed = window.confirm('Apakah Anda yakin ingin menghapus pengguna?');
         if (!isConfirmed) {
            return; // Jika pengguna membatalkan, hentikan proses penghapusan
         }

         try {
            const response = await fetch(`http://localhost:3000/motivation/delete/${motivationId}`, {
               method: 'DELETE',
            });
            if (response.ok) {
               console.log('Pengguna dengan ID', motivationId, 'telah dihapus.');
               // Ambil data pengguna terbaru dari server setelah pengguna dihapus
               const updatedmotivationResponse = await fetch('http://localhost:3000/motivation/viewMotivation');
               const updatedData = await updatedmotivationResponse.json();
               const updatedmotivation = updatedData.data;
               // Tampilkan pesan sukses
               const deleteMessageDiv = document.getElementById('deleteMessage');
               deleteMessageDiv.style.display = 'block';

               // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
               setTimeout(() => {
                  deleteMessageDiv.style.display = 'none';
               }, 5000);

               buildmotivationTable(updatedmotivation); // Panggil kembali fungsi buildmotivationTable dengan data pengguna terbaru
            } else {
               console.error('Gagal menghapus pengguna dengan ID', motivationId);
            }
         } catch (error) {
            console.error('Error deleting motivation:', error);
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