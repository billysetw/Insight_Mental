<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>FAQ</title>
   <!-- icon -->
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
   <link rel="icon" href="../assets/img/logo-admin.png" type="image/x-icon" />

   <!-- boostrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- Boostrap Bundle -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
</head>

<body>
   <!-- Main Content -->
   <div class="area">
      <!-- navigasi halaman -->
      <div class="header">
         <h1>Mengelola FAQ</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
               <li class="breadcrumb-item active">FAQ</li>
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
                     <h5 class="card-title"><b>FAQ</b> Insight Mental</h5>

                     <!-- PopUp -->
                     <button type="button" class="btn-crud btn-primary" data-bs-toggle="modal"
                        data-bs-target="#addingFaq">
                        <i class="fa fa-plus-circle"></i>
                        <font>Tambah FAQ</font>
                     </button>

                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th scope="col">No</th>
                              <th scope="col">Question</th>
                              <th scope="col">Answer</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody id="faqList"></tbody>
                     </table>
                     <div class="pagination" id="paginationPage"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- addingFaq -->
         <div class="modal fade" id="addingFaq" aria-labelledby="addFAQs">
            <div class="modal-dialog modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <div id="errorMessage" class="warning"></div>
                     <h1 class="modal-title fs-5" id="addFAQs">TAMBAH FAQ</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="" method="POST" class="form" id="addfaqForm">
                        <label>Question <span style="color: red;">*</span></label>
                        <input type="text" id="question" name="question" placeholder="Silahkan masukkan question..."
                           required>

                        <label>Answer <span style="color: red;">*</span></label>
                        <textarea type="text" id="answer" name="answer"
                           placeholder="Silahkan masukkan answer..."></textarea>
                     </form>
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
         <li class="active-sidebar">
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
      document.getElementById('addDataButton').addEventListener('click', handleAddfaqFormSubmit);

      let currentPage = 1;
      let pageSize = 30;
      let totalPages;

      document.addEventListener('DOMContentLoaded', () => {
         getfaq();
      });

      async function getfaq() {
         try {
            const response = await fetch('http://localhost:3000/faq/viewFAQ');
            const data = await response.json();

            // Hitung indeks data awal dan akhir untuk halaman saat ini
            const startIndex = (currentPage - 1) * pageSize;
            const endIndex = Math.min(startIndex + pageSize, data.data.length);

            const faqToDisplay = data.data.slice(startIndex, endIndex);

            const faqListTable = document.getElementById('faqList');
            faqListTable.innerHTML = '';

            let index = startIndex + 1;

            if (data.data.length === 0) {
               const noDataRow = document.createElement('tr');
               noDataRow.innerHTML = '<td colspan="4">Tidak ada data</td>';
               faqListTable.appendChild(noDataRow);
            } else {
               faqToDisplay.forEach(faq => {
                  const faqRow = document.createElement('tr');
                  faqRow.innerHTML = `
    <td>${index}</td>
    <td>${faq.question}</td>
    <td>${faq.answer}</td>
    <td>
      <a href="edit-faq.php?id=${faq.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>

      <a href="#" class="del" onclick="return deletefaq(${faq.id})"><i class="fa fa-trash-o"></i></a>
    </td>
  `;
                  faqListTable.appendChild(faqRow);
                  index++;
               });
            }

            totalPages = data.totalPages;

            console.log('totalPages:', totalPages);

            updatePagination(currentPage, totalPages);
         } catch (error) {
            console.error('Error fetching faq:', error);
         }
      }

      function updatePage(pageNumber) {
         currentPage = pageNumber;
         getfaq();
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
      async function handleAddfaqFormSubmit() {
         const form = document.getElementById('addfaqForm');
         const formData = new FormData(form);
         const { question, answer } = Object.fromEntries(formData.entries());

         try {

            const response = await fetch('http://localhost:3000/faq/addData', {
               method: 'POST',
               headers: {
                  'Content-Type': 'application/json',
               },
               body: JSON.stringify({ question: question, answer: answer }),
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
            $('#addingfaq').modal('hide');

            // Tampilkan pesan sukses atau lakukan tindakan lain jika diperlukan
            console.log('faq added successfully.');

            // Tampilkan pesan sukses
            const successMessageDiv = document.getElementById('successMessage');
            successMessageDiv.style.display = 'block';

            // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
            setTimeout(() => {
               successMessageDiv.style.display = 'none';
            }, 5000);

            // Muat ulang data pengguna setelah berhasil menambahkan pengguna
            getfaq();
         } catch (error) {
            console.error('Error adding faq:', error);
            // Tampilkan pesan kesalahan jika diperlukan
         }
      }

      function buildfaqTable(faq) {
         const faqListTable = document.getElementById('faqList');
         faqListTable.innerHTML = ''; // Kosongkan tabel sebelum membangun ulang

         let index = 1;

         if (!faq || faq.length === 0) {
            const noDataRow = document.createElement('tr');
            noDataRow.innerHTML = '<td colspan="3">Tidak ada data</td>';
            faqListTable.appendChild(noDataRow);
         } else {
            faq.forEach(faq => {
               const faqRow = document.createElement('tr');
               faqRow.innerHTML = `
               <td>${index}</td>
    <td>${faq.question}</td>
    <td>${faq.answer}</td>
      <a href="edit-faq.php?id=${faq.id}" class="edt"><i class="fa fa-pencil-square-o"></i></a>

      <a href="#" class="del" onclick="return deletefaq(${faq.id})"><i class="fa fa-trash-o"></i></a>
    </td>
  `;
               faqListTable.appendChild(faqRow);
               index++;
            });
         }
      }


      // Fungsi untuk menghapus pengguna berdasarkan ID
      async function deletefaq(faqId) {
         // Tampilkan dialog konfirmasi
         const isConfirmed = window.confirm('Apakah Anda yakin ingin menghapus pengguna?');
         if (!isConfirmed) {
            return; // Jika pengguna membatalkan, hentikan proses penghapusan
         }

         try {
            const response = await fetch(`http://localhost:3000/faq/delete/${faqId}`, {
               method: 'DELETE',
            });
            if (response.ok) {
               console.log('Pengguna dengan ID', faqId, 'telah dihapus.');
               // Ambil data pengguna terbaru dari server setelah pengguna dihapus
               const updatedfaqResponse = await fetch('http://localhost:3000/faq/viewfaq');
               const updatedData = await updatedfaqResponse.json();
               const updatedfaq = updatedData.data;
               // Tampilkan pesan sukses
               const deleteMessageDiv = document.getElementById('deleteMessage');
               deleteMessageDiv.style.display = 'block';

               // Sembunyikan pesan sukses setelah 3 detik (3000 ms)
               setTimeout(() => {
                  deleteMessageDiv.style.display = 'none';
               }, 5000);

               buildfaqTable(updatedfaq); // Panggil kembali fungsi buildfaqTable dengan data pengguna terbaru
            } else {
               console.error('Gagal menghapus pengguna dengan ID', faqId);
            }
         } catch (error) {
            console.error('Error deleting faq:', error);
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