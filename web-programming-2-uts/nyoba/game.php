<?php

include 'layouts/header.php';

$data_game = select("SELECT * FROM games");

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Game</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>   
                    <a href="create_game.php" class ="btn btn-primary mb-2">Tambah</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Platform</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1;?>
                            <?php foreach($data_game as $game) : ?>
                            <tr>
                                <td><?= $id++;?></td>
                                <td><?= $game['name'];?></td>
                                <td><?= $game['platform'];?></td>
                                <td width="15%" class="text-center">
                                    <a href="ubah_game.php?id=<?= $game['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="hapus_game.php?id=<?= $game['id']; ?>" onclick="return confirm('Yakin data akan dihapus ?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                      <main>
  
<?php

include 'layouts/footer.php';
?>