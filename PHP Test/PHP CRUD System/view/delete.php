<!-- Header -->
<?php include "../header.php"; ?>
<?php include "../db.php"; ?>

<?php
if (isset($_GET['delete'])) {
    $userid = $_GET['delete'];
    // SQL query to delete data from user table where id = $userid
    $query = "DELETE FROM users WHERE ID = {$userid}";
    $delete_query = mysqli_query($conn, $query);
    header("Location: home.php");
}
?>

<!-- Footer -->
<?php include "../footer.php"; ?>