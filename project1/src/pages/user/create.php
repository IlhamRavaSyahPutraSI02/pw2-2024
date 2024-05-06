<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/User.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$users = new Users($db);

if(isset($_POST['tambah'])){
    $users->username = $_POST['username'];
    $users->email = $_POST['email'];
    $users->password = $_POST['password'];
    $users->balance = $_POST['balance'];

    $users->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form class="border p-3 rounded shadow bg-dark text-light" method="POST" action=""><h1 class="text-center">Tambah Transaksi</h1><hr><br>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-4 col-form-label">Username:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="username" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Email:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-4 col-form-label">Password:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="password" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="balance" class="col-sm-4 col-form-label">Balance:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="balance" required>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn" style="background-color:#a275ef; color:white; " name="tambah">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include_once '../../layouts/footer.php';
?>
