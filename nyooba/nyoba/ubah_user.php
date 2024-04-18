
<?php

include 'layouts/header.php';

// mengambil id_game dari url
$id_user = (int)$_GET['id'];

$user = select("SELECT * FROM users WHERE id = $id_user")[0];


// cek tombol berhasil
if (isset($_POST['ubah'])){
    if (update_user($_POST) > 0){
        echo"<script>
        alert('Data user berhasil diedit');
        document.location.href = 'index.php';
        </script>";
    }
    else {
        echo"<script>
        alert('Data user gagal diedit');
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

    <input type="hidden" name="id" value="<?= $user['id']; ?>">

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>"required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" value="<?= $user['password']; ?>"required>
    </div>
    <div class="mb-3">
        <label for="balance" class="form-label">Balance</label>
        <input type="text" class="form-control" id="balance" name="balance" value="<?= $user['balance']; ?>"required>
    </div>
    <button type="submit" name="ubah" class="btn btn-primary" style="float:right;">Ubah</button>
    </form>

<?php

include 'layouts/footer.php';

?>