<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $nr_telefonu = $_POST['nr_telefonu'];
    $lata_pracy = $_POST['lata_pracy'];
    $wynagrodzenie = $_POST['wynagrodzenie'];

    $sql = "INSERT INTO monterzy (imie, nazwisko, nr_telefonu, lata_pracy, wynagrodzenie)
            VALUES ('$imie', '$nazwisko', '$nr_telefonu', $lata_pracy, $wynagrodzenie)";

    if ($conn->query($sql) === TRUE) {
        echo "Nowy monter został dodany pomyślnie";
        header('Location: A_monterzy.php');
        exit();
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
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
  <div class="container mt-5">
    <h2 class="text-center">Dodaj Montera</h2>
    <form action="Add_monter.php" method="post" class="mt-5">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="imie" name="imie" placeholder="Imię" required>
            <label for="imie">Imię</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Nazwisko" required>
            <label for="nazwisko">Nazwisko</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nr_telefonu" name="nr_telefonu" placeholder="Nr telefonu" required>
            <label for="nr_telefonu">Nr telefonu</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="lata_pracy" name="lata_pracy" placeholder="Lata pracy" required>
            <label for="lata_pracy">Lata pracy</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" step="0.01" class="form-control" id="wynagrodzenie" name="wynagrodzenie" placeholder="Wynagrodzenie" required>
            <label for="wynagrodzenie">Wynagrodzenie</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Dodaj</button>
            <a href="A_monterzy.php" class="btn btn-secondary">Powrót</a>
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
