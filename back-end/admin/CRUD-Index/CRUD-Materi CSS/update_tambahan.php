<?php
$host = "localhost";
$user= "root";
$passw = "";
$db = "basecodes";

$conn = mysqli_connect($host, $user, $passw, $db);
if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$updateMessage = "";

// Penanganan pembaruan data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    if (isset($_POST["id"], $_POST["list1"], $_POST["list2"],
    $_POST["list3"], $_POST["list4"], $_POST["list5"], $_POST["list6"],
    $_POST["code"])) {
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $list1 = mysqli_real_escape_string($conn, $_POST["list1"]);
        $list2 = mysqli_real_escape_string($conn, $_POST["list2"]);
        $list3 = mysqli_real_escape_string($conn, $_POST["list3"]);
        $list4 = mysqli_real_escape_string($conn, $_POST["list4"]);
        $list5 = mysqli_real_escape_string($conn, $_POST["list5"]);
        $list6 = mysqli_real_escape_string($conn, $_POST["list6"]);
        $code = mysqli_real_escape_string($conn, $_POST["code"]);

        $sql = "UPDATE materi_html SET list1='$list1', list2='$list2', list3='$list3' 
          list4='$list4', list5='$list5', list6='$list6', code='$code' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            $updateMessage = "Data updated successfully.";
        } else {
            $updateMessage = "Failed to update data: " . mysqli_error($conn);
        }
    } else {
        $updateMessage = "Required fields are missing.";
    }
}

// Periksa apakah parameter id ada dalam URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM materi_css_tambahan WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $updateMessage = "Data not found.";
    }
} else {
    $updateMessage = "ID parameter not found in URL.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Update Data</h1>
        <?php if ($updateMessage): ?>
            <div class="mb-4 text-center text-blue-500">
                <?php echo $updateMessage; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($row)): ?>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-4">
                <label for="list1" class="block font-medium mb-1">List 1</label>
                <input type="text" name="list1" id="list1" value="<?php echo htmlspecialchars($row['list1']); ?>" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="list2" class="block font-medium mb-1">List 2</label>
                <input type="text" name="list2" id="List2" value="<?php echo htmlspecialchars($row['list2']); ?>" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="list3" class="block font-medium mb-1">List 3</label>
                <input type="text" name="list3" id="List3" value="<?php echo htmlspecialchars($row['list3']); ?>" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="list4" class="block font-medium mb-1">List 4</label>
                <input type="text" name="list4" id="List4" value="<?php echo htmlspecialchars($row['list4']); ?>" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="list5" class="block font-medium mb-1">List 5</label>
                <input type="text" name="list5" id="List5" value="<?php echo htmlspecialchars($row['list5']); ?>" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="list6" class="block font-medium mb-1">List 6</label>
                <input type="text" name="list6" id="List6" value="<?php echo htmlspecialchars($row['list6']); ?>" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="code" class="block font-medium mb-1">Code</label>
                <textarea name="code" id="Code" rows="4" class="w-full px-4 py-2 border rounded-md"><?php echo htmlspecialchars($row['code']); ?></textarea>
            </div>
            <button type="submit" name="update" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Update Data</button>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>
