<?php
include 'config.php';

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM zamówienia WHERE ID_Zlecenia='$delete_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Rekord został pomyślnie usunięty";
    } else {
        echo "Błąd przy usuwaniu rekordu: " . $conn->error;
    }
}

header('Location: A_task.php');
exit();
?>
