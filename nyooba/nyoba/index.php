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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Top up</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>   
                    </div> 
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
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Tranksaksi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div> 
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Game ID</th>
                                <th>Amount</th>
                                <th>Transaction Date</th>
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
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                      <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div> 
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
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                      </table>
                </main>
  
<?php

include 'layouts/footer.php';
?>