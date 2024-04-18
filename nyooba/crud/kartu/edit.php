<?php
require_once '../config/Database.php';
require_once '../class/Game.php';

$database = new Database();
$db = $database->dbConnection();

$game = new Game($db);

if(isset($_POST['update'])) {
    $game->kode = $_POST['kode'];
    $game->name = $_POST['name'];
    $game->platform = $_POST['platform'];

    $game->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $game->id = $_GET['id'];
    $stmt = $game->edit();
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
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <br>
        <label for="platform">Platform:</label>
        <input type="text" name="platform" value="<?php echo $platform; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>