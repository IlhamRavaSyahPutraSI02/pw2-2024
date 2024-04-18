<?php

include 'layouts/header.php';

$data_game = select("SELECT * FROM games");

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div> 
                    <a href="create_user.php" class ="btn btn-primary mb-2 ">Tambah</a>
                      <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Balance</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1;?>
                            <?php foreach($user as $users) : ?>
                            <tr>
                                <td><?= $id++;?></td>
                                <td><?= $users['username'];?></td>
                                <td><?= $users['email'];?></td>
                                <td><?= $users['password'];?></td>
                                <td>Rp. <?=number_format( $users['balance'],3,'.');?></td>
                                <td width="15%" class="text-center">
                                    <a href="ubah_user.php?id=<?= $users['id']; ?>" class="btn btn-success">Edit</a>
                                    <a href="hapus_user.php?id=<?= $users['id']; ?>" onclick="return confirm('Yakin data akan dihapus ?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                </main>
  
<?php

include 'layouts/footer.php';
?>