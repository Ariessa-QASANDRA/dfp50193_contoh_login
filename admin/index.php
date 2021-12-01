<?php
require '../conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pekerja</title>
</head>

<body>

<a href="daftar.php">Tambah</a>
<p><a href="../logout.php">Logout</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>ID Pengguna</th>
            <th>Nama </th>
            <th>Tindakan</th>
        </tr>
    
        <?php
        $sql = "SELECT * FROM staff ";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $row->idpengguna; ?></td>
                    <td><?php echo $row->staff_name; ?></td>
                   
                    <td>
                        <a href="kemaskini.php?idstaff=<?php echo $row->idstaff; ?>">Edit</a>
                        |
                        <a href="reset.php?idstaff=<?php echo $row->idstaff; ?>"onclick="return confirm('Betul ke nak reset?');">Reset</a>
                        |
                        <a href="padam.php?idstaff=<?php echo $row->idstaff; ?>" onclick="return confirm('Betul ke nak padam?');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>