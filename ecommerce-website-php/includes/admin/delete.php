<!-- Header -->
<?php include "../header.php"; ?>
<?php include "../db.php"; ?>
<?php include "admin.php"; ?>

<?php
if (isset($_GET['delete'])) {
    $userid = $_GET['delete'];
    // SQL query to delete data from user table where id = $userid
    $query = "DELETE FROM customers WHERE ID = {$userid}";
    $delete_query = mysqli_query($con, $query);
    header("Location: admin.php");
}
?>
