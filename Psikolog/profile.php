<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Profile</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />

	<!-- MDB icon -->
	<link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

	<!-- Google Fonts Roboto -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

	<!-- MDB -->
	<link rel="stylesheet" href="../assets/css/style.css" />

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- CSS bootstrap -->
	<link href="../assets/vendor/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background: #A5C9CA">
	<!-- Content -->
	<div class="container-profile">
		<section class="section profile">
			<div class="row">
				<div class="col-xl-4">
					<div class="card">
						<h2><a href="home.php" id="home-link" style="text-decoration:none;" alt="Back"><i
									class="fa fa-chevron-left"></i></a>Profile</h2>
						<div class="card-body profile-card pt-4 d-flex flex-column align-items-center profile-header"
							id="profileHeader"></div>
					</div>
				</div>

				<div class="col-xl-8">

					<div class="card">
						<div class="card-body pt-3">
							<!-- Bordered Tabs -->
							<ul class="nav nav-tabs nav-tabs-bordered">

								<div id="successMessage" style="display: none;">
									Password berhasil diubah
								</div>

								<div id="successMessageP" style="display: none;">
									Data Profile berhasil diubah
								</div>

								<li class="nav-item">
									<button class="nav-link active" data-bs-toggle="tab"
										data-bs-target="#profile-overview">Overview</button>
								</li>

								<li class="nav-item">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
										Edit Profile</button>
								</li>

								<li class="nav-item">
									<button class="nav-link" data-bs-toggle="tab"
										data-bs-target="#faq-container">FAQ</button>
								</li>

								<li class="nav-item">
									<button class="nav-link" data-bs-toggle="tab"
										data-bs-target="#profile-change-password">Change Password</button>
								</li>

							</ul>
							<div class="tab-content pt-2">
								<div class="tab-pane fade show active profile-overview" id="profile-overview">
									<h5 class="card-titlee">About</h5>
									<center><img src="../assets/img/logo.png" width="150px"></center>
									<p class="small" style="text-align:justify; margin-top: 25px; line-height: 25px;">
										Arti dari logo aplikasi ini, menggambarkan gelapnya hidup yang dialami, namun
										tetap ada cahaya terang yang akan membantu keluar dari gelapnya hidup. Logo
										memiliki arti lain dalam segi tampilan yaitu titik koma (;) yang melambangkan
										seseorang yang sedang melakukan perjuangan agar menjadi hidup yang lebih baik
										dan huruf menggunakan jenis font bertipe Bevan yang artinya kekuatan, font ini
										menggambarkan sesuatu yang kuat dan disukai semua orang.
									</p>

									<hr>

									<h5 class="card-titlee">Profile Details</h5>

									<div class="profile-details" id="profileInfo"></div>

								</div>

								<div class="tab-pane fade profile-edit-5" id="profile-edit">
									<!-- Profile Edit Form -->
									<form onsubmit="handleUpdateUserFormSubmit(event)">
										<input type="hidden" id="userId" name="userId">
										<div class="row mb-3">
											<label for="name" class="col-md-4 col-lg-3 col-form-label">Nama</label>
											<div class="col-md-8 col-lg-9">
												<input name="name" type="text" class="form-control" id="name" value="">
											</div>
										</div>

										<div class="row mb-3">
											<label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
											<div class="col-md-8 col-lg-9">
												<input name="email" type="text" class="form-control" id="email"
													value="">
											</div>
										</div>

										<div class="row mb-3">
											<label for="Email" class="col-md-4 col-lg-3 col-form-label">Jenis
												Kelamin</label>
											<div class="col-md-8 col-lg-9">
												<select id="gender" name="gender">
													<option value="">Silahkan Pilih</option>
													<option value="Laki - Laki">Laki - Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
										</div>

										<div class="row mb-3">
											<label for="company" class="col-md-4 col-lg-3 col-form-label">Kampus</label>
											<div class="col-md-8 col-lg-9">
												<input name="company" type="text" class="form-control" id="company"
													value="Institut Teknologi Telkom Purwokerto" disabled>
											</div>
										</div>

										<div class="row mb-3">
											<label for="Job" class="col-md-4 col-lg-3 col-form-label">Tipe</label>
											<div class="col-md-8 col-lg-9">
												<input name="type" type="text" class="form-control" id="type"
													value="Psikolog" disabled>
											</div>
										</div>

										<div class="text-center">
											<button type="submit" class="btn btn-primary">Save Changes</button>
										</div>
									</form><!-- End Profile Edit Form -->

								</div>

								<div class="tab-pane fade pt-3" id="faq-container">
									<form>
										<div class="row mb-3">
											<h2>Frequently Asked Questions</h2>
											<div class="accordion" id="accordionExample"></div>
										</div>
									</form>
								</div>

								<div class="tab-pane fade pt-3" id="profile-change-password">
									<!-- Change Password Form -->
									<form id="changePasswordForm" method="POST">

										<div class="row mb-3">
											<label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
												Password</label>
											<div class="col-md-8 col-lg-9">
												<input name="newpassword" type="password" class="form-control"
													id="newPassword">
											</div>
										</div>

										<div class="row mb-3">
											<label for="confirmPassword"
												class="col-md-4 col-lg-3 col-form-label">Confirm Password</label>
											<div class="col-md-8 col-lg-9">
												<input name="confirmPassword" type="password" class="form-control"
													id="confirmPassword">
											</div>
										</div>

										<div class="form-check mb-0">
											<input class="form-check-input me-2" type="checkbox" value=""
												id="showPassword" />
											<label class="form-check-label" for="showPassword">
												Show Password
											</label>
										</div>

										<div class="text-center">
											<button type="submit" class="btn btn-primary">Change Password</button>
										</div>
									</form><!-- End Change Password Form -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script>
		// Mendapatkan parameter user_id dari URL
		const urlParams = new URLSearchParams(window.location.search);
		const user_id = urlParams.get('id'); // Ini akan mengambil nilai user_id dari URL

		// Mengganti link profil dengan ID pengguna yang sesuai
		const homeLink = document.getElementById('home-link');
		homeLink.href = `home.php?id=${user_id}`;

		const showPasswordCheckbox = document.getElementById('showPassword');
		const passwordInputconf = document.getElementById('confirmPassword');
		const passwordInputnew = document.getElementById('newPassword');

		showPasswordCheckbox.addEventListener('change', () => {
			if (showPasswordCheckbox.checked) {
				passwordInputnew.type = 'text';
				passwordInputconf.type = 'text';
			} else {
				passwordInputnew.type = 'password';
				passwordInputconf.type = 'password';
			}
		});

		const changePasswordForm = document.querySelector('#profile-change-password');
		changePasswordForm.addEventListener('submit', async event => {
			event.preventDefault();

			const newPassword = passwordInputnew.value;
			const confirmPassword = passwordInputconf.value;

			if (newPassword !== confirmPassword) {
				console.log('New Password dan Confirm Password tidak sama');
				return;
			}

			const urlParams = new URLSearchParams(window.location.search);
			const userId = urlParams.get('id');

			const response = await fetch(`http://localhost:3000/profile/changePassword/${userId}`, {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify({ newPassword: newPassword, confirmPassword: confirmPassword })
			});

			if (!response.ok) {
				const result = await response.json();
				console.log(result); // Display success or error message
			} else {
				// Tampilkan pesan sukses
				const successMessageDiv = document.getElementById('successMessage');
				successMessageDiv.style.display = 'block';

				// Sembunyikan pesan sukses setelah 3 detik (3000 ms)
				setTimeout(() => {
					successMessageDiv.style.display = 'none';
				}, 3000);
				// Reset form setelah berhasil mengubah kata sandi
				passwordInputnew.value = '';
				passwordInputconf.value = '';
			}
		});

		// Fungsi untuk mendapatkan data faq dari backend
		async function getFaqData() {
			try {
				const response = await fetch('http://localhost:3000/faq/viewFAQ');
				const data = await response.json();
				return data.data;
			} catch (error) {
				console.error('Error fetching faq data:', error);
				return [];
			}
		}

		// Fungsi untuk mengisi konten faq pada halaman
		async function fillFaqContent() {
			const faqContainer = document.getElementById('accordionExample');
			const faqData = await getFaqData();

			if (!Array.isArray(faqData) || faqData.length === 0) {
				// Tampilkan pesan jika data FAQ tidak ada
				faqContainer.innerHTML = '<p>Tidak ada FAQ</p>';
			} else {
				// Tampilkan data FAQ pada halaman
				faqContainer.innerHTML = faqData
					.map(
						(faq, index) => `
				<div class="accordion-item">
					<h2 class="accordion-header" id="heading${index}">
						<button class="accordion-button" type="button"
							data-bs-toggle="collapse" data-bs-target="#collapse${index}"
							aria-expanded="true" aria-controls="collapse${index}">
							${faq.question}
						</button>
					</h2>
					<div id="collapse${index}" class="accordion-collapse collapse"
						aria-labelledby="heading${index}" data-bs-parent="#accordionExample">
						<div class="accordion-body">${faq.answer}</div>
					</div>
				</div>
				`
					)
					.join('');
			}
		}

		async function fetchUserDataAndShowEditForm(userId) {
			try {
				const response = await fetch(`http://localhost:3000/profile/userProfile/${userId}`);

				if (!response.ok) {
					throw new Error('Gagal memuat data pengguna.');
				}

				const data = await response.json();

				// Isi data pengguna ke dalam formulir edit
				document.getElementById('userId').value = data.id;
				document.getElementById('name').value = data.name;
				document.getElementById('email').value = data.email;
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
			const name = document.getElementById('name').value;
			const email = document.getElementById('email').value;
			const jeniskelamin = document.getElementById('gender').value;

			// Menggunakan Fetch API untuk mengirim permintaan PUT ke server dengan data yang diperbarui
			try {
				const response = await fetch(`http://localhost:3000/profile/updateUser/${userId}`, {
					method: 'PUT',
					headers: {
						'Content-Type': 'application/json',
					},
					body: JSON.stringify({name:name, email:email, jeniskelamin:jeniskelamin}),
				});


				if (!response.ok) {
					const data = await response.json();
					throw new Error('Gagal memperbarui data pengguna.');
				} else {
					// Tampilkan pesan sukses
					const successMessageDiv = document.getElementById('successMessageP');
					successMessageDiv.style.display = 'block';

					// Sembunyikan pesan sukses setelah 3 detik (3000 ms)
					setTimeout(() => {
						successMessageDiv.style.display = 'none';
					}, 3000);
				}
			} catch (error) {
				// Tangani kesalahan jika terjadi
				console.error('Error saat memperbarui data pengguna:', error);
				alert('Terjadi kesalahan saat menyimpan perubahan. Silakan coba lagi.');
			}
		}

		// Panggil fungsi untuk mengisi data profil saat halaman dimuat
		document.addEventListener('DOMContentLoaded', async () => {

			try {
				// Mendapatkan ID dari URL menggunakan JavaScript
				const urlParams = new URLSearchParams(window.location.search);
				const userId = urlParams.get('id');
				// Memastikan bahwa userId tidak kosong atau null sebelum menggunakan
				if (userId) {
					const profileUrl = `http://localhost:3000/profile/userProfile/${userId}`;

					// Fetch data profil pengguna dari backend
					fetch(profileUrl)
						.then(response => response.json())
						.then(data => {
							// Tampilkan data profil pengguna di halaman
							console.log(data);
							if (data) {
								const profileHeader = document.getElementById('profileHeader');
								profileHeader.innerHTML = `
									<h2>${data.name}</h2>
									<h3>${data.type}</h3>
								`;

								const profileInfo = document.getElementById('profileInfo');
								profileInfo.innerHTML = `
									<div class="row">
										<div class="col-lg-3 col-md-4 label">Nama</div>
										<div class="col-lg-9 col-md-8">: ${data.name}</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-md-4 label">Email</div>
										<div class="col-lg-9 col-md-8">: ${data.email}</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
										<div class="col-lg-9 col-md-8">: ${data.jeniskelamin}</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-md-4 label">Kampus</div>
										<div class="col-lg-9 col-md-8">: Institut Teknologi Telkom Purwokerto</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-md-4 label">Tipe</div>
										<div class="col-lg-9 col-md-8">: ${data.type}</div>
									</div>
								`;

							}
						});


				} else {
					console.error('No user ID found in the URL');
				}
			} catch (error) {
				console.error('Error:', error);
			}
		});

		document.addEventListener('DOMContentLoaded', fillFaqContent);
	</script>
	<script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>