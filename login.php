<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DoLineSyariah.</title>
  <link href="img/logo.ico" rel="shortcut icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    .container {
      height: 260px;
      width: 300px;
      margin-top: 10px;
    }
  </style>
</head>

<body>


  <h1 style="text-align:center; margin-top:40px;">Login</h1>
  <div class="container bg-success rounded">
    <form method="POST">
      <div class="form-group">
        <label class="pt-3" for="username"><strong> Username</strong></label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

      </div>
      <div class="form-group">
        <label class="pt-2" for="password"><strong>Password</strong></label>
        <input type="password" class="form-control" id="password" name="password">
      </div>

      <button name="login" type="submit" class="btn btn-primary">login</button> <br>
      <a class="pb-3 pt-2" href="register.php">belum punya akun?</a>
    </form>
  </div>
  <?php
  session_start();

  include "koneksi.php";

  if (isset($_POST['login'])) {
    $nama = $_POST['username'];
    $password = $_POST['password'];


    $qry = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$nama' AND password='$password'");

    if ($qry) {
      $result = mysqli_num_rows($qry);

      if ($result == 1) {
        $data = mysqli_fetch_assoc($qry);

        $_SESSION['user'] = $data;
        echo "<script>alert('Berhasil Login!'); window.location = 'index.php'</script>";
      } else {
        echo "<script>alert('Gagal Login!'); window.location = 'login.php'</script>";
      }
    } else {
      echo "Error in query: " . mysqli_error($koneksi);
    }
  }
  ?>


</body>

</html>