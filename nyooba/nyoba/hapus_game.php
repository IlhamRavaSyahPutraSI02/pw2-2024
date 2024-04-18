<?php

include 'layouts/header.php';

// mengambil id_game dari url
$id_game = (int)$_GET['id'];

// cek tombol berhasil
    if (delete_game($id_game) > 0){
        echo"<script>
        alert('Data Game berhasil dihapus');
        document.location.href = 'index.php';
        </script>";
    }
    else {
        echo"<script>
        alert('Data Game gagal dihapus');
        document.location.href = 'index.php';
        </script>";
    }


?>