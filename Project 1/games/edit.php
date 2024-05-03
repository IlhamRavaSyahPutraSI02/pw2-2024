<?php
require_once '../config/Database.php';
require_once '../app/games.php';

$database = new Database();
$db = $database->dbConnection();

$games = new Games($db);

if(isset($_POST['update'])) {
    $games->id = $_POST['id'];
    $games->name = $_POST['name'];
    $games->platform = $_POST['platform'];

    $games->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $games->id = $_GET['id'];
    $stmt = $games->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $name; ?>" required>
        <br>
        <label for="platform">Platform:</label>
        <input type="text" name="platform" value="<?php echo $platform; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>