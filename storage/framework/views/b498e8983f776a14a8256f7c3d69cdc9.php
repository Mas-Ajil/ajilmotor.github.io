<!DOCTYPE html>
<html>
<head>
    <title>Data Diri</title>
</head>
<body>
    <h1 align="center">Data Diri</h1>
    <table border="1" align="center">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Angkatan</th>
        </tr>
        <?php
        
        $nama = "'Azizil'an Sarina Putra";
        $nim = "L200210068";
        $alamat = "Surakarta";
        $angkatan = "2021";

        echo "<tr>";
        echo "<td>$nama</td>";
        echo "<td>$nim</td>";
        echo "<td>$alamat</td>";
        echo "<td>$angkatan</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/datadiri.blade.php ENDPATH**/ ?>