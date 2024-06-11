<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nazwa = $_POST['name'];
  $firma = $_POST['company'];
  $rodzaj = $_POST['type'];
  $numer_seryjny = $_POST['serial'];
  $moc = $_POST['power'];
  $cena = $_POST['price'];

  $sql = "INSERT INTO klimatyzatory (nazwa, firma, rodzaj, Nr_seryjny, moc, cena) VALUES ('$nazwa', '$firma', '$rodzaj', '$numer_seryjny', '$moc', '$cena')";

  if ($conn->query($sql) === TRUE) {
      header('Location: A_admin.php');
      exit();
  } else {
      echo "Błąd: " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dodaj Klimatyzator</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="col-xxl">
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Dodaj Klimatyzator</h5>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Nazwa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="Chłodzik" required />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-company">Firma</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="basic-default-company" name="company" placeholder="Toshiba" required />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-type">Rodzaj</label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-type" class="form-control" name="type" placeholder="łobabyn" required />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-serial">Numer Seryjny</label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-serial" class="form-control" name="serial" placeholder="658799" required />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-power">Moc</label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-power" class="form-control" name="power" placeholder="500" required />
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-price">Cena</label>
          <div class="col-sm-10">
            <input type="text" id="basic-default-price" class="form-control" name="price" placeholder="6000" required />
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col-sm-10 d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Dodaj</button>
            <a href="A_admin.php" class="btn btn-primary ms-auto">Powrót</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
