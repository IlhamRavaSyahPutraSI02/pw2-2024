<?php

include 'layouts/header.php';

// cek tombol berhasil
if (isset($_POST['submit'])){
    if (create_topup($_POST) > 0){
        echo"<script>
        alert('Data topup berhasil ditambahkan');
        document.location.href = 'topup.php';
        </script>";
    }
    else {
        echo"<script>
        alert('Data topup gagal ditambahkan');
        document.location.href = 'topup.php';
        </script>";
    }
}

?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Top Up</h1><hr>
    </div>
    
    <form action="" method="post">
    <div class="mb-3">
        <label for="user_id" class="form-label">User ID</label>
        <input type="number" class="form-control" id="user_id" name="user_id" required>
    </div>
    <div class="mb-3">
        <label for="game_id" class="form-label">Game ID</label>
        <input type="number" class="form-control" id="game_id" name="game_id" required>
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="text" class="form-control" id="amount" name="amount" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" style="float:right;">Tambah</button>
    </form>

<?php

include 'layouts/footer.php';

?>