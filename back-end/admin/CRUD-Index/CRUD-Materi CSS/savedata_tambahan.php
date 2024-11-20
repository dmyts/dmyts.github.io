<?php
include "../config.php";

if (isset($_POST["save"])) {
    $list1 = mysqli_real_escape_string($conn, $_POST["list1"]);
    $list2 = mysqli_real_escape_string($conn, $_POST["list2"]);
    $list2 = mysqli_real_escape_string($conn, $_POST["list3"]);
    $list2 = mysqli_real_escape_string($conn, $_POST["list4"]);
    $list2 = mysqli_real_escape_string($conn, $_POST["list5"]);
    $list2 = mysqli_real_escape_string($conn, $_POST["list6"]);
    $code = mysqli_real_escape_string($conn, $_POST["code"]);

    $sql = "INSERT INTO materi_css_tambahan (list1, list2, list3, list4, list5, list6, code) 
    VALUES ('$list1', '$list2', '$list3', '$list4', '$list5', '$list6', '$code')";
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