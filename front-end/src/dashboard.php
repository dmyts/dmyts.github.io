<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/tailwind.css">
  <link rel="stylesheet" href="./style.css">
  <title>Dashboard</title>
</head>
<body class="bg-[#1F1F29]">

  <!-- Navbar -->
  <nav class="flex justify-between items-center p-6 bg-[#000022] font-bold text-white sticky top-0">
    <div class="navbar-brand flex items-center">
      <a href>
        <img src="../asset/icons/brand-logo-white.svg" alt="navbrand" class="w-52">
      </a>
      <span class="text-2xl ml-96 hidden md:block">Welcome User!</span>
    </div>
  
    <ul class="flex justify-between gap-14">
      <li class="hover:text-slate-200"><a href="./index.php">Home</a></li>
      <li class="hover:text-slate-200"><a href="./dashboard.php">Dashboard</a></li>
      <li class="hover:text-slate-200"><a href="./index.html#contact-me">Contact</a></li>
    </ul>
  </nav>
  

  <!-- Main Section -->
  <main class="container">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
  
      <div class="learning-card mt-4 md:mt-8 flex-1">
        <a href="./materi-html.php" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-full">
          <div class="flex flex-col items-center">
            <img class="object-cover w-full h-48 md:h-auto md:w-48 ml-4 mt-8" src="../asset/img/html5.1.jpeg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                HTML Dasar
              </h5>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                HTML (Hypertext Markup Language) adalah bahasa pemrograman yang digunakan untuk membuat dan merancang halaman web. Ini adalah fondasi dari hampir setiap situs web yang Anda kunjungi.
              </p>
            </div>
          </div>
        </a>
      </div>
  
      <div class="learning-card mt-4 md:mt-8 flex-1">
        <a href="./materi-css.php" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-full">
          <div class="flex flex-col items-center">
            <img class="object-cover w-full h-48 md:h-auto md:w-48 ml-4 mt-8" src="../asset/img/css3.1.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                CSS Dasar
              </h5>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                CSS (Cascading Style Sheets) adalah bahasa pemrograman yang digunakan untuk mengatur tampilan dan gaya visual dari elemen-elemen HTML di halaman web. 
              </p>
            </div>
          </div>
        </a>
      </div>
  
      <div class="learning-card mt-4 md:mt-8 flex-1 hidden md:block">
        <a href="./materi-php.php" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-full">
          <div class="flex flex-col items-center">
            <img class="object-cover w-full h-48 md:h-auto md:w-48 ml-4 mt-2" src="../asset/img/PHP Logo.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                PHP Dasar
              </h5>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                PHP (Hypertext Preprocessor) adalah bahasa pemrograman sisi server yang digunakan terutama untuk pengembangan web. PHP dapat disematkan ke dalam HTML.
              </p>
            </div>
          </div>
        </a>
      </div>
  
      <div class="learning-card mt-4 md:mt-8 flex-1 hidden md:block">
        <a href="./materi-mysql.php" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-full">
          <div class="flex flex-col items-center">
            <img class="object-cover w-full h-48 md:h-auto md:w-48 ml-4 mt-8" src="../asset/img/MySQL.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                MySQL Dasar
              </h5>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                MySQL adalah sebuah sistem manajemen basis data relasional (RDBMS) yang sangat populer. Ini adalah salah satu RDBMS open source yang paling banyak digunakan di dunia, sering digunakan sebagai bagian dari solusi teknologi informasi untuk aplikasi web.
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </main>

</body>
</html>