<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php', '_self')</script>";
} else {
?>

<?php
if (isset($_GET['delete_bundle'])) {
    $delete_id = $_GET['delete_bundle'];

    // Menghapus produk dari tabel products
    $delete_pro = "DELETE FROM products WHERE product_id='$delete_id'";
    $run_delete = mysqli_query($con, $delete_pro);

    // Menghapus relasi dari tabel bundle_product_relation
    $delete_rel = "DELETE FROM bundle_product_relation WHERE bundle_id='$delete_id'";
    $run_rel = mysqli_query($con, $delete_rel);

    if ($run_rel) {
        echo "<script>alert('One Bundle Has been deleted')</script>";
        echo "<script>window.open('index.php?view_bundles', '_self')</script>";
    }
}
?>

<?php } ?>