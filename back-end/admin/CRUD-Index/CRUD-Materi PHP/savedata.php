<?php
include "../config.php";

if (isset($_POST["save"])) {
    $h2 = mysqli_real_escape_string($conn, $_POST["h2"]);
    $h3 = mysqli_real_escape_string($conn, $_POST["h3"]);
    $descript = mysqli_real_escape_string($conn, $_POST["descript"]);
    $code = mysqli_real_escape_string($conn, $_POST["code"]);

    $sql = "INSERT INTO materi_php (h2, h3, descript, code) VALUES ('$h2','$h3 , '$descript', '$code')";
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