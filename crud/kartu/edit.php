<?php
require_once '../config/Database.php';
require_once '../class/Produk.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new Kartu($db);

if(isset($_POST['update'])) {
    $produk->kode = $_POST['kode'];
    $produk->nama = $_POST['nama'];
    $produk->diskon = $_POST['diskon'];
    $produk->iuran = $_POST['iuran'];

    $produk->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $produk->id = $_GET['id'];
    $stmt = $produk->edit();
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
        <label for="kode">Kode:</label>
        <input type="text" name="kode" value="<?php echo $kode; ?>" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
        <br>
        <label for="diskon">Diskon:</label>
        <input type="number" name="diskon" value="<?php echo $harga_beli; ?>" required>
        <br>
        <label for="iuran">iuran:</label>
        <input type="number" name="iuran" value="<?php echo $harga_jual; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>