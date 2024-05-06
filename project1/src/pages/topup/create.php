<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/Top_up.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';

$database = new Database();
$db = $database->dbConnection();

$topups = new Topups($db);

if(isset($_POST['tambah'])){
    $topups->user_id = $_POST['user_id'];
    $topups->game_id = $_POST['game_id'];
    $topups->amount = $_POST['amount'];
    $topups->topup_date = $_POST['topup_date'];

    $topups->store(); 
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
                <form class="border p-3 rounded shadow bg-dark text-light" method="POST" action=""><h1 class="text-center">Tambah Top Up</h1><hr><br>
                    <div class="mb-3 row">
                        <label for="user_id" class="col-sm-4 col-form-label">User Id:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="user_id" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="game_id" class="col-sm-4 col-form-label">Game Id:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="game_id" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="amount" class="col-sm-4 col-form-label">Amount:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="amount" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="topup_date" class="col-sm-4 col-form-label">Date:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="topup_date" required>
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
