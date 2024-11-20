<?php
include "../config.php";

if (isset($_POST["save"])) {
    $h2 = mysqli_real_escape_string($conn, $_POST["h2"]);
    $h3 = mysqli_real_escape_string($conn, $_POST["h3"]);
    $descript = mysqli_real_escape_string($conn, $_POST["descript"]);

    $sql = "INSERT INTO materi_css (h2, h3, descript) VALUES ('$h2', '$h3', '$descript')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Failed to save! Error: " . mysqli_error($conn);
    } else {
        echo '<script language="javascript">';
        echo 'alert("Data saved!")';
        echo '</script>';
    }
}
?>