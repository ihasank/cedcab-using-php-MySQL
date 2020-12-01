<?php
include_once 'db.php';
$sql = "UPDATE tbl_ride set status='2' WHERE ride_id='" . $_GET["ride_id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/9nov/cab/admin/alldata.php");

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>