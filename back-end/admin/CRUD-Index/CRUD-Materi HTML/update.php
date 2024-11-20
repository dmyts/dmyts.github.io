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
    if (isset($_POST["id"], $_POST["h2"], $_POST["descript"])) {
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $h2 = mysqli_real_escape_string($conn, $_POST["h2"]);
        $descript = mysqli_real_escape_string($conn, $_POST["descript"]);

        $sql = "UPDATE materi_html SET h2='$h2', descript='$descript' WHERE id='$id'";
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
    $sql = "SELECT * FROM materi_html WHERE id='$id'";
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
                <label for="h2" class="block font-medium mb-1">Heading</label>
                <input type="text" name="h2" id="h2" value="<?php echo htmlspecialchars($row['h2']); ?>" class="w-full px-4 py-2 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="descript" class="block font-medium mb-1">Description</label>
                <textarea name="descript" id="descript" rows="4" class="w-full px-4 py-2 border rounded-md"><?php echo htmlspecialchars($row['descript']); ?></textarea>
            </div>
            <button type="submit" name="update" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Update Data</button>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>
