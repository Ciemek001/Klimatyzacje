<?php
include 'config.php';

$id = $_GET['id'];

// Pobierz dane klimatyzatora z bazy danych
$sql = "SELECT * FROM klimatyzatory WHERE ID_klimatyzatora = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Nie znaleziono klimatyzatora o podanym ID.";
    exit();
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

    <title>Edytuj Klimatyzator</title>

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
    <h2 class="text-center">Edytuj Klimatyzator</h2>
    <form action="Aupdate_klima.php" method="post" class="mt-5">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nazwa" name="nazwa" placeholder="Nazwa" value="<?php echo $row['Nazwa']; ?>" required>
            <label for="nazwa">Nazwa</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="firma" name="firma" placeholder="Firma" value="<?php echo $row['Firma']; ?>" required>
            <label for="firma">Firma</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="rodzaj" name="rodzaj" placeholder="Rodzaj" value="<?php echo $row['Rodzaj']; ?>" required>
            <label for="rodzaj">Rodzaj</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nr_seryjny" name="nr_seryjny" placeholder="Nr seryjny" value="<?php echo $row['Nr_seryjny']; ?>" required>
            <label for="nr_seryjny">Nr seryjny</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="moc" name="moc" placeholder="Moc" value="<?php echo $row['Moc']; ?>" required>
            <label for="moc">Moc</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cena" name="cena" placeholder="Cena" value="<?php echo $row['Cena']; ?>" required>
            <label for="cena">Cena</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Edytuj</button>
            <a href="A_admin.php" class="btn btn-secondary">Powrót</a>
        </div>
    </form>
</div>
  </div>
</div>

    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
