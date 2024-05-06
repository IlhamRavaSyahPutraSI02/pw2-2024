<?php
ob_start();
require_once '../../../config/database.php';
require_once '../../../app/User.php';
include_once '../../layouts/link.php';
include_once '../../layouts/header.php';
include_once '../../layouts/sidebar.php';


$database = new Database();
$db = $database->dbConnection();

$users = new Users($db);

if(isset($_POST['update'])) {
    $users->id = $_POST['id'];
    $users->username = $_POST['username'];
    $users->email = $_POST['email'];
    $users->password = $_POST['password'];
    $users->balance = $_POST['balance'];

    $users->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $users->id = $_GET['id'];
    $stmt = $users->edit();
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
<div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Edit User</h1>
                        <hr>   
                    </div>
                    <form class="form-horizontal w-50 mt-1 mx-auto p-4 border shadow-sm bg-dark text-light" method="POST" action="">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="username">Username:</label>
            <input class="form-control" type="text" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="text" name="password" value="<?php echo $password; ?>" required>
        </div>   
        <div class="form-group">
            <label for="balance">Balance:</label>
            <input class="form-control" type="number" name="balance" value="<?php echo $balance; ?>" required>
        </div>
        <br>
        <div class="d-flex justify-content-end">
        <input class="btn text-light" style="background-color:#a275ef;" type="submit" name="update" value="Update">
        </div>
    </form>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form class="border p-3 rounded shadow bg-dark text-light" method="POST" action=""><h1 class="text-center">Edit User</h1><hr><br>
                    <div class="mb-3 row">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label for="username" class="col-sm-4 col-form-label">Username:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Email:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-4 col-form-label">Password:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="passsword" value="<?php echo $password; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="balance" class="col-sm-4 col-form-label">Balance:</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="balance" value="<?php echo $balance; ?>" required>
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
