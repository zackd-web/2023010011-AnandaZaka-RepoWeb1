<!-- Header -->
<?php include "admin_header.php"; ?>
<?php include "../db.php"; ?>



<div class="container">
    <h1 class="text-center">Customers Data</h1>
    <a href="export-excel.php" class='btn btn-outline-dark mb-2'>
        <i class="bi bi-person-plus"></i> Export to Excel
    </a>
    
    <a href="export-pdf.php" class='btn btn-outline-dark mb-2'>
        <i class="bi bi-person-plus"></i> Export to PDF
    </a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM customers"; // SQL query to fetch all table data
            $view_users = mysqli_query($con, $query); // sending the query to the database
            
            // displaying all the data retrieved from the database using while loop
            while ($row = mysqli_fetch_assoc($view_users)) {
                $id = $row['customer_id'];
                $user = $row['customer_name'];
                $email = $row['customer_email'];
                $pass = $row['customer_pass'];
                $country = $row['customer_country'];
                $city = $row['customer_city'];
                echo "<tr>";
                echo " <th scope='row'>{$id}</th>";
                echo " <td>{$user}</td>";
                echo " <td>{$email}</td>";
                echo " <td>{$pass}</td>";
                echo " <td>{$country}</td>";
                echo " <td>{$city}</td>";
            }
            ?>
        </tbody>
    </table>
</div>

<div class="container">
    <h1 class="text-center">Product Data</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM products"; // SQL query to fetch all table data
            $view_users = mysqli_query($con, $query); // sending the query to the database
            
            // displaying all the data retrieved from the database using while loop
            while ($row = mysqli_fetch_assoc($view_users)) {
                $id = $row['product_id'];
                $name = $row['product_title'];
                $price = $row['product_price'];
                echo "<tr>";
                echo " <th scope='row'>{$id}</th>";
                echo " <td>{$name}</td>";
                echo " <td>{$price}</td>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- A BACK button to go to the index page -->
<div class="container text-center mt-5">
    <a href="../index.php" class="btn btn-warning mt-5">Back</a>
</div>
