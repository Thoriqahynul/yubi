<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DoLineSyariah.</title>
  <link href="img/logo.ico" rel="shortcut icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

  <H2>Register</H2>

  <form method="POST">

    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>


    <button name="register" type="submit" class="btn btn-primary">Register</button>
    <P>Sudah memiliki akun? <a href="login.php">Login!</a></P>

  </form>


  <?php
  include 'koneksi.php';

  if (isset($_POST['register'])) {
    $nama = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $tambah = mysqli_query($koneksi, "INSERT INTO akun VALUES('', '$nama', '$email','$password')");
    if ($tambah) {
      echo "<script>alert('Register Berhasil'); window.location = 'login.php';</script>";
    } else {
      echo "<script>alert('Gagal menambahkan data');</script>";
    }
  }
  ?>

</body>

</html>