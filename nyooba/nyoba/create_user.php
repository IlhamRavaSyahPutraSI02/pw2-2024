<?php

include 'layouts/header.php';

// cek tombol berhasil
if (isset($_POST['submit'])){
    if (create_user($_POST) > 0){
        echo"<script>
        alert('Data user berhasil ditambahkan');
        document.location.href = 'user.php';
        </script>";
    }
    else {
        echo"<script>
        alert('Data user gagal ditambahkan');
        document.location.href = 'user.php';
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
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3">
        <label for="balance" class="form-label">balance</label>
        <input type="text" class="form-control" id="balance" name="balance" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" style="float:right;">Tambah</button>
    </form>

<?php

include 'layouts/footer.php';

?>