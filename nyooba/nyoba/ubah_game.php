<?php

include 'layouts/header.php';

// mengambil id_game dari url
$id_game = (int)$_GET['id'];

$game = select("SELECT * FROM games WHERE id = $id_game")[0];


// cek tombol berhasil
if (isset($_POST['ubah'])){
    if (update_game($_POST) > 0){
        echo"<script>
        alert('Data Game berhasil diedit');
        document.location.href = 'index.php';
        </script>";
    }
    else {
        echo"<script>
        alert('Data Game gagal diedit');
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-5">
        <h1 class="mt-4">Edit Game</h1><hr>
    </div>
    
    <form action="" method="post">

    <input type="hidden" name="id" value="<?= $game['id']; ?>">

    <div class="mb-3">
        <label for="name" class="form-label">Nama Game</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $game['name']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="platform" class="form-label">Platform</label>
        <input type="text" class="form-control" id="platform" name="platform" value="<?= $game['platform']; ?>"required>
    </div>
    <button type="submit" name="ubah" class="btn btn-primary" style="float:right;">Ubah</button>
    </form>

<?php

include 'layouts/footer.php';

?>