<?php
require_once '../config/Database.php';
require_once '../app/games.php';

$database = new Database();
$db = $database->dbConnection();

$games = new Games($db);

if(isset($_POST['tambah'])){
    $games->name = $_POST['name'];
    $games->platform = $_POST['platform'];

    $games->store(); 
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
        <label for="name">Nama:</label>
        <input type="text" name="name" required>
        <br>
        <label for="platform"> Platform:</label>
        <input type="text" name="platform" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>