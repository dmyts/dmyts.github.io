<?php
include "../config.php";

if (isset($_POST["save"])) {
    $h2 = mysqli_real_escape_string($conn, $_POST["h2"]);
    $list = mysqli_real_escape_string($conn, $_POST["list"]);
    $descript = mysqli_real_escape_string($conn, $_POST["descript"]);

    $sql = "INSERT INTO materi_mysql (h2, list, descript) VALUES ('$h2','$list , '$descript')";
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