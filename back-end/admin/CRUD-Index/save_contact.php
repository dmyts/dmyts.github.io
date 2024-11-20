<?php
include "./config.php";

if(isset($_POST["save"])) {
  $nama = mysqli_escape_string($conn, $_POST["nama"]);
  $email = mysqli_escape_string($conn, $_POST["email"]);
  $subj = mysqli_escape_string($conn, $_POST["subj"]);
  $pesan = mysqli_escape_string($conn, $_POST["pesan"]);

  $sql = "INSERT INTO contact (nama, email, subj, pesan) VALUES ('$nama', '$email', '$subj', '$pesan')";
  $result = mysqli_query($conn, $sql);

  if(!$result) {
    echo "Failed to save!";
  } else {
    echo "Data saved!";
    echo '<script>alert("Kontak Terkirim!");</script>';
  }
}
?>