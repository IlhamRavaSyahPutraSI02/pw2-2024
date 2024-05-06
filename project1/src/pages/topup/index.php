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

// Cek jika parameter id ada pada URL
if(isset($_GET['id'])){
    $topups->id = $_GET['id'];

    if($topups->delete()){
        header("Location: index.php");
    }else{
        echo "Gagal menghapus data Top Up.";
    }
}

// Tampilkan data dari method index
$data = $topups->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Top Up</title>
<body>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Daftar Top Up <i class='bx bxs-cart-alt' ></i></h1>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item active">Table Topup</li>
                        </ol>
                    </div> <hr>
    <a href="create.php"class="btn btn-primary" style="width: 100px; margin:10px; color:white; border-radius:10px;">Tambah</a> <!-- Tautan Tambah -->
    <table border="1"  class="table table-bordered table-striped text-center">
        <thead class="bg-dark">
            <tr>
                <th class="text-light">ID</th>
                <th class="text-light">User ID</th>
                <th class="text-light">Game ID</th>
                <th class="text-light">Amount</th>
                <th class="text-light">Date</th> 
                <th class="text-light">Aksi</th> 
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['game_id']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['topup_date']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="border-radius:10px;">Edit</a>
                        <a href="index.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')" class="btn btn-danger" style="border-radius:10px;">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

<?php
include_once '../../layouts/footer.php';
?>
