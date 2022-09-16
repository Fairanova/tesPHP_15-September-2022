<?php
session_start();

if (isset($_POST['button'])) {

    $data = [
        'username' => 'siswa',
        'username2' => 'admin',
        'password' => '007007'
    ];

    if ($_POST['username'] == $data['username'] && $_POST['password'] == $data['password']) {
        $_SESSION['loginSiswa'] = true;

        header('Location: index.php');
        exit;
    } elseif ($_POST['username'] == $data['username2'] && $_POST['password'] == $data['password']) {
        $_SESSION['loginAdmin'] = true;

        header('Location: index2.php');
        exit;
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Login User</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <button type="submit" name="button">Login</button>
            </li>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic; font-weight: bold;">Username or Password is false</p>
            <?php endif; ?>
        </ul>
    </form>

</body>

</html>