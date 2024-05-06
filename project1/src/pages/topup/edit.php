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

if(isset($_POST['update'])) {
    $topups->id = $_POST['id'];
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form class="border p-3 rounded shadow bg-dark text-light" method="POST" action=""><h1 class="text-center">Edit Top Up</h1><hr><br>
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
                        <label for="topup_date" class="col-sm-4 col-form-label">Date:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="topup_date" value="<?php echo $topup_date; ?>" required>
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
