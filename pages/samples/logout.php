<?php
// Mulai session
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Redirect ke halaman utama (index.html di root pilarweb)
header("Location: ../../../index.html");
exit;
?>

