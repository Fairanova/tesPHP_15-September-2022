<?php
session_start();

if (!isset($_SESSION['loginSiswa'])) {
    header('Location: login.php');
    exit;
}

$data = [
    [
        'nama' => 'Arsyad',
        'img' => 'gambar/Arsyad.png'
    ],
    [
        'nama' => 'Agus',
        'img' => 'gambar/Agus.png'
    ],
    [
        'nama' => 'Lemao',
        'img' => 'gambar/Lemao.png'
    ]
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Page</title>
</head>

<body>
    <h1>Data Siswa</h1>

    <a href="logout.php" onclick="return confirm('Are you sure to logout?')">Logout</a> <br> <br>

    <table border="1" cellpadding="20">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Nama</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><img src="<?php echo $d['img'] ?>" alt="" width="200"></td>
                <td><?php echo $d['nama'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>