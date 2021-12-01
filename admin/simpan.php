<?php
require '../conn.php';

$idpengguna = $_POST['idpengguna'];
$staff_name = $_POST['staff_name'];


$sql = "INSERT INTO staff (idpengguna, staff_name) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss',$idpengguna, $staff_name);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama  tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
   header('location: index.php');
}
