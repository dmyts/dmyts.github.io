<?php
$host = "localhost";
$user= "root";
$passw = "";
$db = "basecodes";

$conn = mysqli_connect($host, $user, $passw, $db);
if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT h2, descript FROM materi_html";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result);
$row3 = mysqli_fetch_assoc($result);
$row4 = mysqli_fetch_assoc($result);
$row5 = mysqli_fetch_assoc($result);
$row6 = mysqli_fetch_assoc($result);
$row7 = mysqli_fetch_assoc($result);
$row8 = mysqli_fetch_assoc($result);
$row9 = mysqli_fetch_assoc($result);
$row10 = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman Pembelajaran HTML Dasar">
    <meta name="keywords" content="HTML, CSS, PHP, TailwindCSS">
    <meta name="author" content="Nama Anda">
    <title>Pembelajaran HTML Dasar</title>
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
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="./index.php#contact">Contact</a>
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

    <!-- Section: Tag -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row2["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row2["descript"]; ?></p>
    </section>

    <!-- Section: Heading -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row3["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row3["descript"]; ?></p>
    </section>

    <!-- Section: Paragraf -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row4["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row4["descript"]; ?></p>
    </section>

    <!-- Section: List -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row5["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row5["descript"]; ?></p>
    </section>

    <!-- Section: Hyperlink -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row6["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row6["descript"]; ?></p>
    </section>

    <!-- Section: Image -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"<?php echo $row7["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row7["descript"]; ?></p>
    </section>

    <!-- Section: Table -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row8["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row8["descript"]; ?></p>
        <table class="table-auto w-full mt-6">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Header 1</th>
                    <th class="px-4 py-2">Header 2</th>
                    <th class="px-4 py-2">Header 3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white">
                    <td class="border px-4 py-2">Data 1</td>
                    <td class="border px-4 py-2">Data 2</td>
                    <td class="border px-4 py-2">Data 3</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="border px-4 py-2">Data 4</td>
                    <td class="border px-4 py-2">Data 5</td>
                    <td class="border px-4 py-2">Data 6</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Section: Table Merging -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row9["h2"]; ?></h2>
        <p class="text-lg"><?php echo $row9["descript"]; ?></p>
        <table class="table-auto w-full mt-6">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Header 1</th>
                    <th class="px-4 py-2">Header 2</th>
                    <th class="px-4 py-2">Header 3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white">
                    <td class="border px-4 py-2">Data 1</td>
                    <td class="border px-4 py-2" colspan="2">Data 2-3 Merged</td>
                </tr>
                <tr class="bg-gray-100">
                    <td class="border px-4 py-2" rowspan="2">Data 4 Merged</td>
                    <td class="border px-4 py-2">Data 5</td>
                    <td class="border px-4 py-2">Data 6</td>
                </tr>
                <tr class="bg-white">
                    <td class="border px-4 py-2">Data 7</td>
                    <td class="border px-4 py-2">Data 8</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Section: Form -->
    <section id="contact" class="mb-12">
        <h2 class="text-3xl font-bold mb-4"><?php echo $row10["h2"]; ?></h2>
        <form action="#" method="POST" class="bg-white p-6 rounded-md shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-lg font-semibold">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-lg font-semibold">Message</label>
                <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-md" rows="4"></textarea>
            </div>
            <button type="submit" class="px-6 py-2 bg-[#000022] text-white rounded-full">Submit</button>
        </form>
    </section>
</main>

<!-- Footer -->
<footer class="bg-[#000022] py-8 text-white text-center">
    <p>© 2024 All Right Reserved</p>
    <p>Author: Dana Raga</p>
</footer>

</body>
</html>
