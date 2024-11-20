<?php
$host = "localhost";
$user= "root";
$passw = "";
$db = "basecodes";

$conn = mysqli_connect($host, $user, $passw, $db);
if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT h2, h3, descript FROM materi_css";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT list1, list2, list3, list4, list5, list6, code FROM materi_css_tambahan";
$result2 = mysqli_query($conn, $sql2);

$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result);
$row3 = mysqli_fetch_assoc($result);
$row4 = mysqli_fetch_assoc($result);
$row5 = mysqli_fetch_assoc($result);

$rows = mysqli_fetch_assoc($result2);
$rows2 = mysqli_fetch_assoc($result2);
$rows3 = mysqli_fetch_assoc($result2);
$rows4 = mysqli_fetch_assoc($result2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman Pembelajaran CSS Dasar">
    <meta name="keywords" content="HTML, CSS, TailwindCSS">
    <meta name="author" content="Nama Anda">
    <title>Pembelajaran CSS Dasar</title>
    <!-- TailwindCSS CDN Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 leading-relaxed">

<!-- Navbar -->
<nav class="main-nav bg-black">
    <div class="container xl:max-w-6xl mx-auto px-4">
        <div class="lg:flex lg:justify-between">
            <div class="flex justify-between">
                <div class="mx-w-10 text-4xl font-bold capitalize text-white flex items-center">
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
                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-row">
                <!-- nav menu -->
                <ul class="navbar bg-black lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row text-sm items-center font-bold">
                    <li class="relative text-white">
                        <a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="./index.php#hero">Home</a>
                    </li>
                    <li class="relative text-white">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="./index.php/#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="container mx-auto py-10 px-6">
    <!-- Section: Pendahuluan -->
    <section class="mb-12">
        <h1 class="text-4xl font-bold text-center mb-6"><?php echo $row["h2"]; ?></h1>
        <p class="text-lg"><?php echo $row["descript"]; ?></p>
    </section>

    <!-- Section: Selektor -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row2["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row2["descript"]; ?></p>
        <ul class="list-disc list-inside ml-4">
            <li><?php echo $rows["list1"]; ?></li>
            <li><?php echo $rows["list2"]; ?></li>
            <li><?php echo $rows["list3"]; ?></li>
            <li><?php echo $rows["list4"]; ?></li>
        </ul>
    </section>

    <!-- Section: Properti -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row3["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row3["descript"]; ?></p>
        <ul class="list-disc list-inside ml-4">
            <li><?php echo $rows2["list1"]; ?></li>
            <li><?php echo $rows2["list2"]; ?></li>
            <li><?php echo $rows2["list3"]; ?></li>
            <li><?php echo $rows2["list4"]; ?> </li>
            <li><?php echo $rows2["list5"]; ?></li>
            <li><?php echo $rows2["list6"]; ?></li>
        </ul>
    </section>

    <!-- Section: Layout -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row4["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row4["descript"]; ?></p>
        <ul class="list-disc list-inside ml-4">
            <li><?php echo $rows3["list1"]; ?></li>
            <li><?php echo $rows3["list2"]; ?></li>
            <li><?php echo $rows3["list3"]; ?></li>
            <li><?php echo $rows3["list4"]; ?></li>
        </ul>
    </section>

    <!-- Section: Contoh Penggunaan CSS -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row5["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row5["descript"]; ?></p>
        <div class="p-4 bg-white rounded-md shadow-md">
            <h3 class="text-2xl font-semibold mb-4"><?php echo $row5["h3"]; ?></h3>
            <pre class="bg-gray-200 p-4 rounded-md"><code class="language-css">
                <?php echo $rows4["code"]; ?> 
            </pre>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-black py-8 text-white text-center">
    <p>© 2024 All Right Reserved</p>
    <p>Author: Dana Raga</p>
</footer>

</body>
</html>
