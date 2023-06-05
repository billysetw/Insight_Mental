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
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

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
						<h2><a href="home.php" style=”text-decoration:none;” alt="Back"><i class="fa fa-chevron-left"></i></a>Profile</h2>
						<div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
							<img src="../assets/img/games.jpeg" alt="Profile" class="rounded-circle">
							<h2>Kevin Anderson</h2>
							<h3>Psikolog</h3>
						</div>
					</div>
				</div>

				<div class="col-xl-8">

					<div class="card">
						<div class="card-body pt-3">
							<!-- Bordered Tabs -->
							<ul class="nav nav-tabs nav-tabs-bordered">

								<li class="nav-item">
									<button class="nav-link active" data-bs-toggle="tab"
										data-bs-target="#profile-overview">Overview</button>
								</li>

								<li class="nav-item">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
										Profile</button>
								</li>

								<li class="nav-item">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#faq">FAQ</button>
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
									<p class="small fst-italic"
										style="text-align:justify; margin-top: 25px; line-height: 25px;">
										Arti dari logo aplikasi ini, menggambarkan gelapnya hidup yang dialami, namun
										tetap ada cahaya terang yang akan membantu keluar dari gelapnya hidup. Logo
										memiliki arti lain dalam segi tampilan yaitu titik koma (;) yang melambangkan
										seseorang yang sedang melakukan perjuangan agar menjadi hidup yang lebih baik
										dan huruf menggunakan jenis font bertipe Bevan yang artinya kekuatan, font ini
										menggambarkan sesuatu yang kuat dan disukai semua orang.
									</p>

									<hr>

									<h5 class="card-titlee">Profile Details</h5>

									<div class="row">
										<div class="col-lg-3 col-md-4 label ">Full Name</div>
										<div class="col-lg-9 col-md-8">Kevin Anderson</div>
									</div>

									<div class="row">
										<div class="col-lg-3 col-md-4 label">Company</div>
										<div class="col-lg-9 col-md-8">Institut Teknologi Telkom Purwokerto</div>
									</div>

									<div class="row">
										<div class="col-lg-3 col-md-4 label">Job</div>
										<div class="col-lg-9 col-md-8">Psikolog</div>
									</div>

									<div class="row">
										<div class="col-lg-3 col-md-4 label">Email</div>
										<div class="col-lg-9 col-md-8">k.anderson@example.com</div>
									</div>

								</div>

								<div class="tab-pane fade profile-edit pt-3" id="profile-edit">

									<!-- Profile Edit Form -->
									<form>
										<div class="row mb-3">
											<label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
												Name</label>
											<div class="col-md-8 col-lg-9">
												<input name="fullName" type="text" class="form-control" id="fullName"
													value="Kevin Anderson">
											</div>
										</div>

										<div class="row mb-3">
											<label for="company"
												class="col-md-4 col-lg-3 col-form-label">Company</label>
											<div class="col-md-8 col-lg-9">
												<input name="company" type="text" class="form-control" id="company"
													value="nstitut Teknologi Telkom Purwokerto">
											</div>
										</div>

										<div class="row mb-3">
											<label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
											<div class="col-md-8 col-lg-9">
												<input name="job" type="text" class="form-control" id="Job"
													value="Psikolog">
											</div>
										</div>

										<div class="row mb-3">
											<label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
											<div class="col-md-8 col-lg-9">
												<input name="email" type="email" class="form-control" id="Email"
													value="k.anderson@example.com">
											</div>
										</div>

										<div class="text-center">
											<button type="submit" class="btn btn-primary">Save Changes</button>
										</div>
									</form><!-- End Profile Edit Form -->

								</div>

								<div class="tab-pane fade pt-3" id="faq">

									<!--FAQ -->
									<form>
										<div class="row mb-3">
											<h2>Frequently Asked Questions</h2>
											<div class="accordion" id="accordionExample">
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingOne">
														<button class="accordion-button" type="button"
															data-bs-toggle="collapse" data-bs-target="#collapseOne"
															aria-expanded="true" aria-controls="collapseOne">
															Accordion Item #1
														</button>
													</h2>
													<div id="collapseOne" class="accordion-collapse collapse show"
														aria-labelledby="headingOne" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<strong>This is the first item's accordion body.</strong> It
															is shown by default, until the collapse plugin adds the
															appropriate classes that we use to style each element. These
															classes control the overall appearance, as well as the
															showing and hiding via CSS transitions. You can modify any
															of this with custom CSS or overriding our default variables.
															It's also worth noting that just about any HTML can go
															within the <code>.accordion-body</code>, though the
															transition does limit overflow.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingTwo">
														<button class="accordion-button collapsed" type="button"
															data-bs-toggle="collapse" data-bs-target="#collapseTwo"
															aria-expanded="false" aria-controls="collapseTwo">
															Accordion Item #2
														</button>
													</h2>
													<div id="collapseTwo" class="accordion-collapse collapse"
														aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<strong>This is the second item's accordion body.</strong>
															It is hidden by default, until the collapse plugin adds the
															appropriate classes that we use to style each element. These
															classes control the overall appearance, as well as the
															showing and hiding via CSS transitions. You can modify any
															of this with custom CSS or overriding our default variables.
															It's also worth noting that just about any HTML can go
															within the <code>.accordion-body</code>, though the
															transition does limit overflow.
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="headingThree">
														<button class="accordion-button collapsed" type="button"
															data-bs-toggle="collapse" data-bs-target="#collapseThree"
															aria-expanded="false" aria-controls="collapseThree">
															Accordion Item #3
														</button>
													</h2>
													<div id="collapseThree" class="accordion-collapse collapse"
														aria-labelledby="headingThree"
														data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<strong>This is the third item's accordion body.</strong> It
															is hidden by default, until the collapse plugin adds the
															appropriate classes that we use to style each element. These
															classes control the overall appearance, as well as the
															showing and hiding via CSS transitions. You can modify any
															of this with custom CSS or overriding our default variables.
															It's also worth noting that just about any HTML can go
															within the <code>.accordion-body</code>, though the
															transition does limit overflow.
														</div>
													</div>
												</div>
											</div>
										</div>
									</form><!-- End FAQ -->

								</div>

								<div class="tab-pane fade pt-3" id="profile-change-password">
									<!-- Change Password Form -->
									<form>

										<div class="row mb-3">
											<label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
												Password</label>
											<div class="col-md-8 col-lg-9">
												<input name="newpassword" type="password" class="form-control"
													id="newPassword">
											</div>
										</div>

										<div class="row mb-3">
											<label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
												New Password</label>
											<div class="col-md-8 col-lg-9">
												<input name="renewpassword" type="password" class="form-control"
													id="renewPassword">
											</div>
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
	<script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
</body>

</html>