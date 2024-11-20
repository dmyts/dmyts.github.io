<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Materi CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create Materi CSS Tambahan</h2>
            <form action="./savedata_tambahan.php" method="POST">
                <div class="mb-4">
                    <label for="list1" class="block text-gray-700 font-bold mb-2">List 1</label>
                    <input type="text" name="list1" id="List1" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter List 1">
                </div>

                <div class="mb-4">
                    <label for="list2" class="block text-gray-700 font-bold mb-2">List 2</label>
                    <input type="text" name="list2" id="List2" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter List 2">
                </div>

                <div class="mb-4">
                    <label for="list3" class="block text-gray-700 font-bold mb-2">List 3</label>
                    <input type="text" name="list3" id="List3" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter List 3">
                </div>

                <div class="mb-4">
                    <label for="list4" class="block text-gray-700 font-bold mb-2">List 4</label>
                    <input type="text" name="list4" id="List4" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter List 4">
                </div>

                <div class="mb-4">
                    <label for="list5" class="block text-gray-700 font-bold mb-2">List 5</label>
                    <input type="text" name="list5" id="List5" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter List 5">
                </div>

                <div class="mb-4">
                    <label for="list6" class="block text-gray-700 font-bold mb-2">List 6</label>
                    <input type="text" name="list6" id="List6" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter List 6">
                </div>

                <div class="mb-4">
                    <label for="code" class="block text-gray-700 font-bold mb-2">Code</label>
                    <textarea name="code" id="Code" rows="5" class="w-full px-3 py-2 border rounded-md 
                    focus:outline-none focus:border-blue-500" placeholder="Enter Code"></textarea>
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
