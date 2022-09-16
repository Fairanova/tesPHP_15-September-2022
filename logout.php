<?php
session_start();

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$_SESSION = [];
session_unset();
// berfungsi untuk memastikan bahwa session benar2 hilang karena ada beberapa kasus session tidak hilang walau sudah memakai "session_destroy();"

// kembalikan user ke halaman login
header('Location: login.php');
exit;
