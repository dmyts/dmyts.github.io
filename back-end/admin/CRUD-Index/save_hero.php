<?php
include "./config.php";

if (isset($_POST["save"])) {
    $h1 = mysqli_real_escape_string($conn, $_POST["h1"]);
    $descript = mysqli_real_escape_string($conn, $_POST["descript"]);

    $sql = "INSERT INTO index_web (h1, descript) VALUES ('$h1', '$descript')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Failed to save! Error: " . mysqli_error($conn);
    } else {
        echo "Data saved!";
    }
}
?>
