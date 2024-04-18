<?php

include 'layouts/header.php';

$tgl_topup = select("SELECT * FROM  topups");

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Top up</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div> 
                    <a href="create_topup.php" class ="btn btn-primary mb-2">Tambah</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Game ID</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1;?>
                            <?php foreach($tgl_topup as $topup) : ?>
                            <tr>
                                <td><?= $id++;?></td>
                                <td><?= $topup['user_id'];?></td>
                                <td><?= $topup['game_id'];?></td>
                                <td><?= $topup['amount'];?></td>
                                <td><?= date('d-m-Y | H:i:s', strtotime($topup['topup_date']));?></td>
                                <td width="15%" class="text-center">
                                    <a href="ubah_game.php?id=<?= $topup['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="hapus_game.php?id=<?= $topup['id']; ?>" onclick="return confirm('Yakin data akan dihapus ?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                     
  
<?php

include 'layouts/footer.php';
?>