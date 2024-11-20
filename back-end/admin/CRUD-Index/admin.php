<!-- admin.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../../public/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Admin Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Hero Section</h2>
                <ul class="list-disc list-inside">
                    <li><a href="create_hero.php" class="text-blue-500 hover:underline">Create Hero Section</a></li>
                    <li><a href="read_hero.php" class="text-blue-500 hover:underline">Read Hero Section</a></li>
                    <li><a href="update_hero.php" class="text-blue-500 hover:underline">Update Hero Section</a></li>
                    <li><a href="delete_hero.php" class="text-blue-500 hover:underline">Delete Hero Section</a></li>
                </ul>
            </div>

            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Contact Section</h2>
                <ul class="list-disc list-inside">
                    <li><a href="read_contact.php" class="text-blue-500 hover:underline">Read Contact Section</a></li>
                    <li><a href="delete_contact.php" class="text-blue-500 hover:underline">Delete Contact Section</a></li>
                </ul>
            </div>

            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Materi HTML</h2>
                <ul class="list-disc list-inside">
                    <li><a href="./CRUD-Materi HTML/create.php" class="text-blue-500 hover:underline">Create Materi HTML</a></li>
                    <li><a href="./CRUD-Materi HTML/read.php" class="text-blue-500 hover:underline">Read Materi HTML</a></li>
                    <li><a href="./CRUD-Materi HTML/update.php" class="text-blue-500 hover:underline">Update Materi HTML</a></li>
                    <li><a href="./CRUD-Materi HTML/delete.php" class="text-blue-500 hover:underline">Delete Materi HTML</a></li>
                </ul>
            </div>

            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Materi CSS</h2>
                <ul class="list-disc list-inside">
                    <li><a href="./CRUD-Materi CSS/create.php" class="text-blue-500 hover:underline">Create Materi CSS</a></li>
                    <li><a href="./CRUD-Materi CSS/read.php" class="text-blue-500 hover:underline">Read Materi CSS</a></li>
                    <li><a href="./CRUD-Materi CSS/update.php" class="text-blue-500 hover:underline">Update Materi CSS</a></li>
                    <li><a href="./CRUD-Materi CSS/delete.php" class="text-blue-500 hover:underline">Delete Materi CSS</a></li>
                </ul>
            </div>

            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Materi CSS Tambahan</h2>
                <ul class="list-disc list-inside">
                    <li><a href="./CRUD-Materi CSS/create_tambahan.php" class="text-blue-500 hover:underline">Create Materi CSS Tambahan</a></li>
                    <li><a href="./CRUD-Materi CSS/read_tambahan.php" class="text-blue-500 hover:underline">Read Materi CSS Tambahan</a></li>
                    <li><a href="./CRUD-Materi CSS/update_tambahan.php" class="text-blue-500 hover:underline">Update Materi CSS Tambahan</a></li>
                    <li><a href="./CRUD-Materi CSS/delete_tambahan.php" class="text-blue-500 hover:underline">Delete Materi CSS Tambahan</a></li>
                </ul>
            </div>

            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Materi MySQL</h2>
                <ul class="list-disc list-inside">
                    <li><a href="./CRUD-Materi MySQL/create.php" class="text-blue-500 hover:underline">Create Materi MySQL</a></li>
                    <li><a href="./CRUD-Materi MySQL/read.php" class="text-blue-500 hover:underline">Read Materi MySQL</a></li>
                    <li><a href="./CRUD-Materi MySQL/update.php" class="text-blue-500 hover:underline">Update Materi MySQL</a></li>
                    <li><a href="./CRUD-Materi MySQL/delete.php" class="text-blue-500 hover:underline">Delete Materi MySQL</a></li>
                </ul>
            </div>

            <div class="bg-white rounded shadow-md p-6">
                <h2 class="text-xl font-bold mb-4">Manage Materi PHP</h2>
                <ul class="list-disc list-inside">
                    <li><a href="./CRUD-Materi PHP/create.php" class="text-blue-500 hover:underline">Create Materi PHP</a></li>
                    <li><a href="./CRUD-Materi PHP/read.php" class="text-blue-500 hover:underline">Read Materi PHP</a></li>
                    <li><a href="./CRUD-Materi PHP/update.php" class="text-blue-500 hover:underline">Update Materi PHP</a></li>
                    <li><a href="./CRUD-Materi PHP/delete.php" class="text-blue-500 hover:underline">Delete Materi PHP</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
