<?php

include 'layouts/header.php';

// cek tombol berhasil
if (isset($_POST['submit'])){
    if (create_game($_POST) > 0){
        echo"<script>
        alert('Data Game berhasil ditambahkan');
        document.location.href = 'game.php';
        </script>";
    }
    else {
        echo"<script>
        alert('Data Game gagal ditambahkan');
        document.location.href = 'game.php';
        </script>";
    }
}

?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Game</h1><hr>
    </div>
    
    <form action="" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nama Game</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="platform" class="form-label">Platform</label>
        <input type="text" class="form-control" id="platform" name="platform" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" style="float:right;">Tambah</button>
    </form>

<?php

include 'layouts/footer.php';

?>