<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="../../public/tailwind.css">
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Update Data</h1>
        <?php
        include "./config.php";

        // Periksa apakah parameter id ada dalam URL
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM index_web WHERE id='$id'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-4">
                <label for="h1" class="block font-medium mb-1">Heading 1</label>
                <input type="text" name="h1" id="h1" value="<?php echo $row['h1']; ?>" class="w-full px-4 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="descript" class="block font-medium mb-1">Description</label>
                <textarea name="descript" id="descript" rows="4" class="w-full px-4 py-2 border rounded-md"><?php echo $row['descript']; ?></textarea>
            </div>
            <button type="submit" name="update" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Update Data</button>
        </form>
        <?php
            } else {
                echo "Data not found.";
            }

            // Penanganan pembaruan data
            if(isset($_POST["update"])) {
                $id = $_POST["id"];
                $h1 = mysqli_real_escape_string($conn, $_POST["h1"]);
                $descript = mysqli_real_escape_string($conn, $_POST["descript"]);
            
                $sql = "UPDATE index_web SET h1='$h1', descript='$descript' WHERE id='$id'";
                $result = mysqli_query($conn, $sql);
            
                if($result) {
                    echo "Data updated successfully.";
                } else {
                    echo "Failed to update data.";
                }
            }
        } else {
            echo "ID parameter not found in URL.";
        }
        ?>
    </div>
</body>
</html>
