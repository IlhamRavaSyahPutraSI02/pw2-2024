<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/Games.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$game = new Games($db);

if(isset($_POST['tambah'])){
    $game->name = $_POST['name'];
    $game->platform = $_POST['platform'];
    
    $game->store(); 
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
                <form class="border p-3 rounded shadow bg-dark text-light" method="POST" action=""><h1 class="text-center">Tambah Game</h1><hr><br>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-4 col-form-label">Nama Game:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="platform" class="col-sm-4 col-form-label">Platform:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="platform" name="platform" required>
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

<?php
include_once '../../layouts/footer.php';
?>