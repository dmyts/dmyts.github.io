<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/tailwind.css">
  <title>Read Index</title>
</head>
<body class="bg-gray-100">
  <?php 
  include "./config.php";

  $sql = "SELECT id, nama, email, subj, pesan FROM contact"; 
  $result = mysqli_query($conn, $sql); 
  
  ?>
  <div class="container mx-auto my-8">
    <h2 class="text-2xl font-bold text-center py-8">Read Contact Me</h2>
    <div class="overflow-x-auto">
      <table class="w-full table-auto rounded-lg shadow-md">
        <thead>
          <tr class="bg-gray-800 text-white">
            <th class="py-2 px-4">ID</th>
            <th class="py-2 px-4">Nama</th>
            <th class="py-2 px-4">E-Mail</th>
            <th class="py-2 px-4">Subject</th>
            <th class="py-2 px-4">Pesan</th>
            <th class="py-2 px-4 text-center" colspan="2">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if (mysqli_num_rows($result) > 0) { 
            while ($row = mysqli_fetch_assoc($result)) { 
          
          ?>
            <tr class="bg-white hover:bg-gray-100 border-b border-gray-200">
              <td class="py-2 px-4"><?php echo $row["id"]; ?></td>
              <td class="py-2 px-4"><?php echo $row["nama"]; ?></td>
              <td class="py-2 px-4"><?php echo $row["email"]; ?></td>
              <td class="py-2 px-4"><?php echo $row["subj"]; ?></td>
              <td class="py-2 px-4"><?php echo $row["pesan"]; ?></td>
              <td class="py-2 px-4 text-center">
                <a href="delete_contact.php?id=<?php echo $row["id"]; ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete</a>
              </td>
            </tr>
          <?php 
            } 
          } 
        ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>