<?php
include "../db.php";

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_customers_products.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "ID\tUsername\tEmail\tPassword\tCountry\tCity\n";

$query = "SELECT * FROM customers";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo "{$row['customer_id']}\t{$row['customer_name']}\t{$row['customer_email']}\t{$row['customer_pass']}\t{$row['customer_country']}\t{$row['customer_city']}\n";
}

echo "\nProduct ID\tProduct Name\tProduct Price\n";

$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo "{$row['product_id']}\t{$row['product_title']}\t{$row['product_price']}\n";
}
?>
