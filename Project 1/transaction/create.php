<?php
require_once '../config/Database.php';
require_once '../app/transactions.php';

$database = new Database();
$db = $database->dbConnection();

$transactions = new Transactions($db);

if(isset($_POST['tambah'])){
    $transactions->user_id = $_POST['user_id'];
    $transactions->game_id = $_POST['game_id'];
    $transactions->amount = $_POST['amount'];
    $transactions->transaction_date = $_POST['transaction_date'];

    $transactions->store(); 
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
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required>
        <br>
        <label for="game_id">Game ID:</label>
        <input type="text" name="game_id" required>
        <br>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" required>
        <br>
        <label for="transaction_date ">Date:</label>
        <input type="number" name="transaction_date" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>