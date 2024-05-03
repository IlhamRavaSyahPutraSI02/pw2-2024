<?php
require_once '../config/Database.php';
require_once '../app/topups.php';

$database = new Database();
$db = $database->dbConnection();

$topups = new Topups($db);

if(isset($_POST['update'])) {
    $topups->user_id = $_POST['user_id'];
    $topups->game_id = $_POST['game_id'];
    $topups->amount = $_POST['amount'];
    $topups->topup_date = $_POST['topup_date'];

    $topups->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $topups->id = $_GET['id'];
    $stmt = $topups->edit();
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
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" value="<?php echo $user_id; ?>" required>
        <br>
        <label for="game_id">Game ID:</label>
        <input type="text" name="game_id" value="<?php echo $game_id; ?>" required>
        <br>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" value="<?php echo $amount; ?>" required>
        <br>
        <label for="topup_date">Date:</label>
        <input type="number" name="topup_date" value="<?php echo $topup_date; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>