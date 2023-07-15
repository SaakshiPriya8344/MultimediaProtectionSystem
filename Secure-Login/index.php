<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>HOME</title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
		<style>
			/* Login Header */
			* {
				margin-top: 5px;
				padding: 0;
			}

			.Navbar {
				/* border: 1px dashed black; */
				display: flex;
				align-items: end;
				flex-direction: row-reverse;
			}

			.Navbar i {
				font-size: 29px;
				display: flex;
				width: 30px;
				margin-left: 30px;
			}

			.Navbar h1 {
				font-size: 20px;
				display: contents;

			}

			.Navbar a {
				color: black;
				font-size: 16px;
				text-decoration: None;
				margin-left: 30px;
				padding: 5px;
				/* border: 1px solid black; */
			}

			.Navbar a:hover {
				/* border: 1px solid red; */
				cursor: pointer;
				border-radius: 5px;
			}

			.Navbar span {
				font-size: 30px;
				/* border:1px solid black; */
				text-align: left;
				padding-right: 50vw;
			}
		</style>
	</head>

	<body>
	<header class="text-gray-600 body-font">
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Multimedia Content Protection System —————————————————————————————————————————</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <i class="py5 bi bi-person-fill"></i>
      <h1 class="mr-5 hover:text-gray-900"> <?= $_SESSION['user_full_name'] ?></h1>
    </nav>
    <a class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" href="logout.php">Logout
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
		</a>
  </div>
</header>

		<div class=Body>
			<section class="text-gray-600 body-font">
				<div class="container px-5 py-12 mx-auto">
					<div class="flex flex-col">
						<div class="h-1 bg-gray-200 rounded overflow-hidden">
							<div class="w-24 h-full bg-indigo-500"></div>
						</div>
						<div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
							<h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Upload Vault
							</h1>
							<p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0"> The Ultimate Destination for All
								Your File
								Storage Needs!</p>
						</div>
					</div>
					<div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
						<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
							<div class="rounded-lg h-64 overflow-hidden">
								<img alt="content" class="object-cover object-center h-full w-full"
									src="https://dummyimage.com/800x600&text=Upload Image!">
							</div>
							<h2 class="text-xl font-medium title-font text-gray-900 mt-5">Upload Image</h2>
							<p class="text-base leading-relaxed mt-2">To upload an image, click on the "Click here to Upload
								Image" button and select the file from your computer.</p>
							<a class="text-indigo-500 inline-flex items-center mt-3"
								href="http://localhost/LMS/verification.php" target="_blank">Click here to
								Upload Images <svg fill="none" stroke="currentColor" stroke-linecap="round"
									stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
									<path d="M5 12h14M12 5l7 7-7 7"></path>
								</svg>
							</a>
						</div>
						<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
							<div class="rounded-lg h-64 overflow-hidden">
								<img alt="content" class="object-cover object-center h-full w-full"
									src="https://dummyimage.com/800x600&text=Upload Videos!">
							</div>
							<h2 class="text-xl font-medium title-font text-gray-900 mt-5">Upload Videos</h2>
							<p class="text-base leading-relaxed mt-2">To upload an Video, click on the "Click here to Upload
								Video" button and select the file from your computer.</p>
							<a class="text-indigo-500 inline-flex items-center mt-3" href="http://localhost/video_store/Verification.php"
								target="_blank">Click here to Upload Videos
								<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
									stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
									<path d="M5 12h14M12 5l7 7-7 7"></path>
								</svg>
							</a>
						</div>
						<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
							<div class="rounded-lg h-64 overflow-hidden">
								<img alt="content" class="object-cover object-center h-full w-full"
									src="https://dummyimage.com/800x600&text=Upload Audios!">
							</div>
							<h2 class="text-xl font-medium title-font text-gray-900 mt-5">Upload Audio</h2>
							<p class="text-base leading-relaxed mt-2">To upload an Audio, click on the "Click here to Upload
								Audio" button and select the file from your computer.</p>
							<a class="text-indigo-500 inline-flex items-center mt-3" href="http://localhost/Audio/Verification.php"
								target="_blank">Click here to Upload Audio
								<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
									stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
									<path d="M5 12h14M12 5l7 7-7 7"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</section>

	</body>
	<!-- Footer -->
	<footer class="text-gray-600 body-font">
		<div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
			<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
					viewBox="0 0 24 24">
					<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
				</svg>
				<span class="ml-3 text-xl">Multimedia Content Protection System</span>
			</a>
			<p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020
				Multimedia Content Protection System —
				<a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer"
					target="_blank">@Saakshi Priya</a>
			</p>
			<span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
				<a class="text-gray-500">
					<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
						viewBox="0 0 24 24">
						<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
					</svg>
				</a>
				<a class="ml-3 text-gray-500">
					<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
						viewBox="0 0 24 24">
						<path
							d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
						</path>
					</svg>
				</a>
				<a class="ml-3 text-gray-500">
					<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						class="w-5 h-5" viewBox="0 0 24 24">
						<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
						<path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
					</svg>
				</a>
				<a class="ml-3 text-gray-500">
					<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
						stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
						<path stroke="none"
							d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
						</path>
						<circle cx="4" cy="4" r="2" stroke="none"></circle>
					</svg>
				</a>
			</span>
		</div>
	</footer>

	</html>
	<?php
} else {
	header("Location: login.php");
}
?>