<?php include "header.php"; ?>
<!-- Header -->

<?php 




?>

<!-- Body -->
<div class="container mt-5">
    <h1 class="text-center">SELAMAT DATANG di Mentoring PHP CRUD Application!</h1>
    <p class="text-center">Ayo kita Membuat CRUD (Create, Read, Update, Delete) Application.</p>
    <div class="container">
        <form action="view/home.php" method="post">
            <div class="form-group">
              <div class="mb-3">
                <label for="username" class="form-label text-center">Login</label>
                <input type="text" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-center">Password</label>
                <input type="password" class="form-control" id="InputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
                <input type="submit" class="btn btn-primary mt-2" value="Let's Do it!">
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>