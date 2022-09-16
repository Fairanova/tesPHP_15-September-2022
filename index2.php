<?php
session_start();

if (!isset($_SESSION['loginAdmin'])) {
    header('Location: login.php');
    exit;
}

$data = [
    [
        'nama' => 'Arsyad',
        'img' => 'gambar/Arsyad.png',
        'alamat' => 'Rungkut',
        'telp' => '085733554077'
    ],
    [
        'nama' => 'Agus',
        'img' => 'gambar/Agus.png',
        'alamat' => 'Blauran',
        'telp' => '085733534669'
    ],
    [
        'nama' => 'Lemao',
        'img' => 'gambar/Lemao.png',
        'alamat' => 'Wonokromo',
        'telp' => '082343447586'
    ]
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <h1>Data Siswa (Admin)</h1>

    <a href="logout.php" onclick="return confirm('Are you sure to logout?')">Logout</a> <br> <br>

    <table border="1" cellpadding="20">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><img src="<?php echo $d['img'] ?>" alt="" width="200"></td>
                <td><?php echo $d['nama'] ?></td>
                <td>
                    <form action="detail.php" method="GET">
                        <input type="hidden" name="nama" value="<?php echo $d['nama'] ?>">
                        <input type="hidden" name="img" value="<?php echo $d['img'] ?>">
                        <input type="hidden" name="alamat" value="<?php echo $d['alamat'] ?>">
                        <input type="hidden" name="telp" value="<?php echo $d['telp'] ?>">
                        <button type="submit">Detail</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>