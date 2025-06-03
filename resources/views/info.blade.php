<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>UMKM Klandasan Ilir</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Site CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="bg-gray-50">
	<!-- Start Main Top -->
	<header class="main-header shadow-md sticky top-0 z-50 bg-white">
		<!-- Start Navigation -->
		<nav class="container mx-auto px-14 py-4 flex items-center justify-between">
                <a href="{{ route('welcome') }}"
                class="flex items-center space-x-3">
				<img alt="Logo of UMKM Klandasan Ilir, a stylized emblem with local cultural motifs" class="h-20 w-auto"
					height="108" src="images/logo.png" width="108" />
				<span class="text-2xl font-extrabold text-blue-600 select-none">
					UMKM Klandasan Ilir
				</span>
			</a>
			<div class="hidden md:flex space-x-10 font-semibold text-gray-700">
                <a href="{{ route('welcome') }}"
                class="hover:text-blue-600 px-4 py-1 rounded-md transition-colors duration-200">Beranda</a>
                <a href="{{ route('info') }}"
					class="relative group px-4 py-1 rounded-md text-blue-600 border-b-4 border-blue-600">Informasi</a>
			</div>
			<div class="flex items-center space-x-5">
				<button aria-label="Open menu" class="md:hidden text-gray-600 hover:text-blue-600 focus:outline-none"
					id="mobileMenuBtn">
					<i class="fa fa-bars fa-lg"></i>
				</button>
			</div>
		</nav>
		<!-- Mobile Menu -->
		<div class="hidden md:hidden bg-white border-t border-gray-200" id="mobileMenu">
			<a href="index.html"
				class="block px-6 py-4 border-b border-gray-200 font-semibold text-gray-700 hover:bg-blue-50">Beranda</a>
			<a href="info.html"
				class="block px-6 py-4 border-b border-gray-200 font-semibold text-gray-700 hover:bg-blue-50">Informasi</a>
		</div>
	</header>

	<main class="max-w-7xl mx-auto p-8">
		<!-- Numbers Section -->
		<section class="bg-white py-12 rounded-lg shadow-md text-center">
			<h3 class="text-2xl font-semibold mb-10 text-gray-800">Statistik UMKM Klandasan Ilir</h3>
			<div class="grid grid-cols-1 sm:grid-cols-3 gap-12 max-w-5xl mx-auto">
				<div>
					<img src="https://cdn-icons-png.flaticon.com/512/69/69524.png" alt="Locations"
						class="mx-auto w-16 mb-3" />
					<h4 class="font-semibold text-lg mb-1">56 RT</h4>
				</div>
				<div>
					<img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" alt="Members"
						class="mx-auto w-16 mb-3" />
					<h4 class="font-semibold text-lg mb-1">500+ Pelaku UMKM</h4>
				</div>
				<div>
					<img src="https://cdn-icons-png.flaticon.com/512/709/709579.png" alt="Products"
						class="mx-auto w-16 mb-3" />
					<h4 class="font-semibold text-lg mb-1">150+ Produk Unggulan</h4>
				</div>
			</div>
			<div class="mt-12 text-gray-600 text-sm">
				Bersama tingkatkan potensi UMKM Klandasan Ilir dalam memajukan ekonomi masyarakat!
			</div>
		</section>
	</main>

	<!-- Start Footer  -->
	<footer class="bg-white px-14 py-4">
		<div class="container mx-auto">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<div>
					<h4 class="text-lg font-semibold mb-3">
						Informasi Selengkapnya
					</h4>
					<ul class="space-y-2">
						<li>
							<a class="hover:text-blue-600" href="#">
								Terms &amp; Conditions
							</a>
						</li>
						<li>
							<a class="hover:text-blue-600" href="#">
								Privacy Policy
							</a>
						</li>
						<li>
							<a class="hover:text-blue-600" href="{{ route('login') }}">
							<i class="fa fa-user" aria-hidden="true"></i>						
							</a>
						</li>
					</ul>
				</div>
				<div>
					<h4 class="text-lg font-semibold mb-3">
						Kontak Kami
					</h4>
					<ul class="space-y-4">
						<li class="flex items-start space-x-3">
							<i class="fas fa-map-marker-alt mt-1 text-blue-600">
							</i>
							<p>
								Alamat: Jl. Gajah Mada RT. 27 NO. 53
								<br />
								Kelurahan Klandasan Ilir, Kecamatan Balikpapan Kota
								<br />
								Kode Pos 76113
							</p>
						</li>
						<li class="flex items-center space-x-3">
							<i class="fas fa-envelope text-blue-600">
							</i>
							<a class="hover:text-blue-600" href="mailto:kelklandasanilir01@gmail.com">
								kelklandasanilir01@gmail.com
							</a>
						</li>
					</ul>
				</div>
				<div>
					<h3 class="text-xl font-semibold mb-4">
						Media Sosial
					</h3>
					<div class="flex space-x-4 text-gray-600 text-2xl">
						<a aria-label="Facebook" class="hover:text-blue-600" href="https://www.facebook.com/kelurahan.klandasanilir/">
							<i class="fab fa-facebook">
							</i>
						</a>
						<a aria-label="Instagram" class="hover:text-blue-400" href="https://www.instagram.com/kelurahanklandasanilir/">
							<i class="fab fa-instagram">
							</i>
						</a>
						<a aria-label="LinkedIn" class="hover:text-blue-700" href="#">
							<i class="fab fa-linkedin">
							</i>
						</a>
						<a aria-label="Youtube" class="hover:text-red-600" href="https://www.youtube.com/@PemerintahKotaBalikpapan">
							<i class="fab fa-youtube">
							</i>
						</a>	
						<a aria-label="WhatsApp" class="hover:text-green-600" href="#">
							<i class="fab fa-whatsapp">
							</i>
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<!-- End Footer  -->
	<!-- Start copyright  -->
	<div class="bg-gray-100 text-center py-4 text-gray-600 text-sm">
		All Rights Reserved. © 2025
		<a class="text-blue-600 hover:underline" href="#">
			KlandasanIlir
		</a>
		Design By :
		<a class="text-blue-600 hover:underline" href="https://html.design/">
			KKN C-5 ITK
		</a>
	</div>
	<!-- End copyright  -->
	<a aria-label="Back to top"
		class="fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hidden hover:bg-blue-700 focus:outline-none"
		href="#" id="back-to-top" title="Back to top">
		↑
	</a>
	<script>
		// Mobile menu toggle
		const mobileMenuBtn = document.getElementById('mobileMenuBtn');
		const mobileMenu = document.getElementById('mobileMenu');
		mobileMenuBtn.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
		});

		// Search overlay toggle
		const searchBtn = document.getElementById('searchBtn');
		const searchOverlay = document.getElementById('searchOverlay');
		const closeSearch = document.getElementById('closeSearch');

		searchBtn.addEventListener('click', () => {
			searchOverlay.classList.remove('hidden');
			searchOverlay.querySelector('input').focus();
		});
		closeSearch.addEventListener('click', () => {
			searchOverlay.classList.add('hidden');
		});

		// Back to top button
		const backToTop = document.getElementById('back-to-top');
		window.addEventListener('scroll', () => {
			if (window.scrollY > 300) {
				backToTop.classList.remove('hidden');
			} else {
				backToTop.classList.add('hidden');
			}
		});
		backToTop.addEventListener('click', e => {
			e.preventDefault();
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});

		// Slider functionality
		const slides = [document.getElementById('slide1'), document.getElementById('slide2'), document.getElementById('slide3')];
		let currentSlide = 0;
		const showSlide = (index) => {
			slides.forEach((slide, i) => {
				slide.style.opacity = i === index ? '1' : '0';
				slide.style.zIndex = i === index ? '10' : '0';
			});
		};
		showSlide(currentSlide);

		document.getElementById('prevSlide').addEventListener('click', () => {
			currentSlide = (currentSlide - 1 + slides.length) % slides.length;
			showSlide(currentSlide);
		});
		document.getElementById('nextSlide').addEventListener('click', () => {
			currentSlide = (currentSlide + 1) % slides.length;
			showSlide(currentSlide);
		});

		// Auto slide every 5 seconds
		setInterval(() => {
			currentSlide = (currentSlide + 1) % slides.length;
			showSlide(currentSlide);
		}, 5000);

		// Filtering members by RT and Type
		const filterRT = document.getElementById('filterRT');
		const filterType = document.getElementById('filterType');
		const membersGrid = document.getElementById('membersGrid');
		const members = Array.from(membersGrid.children);

		function filterMembers() {
			const selectedRT = filterRT.value;
			const selectedType = filterType.value;

			members.forEach(member => {
				const memberRT = member.getAttribute('data-rt');
				const memberType = member.getAttribute('data-type');

				const rtMatch = selectedRT === 'all' || memberRT === selectedRT;
				const typeMatch = selectedType === 'all' || memberType === selectedType;

				if (rtMatch && typeMatch) {
					member.style.display = '';
				} else {
					member.style.display = 'none';
				}
			});
		}

		filterRT.addEventListener('change', filterMembers);
		filterType.addEventListener('change', filterMembers);
	</script>
</body>

</html>