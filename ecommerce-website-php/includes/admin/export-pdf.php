<?php
require('./fpdf/fpdf.php');
include "../db.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, 'Customers Data', 1, 1, 'C');
$pdf->Ln(5);

// Header Table Customers
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 10, 'ID', 1);
$pdf->Cell(50, 10, 'Username', 1);
$pdf->Cell(50, 10, 'Email', 1);
$pdf->Cell(40, 10, 'Country', 1);
$pdf->Cell(30, 10, 'City', 1);
$pdf->Ln();

// Fetch Data Customers
$pdf->SetFont('Arial', '', 12);
$query = "SELECT * FROM customers";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(20, 10, $row['customer_id'], 1);
    $pdf->Cell(50, 10, $row['customer_name'], 1);
    $pdf->Cell(50, 10, $row['customer_email'], 1);
    $pdf->Cell(40, 10, $row['customer_country'], 1);
    $pdf->Cell(30, 10, $row['customer_city'], 1);
    $pdf->Ln();
}

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, 'Product Data', 1, 1, 'C');
$pdf->Ln(5);

// Header Table Products
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Product ID', 1);
$pdf->Cell(100, 10, 'Product Name', 1);
$pdf->Cell(60, 10, 'Price', 1);
$pdf->Ln();

// Fetch Data Products
$pdf->SetFont('Arial', '', 12);
$query = "SELECT * FROM products";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(30, 10, $row['product_id'], 1);
    $pdf->Cell(100, 10, $row['product_title'], 1);
    $pdf->Cell(60, 10, $row['product_price'], 1);
    $pdf->Ln();
}

$pdf->Output();
?>
