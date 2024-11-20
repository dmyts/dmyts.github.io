<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title  -->
	<title>Basecodes /> | Belajar Dasar Website</title>
	<meta name="description" content="*Not Original Assets or Template - Pembelajaran Dasar-dasar
	Website di Kelas 10 PPLG 2">
	<meta name="keywords" content="HTML, CSS, PHP, MySQL">
	<meta name="author" content="Dana Raga">

	<!-- Development css -->
	<link rel="stylesheet" href="./front-end/style/style.css">

	<!-- TailwindCSS -->
	<link rel="stylesheet" href="./front-end/public/tailwind.css">

</head>

<body class="text-gray-700">

	<!-- ========== { HEADER }==========  -->
	<header class="top-0 left-0 right-0 z-40">
		<nav class="main-nav">
			<div class="container xl:max-w-6xl mx-auto px-4">
				<div class="lg:flex lg:justify-between">
					<div class="flex justify-between">
						<div class="mx-w-10 text-4xl font-bold capitalize text-gray-900 flex items-center">
							<a href="./index.php">Basecodes /></a>
						</div>
						<!-- mobile nav -->
						<div class="flex flex-row items-center py-4 lg:py-0">
							<div class="relative text-gray-900 hover:text-black block lg:hidden">
								<button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent">
									<span class="sr-only">Mobile menu</span>
									<svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
									</svg>

									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="close bi bi-x-lg h-8 w-8" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
										<path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
									</svg>
								</button>
							</div>
						</div>
					</div>

					<div class="flex flex-row">
						<!-- nav menu -->
						<ul class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row text-gray-900 text-sm items-center font-bold">
							<li class="relative hover:text-black">
								<a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#hero">Home</a>
							</li>
							<li class="relative hover:text-black">
								<a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="#contact">Contact</a>
							</li>
							<li class="relative hover:text-black">
								<a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="../../back-end/admin/CRUD-Index/login.php">Log In Admin</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header><!-- end header -->

	<!-- =========={ MAIN }==========  -->

	<?php
	$host = "localhost";
	$user = "root";
	$passw = "";
	$db = "basecodes";

	$conn = mysqli_connect($host, $user, $passw, $db);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT h1, descript FROM index_web";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
	?>

			<main id="content">
				<!-- hero start -->
				<div id="hero" class="section relative z-0 py-16 md:pt-32 md:pb-20 bg-gray-50">
					<div class="container xl:max-w-6xl mx-auto px-4">
						<div class="flex flex-wrap flex-row -mx-4 justify-center">
							<!-- content -->
							<div class="flex-shrink max-w-full px-4 sm:px-12 lg:px-18 w-full sm:w-9/12 lg:w-1/2 self-center">
								<img src="./front-end/src/src/img/dummy/hero.svg" class="w-full max-w-full h-auto" alt="creative agency">
							</div><!-- end content -->

							<!-- text -->
							<div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
								<div class="text-center lg:text-left mt-6 lg:mt-0">
									<div class="mb-12">
										<h1 class="text-4xl leading-normal text-black font-bold mb-4"><?php echo $row["h1"]; ?> <span data-toggle="typed" data-options='{"strings": ["HTML Dasar", "CSS Dasar", "PHP Dasar", "MySQL Dasar"]}'></span></h1>
										<p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2"><?php echo $row["descript"]; ?></p>
									</div>
									<a class="py-2.5 px-10 inline-block text-center leading-normal text-gray-900 bg-white border-b border-gray-100 hover:text-black hover:ring-0 focus:outline-none focus:ring-0 mr-4" href="#pembelajaran">
										<svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 512 512">
											<path d="M304,384V360c0-29,31.54-56.43,52-76,28.84-27.57,44-64.61,44-108,0-80-63.73-144-144-144A143.6,143.6,0,0,0,112,176c0,41.84,15.81,81.39,44,108,20.35,19.21,52,46.7,52,76v24" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
											<line x1="224" y1="480" x2="288" y2="480" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
											<line x1="208" y1="432" x2="304" y2="432" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
											<line x1="256" y1="384" x2="256" y2="256" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
											<path d="M294,240s-21.51,16-38,16-38-16-38-16" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
										</svg>
										Start Learning
									</a>

								</div>
							</div>
						</div>
					</div>
				</div><!-- end Hero -->

		<?php
		} else {
			echo "";
		}
	} else {
		echo "Error in query: " . mysqli_error($conn);
	}

	// Tutup koneksi database
	mysqli_close($conn);
		?>

		<!-- start learning -->
		<div id="pembelajaran" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
			<div class="container xl:max-w-6xl mx-auto px-4">
				<!-- Heading start -->
				<header class="text-center mx-auto mb-12 lg:px-20">
					<h2 class="text-2xl leading-normal mb-2 font-bold text-black">Pembelajaran</h2>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
						<circle cx="50.1" cy="30.4" r="5" class="stroke-primary" style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
						<line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
						<line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
					</svg>
					<p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Dasar-dasar Pengembangan Web</p>
				</header><!-- End heading -->

				<!-- row -->
				<div class="flex flex-wrap flex-row -mx-4 text-center">
					<div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s">
						<!-- learning block -->
						<a href="./front-end/src/materi-html.php">
							<div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
								<div class="inline-block text-gray-900 text-3xl mb-4">
									<i class="fa-brands fa-html5"></i>
								</div>
								<h3 class="text-lg leading-normal mb-2 font-semibold text-black">HTML Dasar</h3>
							</div> <!-- end service block -->
						</a>
					</div>

					<div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<!-- service block -->
						<a href="./front-end/src/materi-css.php">
							<div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
								<div class="inline-block text-gray-900 text-3xl mb-4">
									<i class="fa-brands fa-css3-alt"></i>
								</div>
								<h3 class="text-lg leading-normal mb-2 font-semibold text-black">CSS Dasar</h3>
							</div><!-- end service block -->
						</a>
					</div>


					<div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
						<!-- service block -->
						<a href="./front-end/src/materi-php.php">
							<div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
								<div class="inline-block text-gray-900 text-3xl mb-4">
									<i class="fa-brands fa-php"></i>
								</div>
								<h3 class="text-lg leading-normal mb-2 font-semibold text-black">PHP Dasar</h3>
							</div><!-- end service block -->
						</a>
					</div>

					<div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s">
						<!-- service block -->
						<a href="./front-end/src/materi-mysql.php">
							<div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
								<div class="inline-block text-gray-900 text-3xl mb-4">
									<i class="fa-solid fa-database"></i>
								</div>
								<h3 class="text-lg leading-normal mb-2 font-semibold text-black">MySQL Dasar</h3>
							</div><!-- end service block -->
						</a>
					</div>
				</div><!-- end row -->
			</div>
		</div><!-- End Service -->

		<!-- contact start -->
		<div id="contact" class="section relative pb-20 bg-white">
			<div class="container xl:max-w-6xl mx-auto px-4">
				<div class="flex flex-wrap flex-row -mx-4 justify-center">
					<div class="max-w-ful px-4 w-full lg:w-8/12">
						<div class="bg-gray-50 border-b border-gray-100 w-full p-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
							<!-- section header -->
							<header class="text-center mx-auto mb-12 lg:px-20">
								<h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800"><span class="font-light">Contact</span> Us</h2>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
									<circle cx="50.1" cy="30.4" r="5" class="stroke-primary" style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
									<line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
									<line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary" style="stroke-width: 2;stroke-miterlimit: 10;"></line>
								</svg>
								<p class="text-gray-600 leading-relaxed font-light text-xl mx-auto pb-2">Have questions about service, please contact us.</p>
							</header><!-- end section header -->

							<!-- contact form -->
							<form action="../../back-end/admin/CRUD-Index/save_contact.php" method="post">
								<div class="flex flex-wrap flex-row -mx-4">
									<div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
										<label class="inline-block mb-2" for="name">Your Name</label>
										<input type="text" name="nama" class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="name">
										<div class="validate"></div>
									</div>
									<div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
										<label class="inline-block mb-2" for="email">Your Email</label>
										<input type="email" class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="email" id="email">
										<div class="validate"></div>
									</div>
								</div>
								<div class="mb-6">
									<label class="inline-block mb-2" for="subject">Subject</label>
									<input type="text" class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="subj" id="subject">
									<div class="validate"></div>
								</div>
								<div class="mb-6">
									<label class="inline-block mb-2" for="messages">Message</label>
									<textarea class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border-b border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="pesan" rows="10" id="messages"></textarea>
									<div class="validate"></div>
								</div>
								<div class="text-center mb-6">
									<button class="py-2.5 px-10 inline-block text-center leading-normal text-gray-100 bg-black border border-black hover:text-white hover:ring-0 focus:outline-none focus:ring-0" name="save">
										<svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" class="inline-block mr-1" fill="currentColor" viewBox="0 0 512 512">
											<rect x="48" y="96" width="416" height="320" rx="40" ry="40" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
											<polyline points="112 160 256 272 400 160" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
										</svg>
										Send message
								</div>
							</form><!-- end contact form -->
						</div>
					</div>
				</div>
			</div>
		</div><!-- End contact -->
			</main><!-- end main -->

			<!-- =========={ FOOTER }==========  -->
			<footer class="bg-gray-50 text-gray-700">
				<!--Footer content-->
				<div id="footer-content" class="relative pt-8 xl:pt-16 pb-6 xl:pb-12">
					<div class="container xl:max-w-6xl mx-auto px-4 overflow-hidden">
						<div class="flex flex-wrap flex-row lg:justify-between -mx-3">
							<div class="flex-shrink max-w-full w-full lg:w-2/5 px-3 lg:pr-16">
								<div class="flex items-center mb-2">
									<span class="text-3xl leading-normal mb-2 font-bold text-gray-800 mt-2">Basecodes</span>
								</div>
								<p>Sebuah website pembelajaran dasar pemrograman</p>
								<ul class="space-x-3 mt-6 mb-6 Lg:mb-0">
									<!--TikTok-->
									<li class="inline-block">
										<a target="_blank" class="hover:text-gray-800 text-3xl" rel="noopener noreferrer" href="https://www.tiktok.com/@dnrazzl" title="TikTok">
											<i class="fa-brands fa-tiktok"></i>
										</a>
									</li>
									<!--Linkedin-->
									<li class="inline-block">
										<a target="_blank" class="hover:text-gray-800 text-3xl" rel="noopener noreferrer" href="https://www.linkedin.com/in/dana-raga-a40763293/" title="LinkedIn">
											<i class="fa-brands fa-linkedin"></i>
										</a>
									</li>
									<!--youtube-->
									<li class="inline-block">
										<a target="_blank" class="hover:text-gray-800 ml-0 text-3xl" rel="noopener noreferrer" href="https://youtube.com/@dnrazzl" title="Youtube">
											<i class="fa-brands fa-youtube"></i>
									</li>
									<!--instagram-->
									<li class="inline-block">
										<a target="_blank" class="hover:text-gray-800 text-3xl" rel="noopener noreferrer" href="https://instagram.com" title="Instagram">
											<i class="fa-brands fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>

							<!--Start footer copyright-->
							<div class="footer-dark">
								<div class="container xl:max-w-6xl mx-auto px-4 py-4 border-t border-gray-200 border-opacity-10">
									<div class="row">
										<div class="col-12 col-md text-center">
											<p class="d-block my-3">Copyright © Dana Raga | 2024 All rights reserved.</p>
										</div>
									</div>
								</div>
							</div><!--End footer copyright-->
			</footer><!-- end footer -->

			<!-- =========={ SCROLL TO TOP }==========  -->
			<a href="#" class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden" aria-label="Scroll To Top">
				<svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
					<path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
				</svg>
			</a>

			<!--Vendor js-->
			<script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script>
			<script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
			<script src="src/vendors/typed.js/lib/typed.min.js"></script>
			<script src="src/vendors/wow.js/dist/wow.min.js"></script>
			<script src="src/vendors/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

			<!-- Start development js -->
			<script src="src/js/theme.js"></script>
			<!-- End development js -->

			<!-- Production js -->
			<!-- <script src="dist/js/scripts.js"></script> -->
</body>

</html>