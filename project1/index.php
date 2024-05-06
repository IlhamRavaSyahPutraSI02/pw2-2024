<?php
include 'src/layouts/link.php';
include 'src/layouts/header.php';
include 'src/layouts/sidebar.php';
?>  
                <main>
                    <div class="container-fluid px-4 text-center">
                        <h1 class="mt-4">Selamat Datang di Rvaastore! <i class='bx bxs-joystick bx-spin' ></i></h1>
                        <p>Silahkan top up disini ya sobat :)</p>
                    </div>
                    <hr>  
                    <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#343a40;">
                                    <div class="card-body ">Data Games | <i class="fas fa-gamepad" ></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/pw2-2024/project1/src/pages/games/index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#343a40;">
                                    <div class="card-body">Data Top Up | <i class="fas fa-shopping-cart"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/pw2-2024/project1/src/pages/topup/index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#343a40;">
                                    <div class="card-body">Data Transaksi | <i class="bx bxs-credit-card"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/pw2-2024/project1/src/pages/transaksi/index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color:#343a40;">
                                    <div class="card-body">Data User | <i class="fas fa-user"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="/pw2-2024/project1/src/pages/user/index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid px-4 text-center">
                        <h1 class="mt-4">Pilihan Game <i class="fa fa-gamepad"></i></h1>
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        </div><hr>
                        <div class="container d-flex justify-content-center mb-5 py-3">
                            <div class="border text-center bg-dark text-light p-3" style="border-radius:20px; border: 10px solid #ccc; margin: 10px;">  
                                <img src="src/assets/img/ml.jpg" style="width:150px; height:150px; border-radius:20px;padding:10px;" alt="">
                                <p class="border m-3 p-2" style="border-radius:10px; background-color:#a275ef; ">Mobile legend</p>
                            </div>
                            <div class="border text-center bg-dark text-light p-3" style="border-radius:20px; border: 10px solid #ccc; margin: 10px;">  
                                <img src="src/assets/img/pubg.jpg" style="width:150px; height:150px; border-radius:20px;padding:10px;" alt="">
                                <p class="border m-3 p-2" style="border-radius:10px; background-color:#a275ef; ">PUBG Mobile</p>
                            </div>
                            <div class="border text-center bg-dark text-light p-3" style="border-radius:20px; border: 10px solid #ccc; margin: 10px;">  
                                <img src="src/assets/img/valorant.png" style="width:150px; height:150px; border-radius:20px;padding:10px;" alt="">
                                <p class="border m-3 p-2" style="border-radius:10px; background-color:#a275ef; ">Valorant</p>
                            </div>
                            <div class="border text-center bg-dark text-light p-3" style="border-radius:20px; border: 10px solid #ccc; margin: 10px;">  
                                <img src="src/assets/img/ff.jpg" style="width:150px; height:150px; border-radius:20px;padding:10px;" alt="">
                                <p class="border m-3 p-2" style="border-radius:10px; background-color:#a275ef; ">Free Fire</p>
                            </div>
                        </div>
                        <div class="container-fluid px-4 text-center">
                        <h1 class="mt-4">Daftar Pelanggan Setia <i class="fa fa-users"></i></h1>
                        <p>Tabel ini berisi nama-nama pelanggan setia kita ya guyss :)</p>
                    </div> <hr>
    <table border="1"  class="table table-bordered table-striped text-center" >
        <thead class="bg-dark">
            <tr>
                <th class="text-light">No</th>
                <th class="text-light">Nama Pelanggan</th>
                <th class="text-light">Alamat</th>
                <th class="text-light">Jenis Game</th>
                <th class="text-light">Total Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Albertt</td>
                <td>Bogor</td>
                <td>Mobile</td>
                <td>354</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Hafidz</td>
                <td>Depok</td>
                <td>Mobile</td>
                <td>258</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ojay</td>
                <td>Jakarta</td>
                <td>PC</td>
                <td>203</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Gebyy</td>
                <td>Jakarta</td>
                <td>Mobile</td>
                <td>196</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Nayla</td>
                <td>Bekasi</td>
                <td>PC</td>
                <td>184</td>
            </tr>
        </tbody>
    </table>
                </main>      
<?php

include 'src/layouts/footer.php';
?>