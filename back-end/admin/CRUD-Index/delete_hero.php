<?php
include "./config.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  die('Data not found!');
}

$sql = "DELETE FROM index_web where id='$id'";
$result = mysqli_query($conn, $sql);
if (!$result) {
echo '<script language="javascript">';
echo 'alert("Data failed to saved!")';
echo '</script>';
echo '<script language="javascript">';
echo 'window.location.href ="read_hero.php"';
echo '</script>';
} else {
echo '<script language="javascript">';
echo 'alert("Data saved!")';
echo '</script>';
echo '<script language="javascript">';
echo 'window.location.href ="read_hero.php"';
echo '</script>';
}
?>