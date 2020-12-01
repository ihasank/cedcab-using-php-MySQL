<?php
include_once 'db.php';
$sql = "UPDATE tbl_user set isblock='0' WHERE user_id='" . $_GET["user_id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/9nov/cab/admin/usersdata.php");

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>