<?php
if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
    $delId = $_GET['id'];
} else {
    // 404
    header('Location: admin.php?p=produkter');
}

$sql = "DELETE FROM produkter WHERE produkt_id =  ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>