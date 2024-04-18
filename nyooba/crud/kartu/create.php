<?php
require_once '../config/Database.php';
require_once '../class/Game.php';

$database = new Database();
$db = $database->dbConnection();

$game = new Game($db);

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
    <h1>Tambah Data</h1>
    <form method="POST" action="">
        <!-- <label for="id">Id:</label>
        <input type="text" name="id" required>
        <br> -->
        <label for="name">Nama:</label>
        <input type="text" name="name" required>
        <br>
        <label for="platform">Platform:</label>
        <input type="text" name="platform" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>