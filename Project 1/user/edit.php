<?php
require_once '../config/Database.php';
require_once '../app/users.php';

$database = new Database();
$db = $database->dbConnection();

$users = new Users($db);

if(isset($_POST['update'])) {
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
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>" required>
        <br>
        <label for="password">Password:</label>
        <input type="number" name="password" value="<?php echo $password; ?>" required>
        <br>
        <label for="balance">Balance:</label>
        <input type="number" name="balance" value="<?php echo $balance; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>