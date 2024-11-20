<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Materi PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create Materi PHP</h2>
            <form action="./savedata.php" method="POST">
                <div class="mb-4">
                    <label for="heading" class="block text-gray-700 font-bold mb-2">Heading</label>
                    <input type="text" name="h2" id="Heading" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter heading 1">
                </div>

                <div class="mb-4">
                    <label for="heading2" class="block text-gray-700 font-bold mb-2">Heading 2</label>
                    <input type="text" name="h3" id="heading2" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter heading 2">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <textarea name="descript" id="description" rows="5" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter description"></textarea>
                </div>

                <div class="mb-4">
                    <label for="code" class="block text-gray-700 font-bold mb-2">Code</label>
                    <textarea name="code" id="code" rows="5" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter code"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 
                    focus:outline-none focus:bg-blue-600 resize-none" name="save">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
