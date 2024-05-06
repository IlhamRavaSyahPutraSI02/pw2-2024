<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/Transactions.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$transactions = new Transactions($db);

if(isset($_POST['update'])) {
    $transactions->id = $_POST['id'];
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
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form class="border p-3 rounded shadow bg-dark text-light" method="POST" action=""><h1 class="text-center">Edit Transaksi</h1><hr><br>
                    <div class="mb-3 row">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label for="user_id" class="col-sm-4 col-form-label">User Id:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="user_id" value="<?php echo $user_id; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="game_id" class="col-sm-4 col-form-label">Game id:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="game_id" value="<?php echo $game_id; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="amount" class="col-sm-4 col-form-label">Amount:</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" name="amount" value="<?php echo $amount; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="transaction_date" class="col-sm-4 col-form-label">Date:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="transaction_date" value="<?php echo $transaction_date; ?>" required>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn" style="background-color:#a275ef; color:white; " name="update">Edit</button>
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
