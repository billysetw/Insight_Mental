<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login</title>
  <!-- MDB icon -->
  <link rel="icon" href="./assets/img/logo.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="./assets/css/bootstrap-login-form.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="./assets/img/img.png" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form id="loginForm" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in to</p>
              <span>Insight Mental</span>
            </div>
            <div class="divider d-flex align-items-center my-4">
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Email</label>
              <input type="email" id="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" required="" />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Password</label>
              <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter password"
                required="" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="showPassword" />
                <label class="form-check-label" for="showPassword">
                  Show Password
                </label>
              </div>
              <a href="forgot-password.php" class="text-body">Forgot Password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <script>

    const showPasswordCheckbox = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');

    showPasswordCheckbox.addEventListener('change', () => {
      if (showPasswordCheckbox.checked) {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    });

    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', async (event) => {
      event.preventDefault();

      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      try {
        const response = await fetch('http://localhost:3000/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({ email, password }),
        });

        const data = await response.json();

        if (response.ok) {
          // Login sukses, panggil fungsi handleLoginSuccess dengan authToken
          const authToken = data.authToken;
          const { id, type } = data.user; // Destructure the 'user' object to get 'id' and 'type'

          if (type === 'Admin') {
            window.location.href = './Admin/dashboard.php';
          } else if (type === 'Psikolog') {
            window.location.href = `./Psikolog/home.php?id=${id}`;
          } else if (type === 'Mahasiswa') {
            alert('Anda tidak memiliki hak akses ke dalam Website Insight Mental');
          } // Pindahkan pengguna ke halaman profil

        } else {
          // Login gagal, tampilkan pesan error
          alert(data.message);
        }
      } catch (error) {
        console.error('Error during login:', error);
        alert('An error occurred during login. Please try again later.');
      }
    });

    // Setelah pengguna berhasil login
    function handleLoginSuccess(authToken) {
      localStorage.setItem('authToken', authToken);
    }
  </script>

</body>

</html>