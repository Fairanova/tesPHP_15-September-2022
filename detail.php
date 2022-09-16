<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>
</head>

<h1>Data Siswa <?php echo $_GET['nama'] ?></h1>

<a href="index2.php">Back</a> <br> <br>

<body>
    <table border="1" cellpadding="20">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
        </tr>
        <?php $i = 1; ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><img src="<?php echo $_GET['img'] ?>" alt="" width="200"></td>
            <td><?php echo $_GET['nama'] ?></td>
            <td><?php echo $_GET['alamat'] ?></td>
            <td><?php echo $_GET['telp'] ?></td>
        </tr>
    </table>

</body>

</html>