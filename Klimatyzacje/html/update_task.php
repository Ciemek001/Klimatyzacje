<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['data_realizacji'] as $id => $data_realizacji) {
        $koszt = $_POST['koszt'][$id];
        $sql = "UPDATE zamówienia SET Data_Realizacji='$data_realizacji', Koszt='$koszt' WHERE ID_Zlecenia='$id'";

        if ($conn->query($sql) !== TRUE) {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    }
    header('Location: A_task.php');
    exit();
}
?>
