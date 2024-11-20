<?php 
  $host = "localhost";
  $user= "root";
  $passw = "";
  $db = "basecodes";
  
  $conn = mysqli_connect($host, $user, $passw, $db);
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT id, h2, descript FROM materi_html"; 
  $result = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Read Materi HTML</title>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto my-8">
    <h2 class="text-2xl font-bold text-center py-8">Materi HTML</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow-md rounded-lg">
        <thead>
          <tr class="bg-gray-800 text-white">
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">ID</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm">H2</th>
            <th class="w-6/12 py-3 px-4 uppercase font-semibold text-sm">Description</th>
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Edit</th>
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-center">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if (mysqli_num_rows($result) > 0) { 
            while ($row = mysqli_fetch_assoc($result)) { 
          ?>
            <tr class="bg-white hover:bg-gray-100 border-b border-gray-200">
              <td class="py-3 px-4 text-center"><?php echo $row["id"]; ?></td>
              <td class="py-3 px-4"><?php echo $row["h2"]; ?></td>
              <td class="py-3 px-4"><?php echo $row["descript"]; ?></td>
              <td class="py-3 px-4 text-center">
                <a href="update.php?id=<?php echo $row["id"]; ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300">Edit</a>
              </td>
              <td class="py-3 px-4 text-center">
                <a href="delete.php?id=<?php echo $row["id"]; ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-300" onclick="return confirm('Are you sure?')">Delete</a>
              </td>
            </tr>
          <?php 
            } 
          } else {
          ?>
            <tr>
              <td colspan="5" class="py-3 px-4 text-center">No data found</td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
