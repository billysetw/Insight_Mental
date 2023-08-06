<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <!-- MDB icon -->
  <link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-default">
    <div class="container-fluidd">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><img src="../assets/img/logoa.png"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active-nav"><a href="home.php" id="home-link"><img src="../assets/img/icon/icon-home.png">
              <p>Home</p>
            </a></li>
          <li><a href="chat.php" id="chat-link"><img src="../assets/img/icon/icon-chatting.png">
              <p>Chat</p>
            </a></li>
          <li><a href="profile.php" id="profile-link"><img src="../assets/img/icon/icon-account.png">
              <p>Profil</p>
            </a></li>
          <li class="logout"><a href="#" onclick="logout()"><img src="../assets/img/icon/icon-logout.png">
              <p>Logout</p>
            </a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="containerr">
    <div class="card">
      <h1>Hai, <b>Psikolog</b></h1>
      <h4>Selamat Datang di Website Insight Mental!</h4>
      <hr>
      <div class="sub-header">
        <h3><b>Information</b></h3>
        <h4><b>4 Informasi Berita</b></h4>
      </div>
      <hr>
      <main>
        <section class="news-section">
          <div class="news-container" id="news-container"></div>
        </section>
      </main>
    </div>
  </div>
  <script>

    // Fungsi untuk memeriksa apakah pengguna telah login
    function checkAuthentication() {
      const authToken = localStorage.getItem('authToken'); // Ganti dengan cara penyimpanan token yang sesuai
      return !!authToken; // Mengembalikan true jika token ada
    }

    // Mendapatkan parameter user_id dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const user_id = urlParams.get('id'); // Ini akan mengambil nilai user_id dari URL

    // Mengganti link profil dengan ID pengguna yang sesuai
    const homeLink = document.getElementById('home-link');
    homeLink.href = `home.php?id=${user_id}`;

    // Mengganti link profil dengan ID pengguna yang sesuai
    const chatLink = document.getElementById('chat-link');
    chatLink.href = `chat.php?id=${user_id}`;

    // Mengganti link profil dengan ID pengguna yang sesuai
    const profileLink = document.getElementById('profile-link');
    profileLink.href = `profile.php?id=${user_id}`;

    // Fungsi untuk mendapatkan data berita dari backend
    async function getNewsData() {
      try {
        const response = await fetch('http://localhost:3000/information/viewInformation');
        const data = await response.json();
        return data.data;
      } catch (error) {
        console.error('Error fetching news data:', error);
        return [];
      }
    }

    // Fungsi untuk mengisi konten berita pada halaman
    async function fillNewsContent() {
      const newsContainer = document.getElementById('news-container');
      const newsData = await getNewsData();

      if (!Array.isArray(newsData) || newsData.length === 0) {
        // Tampilkan pesan jika data berita tidak ada
        newsContainer.innerHTML = '<p>Tidak ada berita terkinni.</p>';
      } else {
        // Tampilkan data berita pada halaman
        newsContainer.innerHTML = newsData
          .map(
            (news) => `
            <a href="${news.weburl}" target="_blank">
              <div class="news-item">
                <hr><h3 class="news-title">${news.title}</h3><hr>
                <p class="news-date">${formatNewsDate(news.createdAt)}</p>
                <p class="news-content">${news.desc}</p>
              </div>
            </a>
          `
          ).join('');

      }
    }

    // Fungsi untuk mengubah format tanggal dari UTC ke format yang lebih mudah dibaca
    function formatNewsDate(utcDate) {
      const dateObject = new Date(utcDate);
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      return dateObject.toLocaleString('id-ID', options);
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

    // Panggil fungsi untuk mengisi konten berita saat halaman dimuat
    document.addEventListener('DOMContentLoaded', fillNewsContent);
  </script>

</body>

</html>