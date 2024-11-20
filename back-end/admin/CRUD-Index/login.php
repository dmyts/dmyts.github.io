<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="../../public/tailwind.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-md w-full bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Admin Login</h2>
        <form action="./login_process.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                <input type="text" name="username" id="username" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="passw" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" name="passw" id="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="login">Login</button>
        </form>
    </div>
</body>
</html>
