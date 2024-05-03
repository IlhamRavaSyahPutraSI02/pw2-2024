<?php
require_once '../config/Database.php';
require_once '../app/transactions.php';

$database = new Database();
$db = $database->dbConnection();

$transactions = new Transactions($db);

if(isset($_POST['update'])) {
    $transactions->user_id = $_POST['user_id'];
    $transactions->game_id = $_POST['game_id'];
    $transactions->amount = $_POST['amount'];
    $transactions->transaction_date = $_POST['transaction_date'];

    $transactions->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $transactions->id = $_GET['id'];
    $stmt = $transactions->edit();
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
        <label for="transaction_date">Date:</label>
        <input type="number" name="transaction_date" value="<?php echo $transaction_date; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>