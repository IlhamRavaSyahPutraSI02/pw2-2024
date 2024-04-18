<?php

include 'layouts/header.php';

// mengambil id_game dari url
$id = (int)$_GET['id'];

// cek tombol berhasil
    if (delete_user($id) > 0){
        echo"<script>
        alert('Data User berhasil dihapus');
        document.location.href = 'index.php';
        </script>";
    }
    else {
        echo"<script>
        alert('Data User gagal dihapus');
        document.location.href = 'index.php';
        </script>";
    }


?>