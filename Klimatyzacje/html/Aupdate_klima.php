<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nazwa = $_POST['nazwa'];
    $firma = $_POST['firma'];
    $rodzaj = $_POST['rodzaj'];
    $nr_seryjny = $_POST['nr_seryjny'];
    $moc = $_POST['moc'];
    $cena = $_POST['cena'];

    $sql = "UPDATE klimatyzatory SET Nazwa='$nazwa', Firma='$firma', Rodzaj='$rodzaj', Nr_seryjny='$nr_seryjny', Moc='$moc', Cena='$cena' WHERE ID_klimatyzatora=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: A_admin.php');
        exit();
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }
}
?>
