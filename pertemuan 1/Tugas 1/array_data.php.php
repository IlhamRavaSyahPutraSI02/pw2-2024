<?php
    $fruits = [
        [
            "id" => 1,
            "nama" => "Durian",
            "warna" => "Kuning",
            "stok" => 100,
            "harga" => 55.000, 
            "deskripsi" => "Buah ini memiliki julukan Raja Buah karena aromanya yang kuat dan rasa yang sangat manis. Buah ini juga mengandung kalsium, kalium serta vitamin B1 dan B2 yang dapat menyuplai berbagai nutrisi penting yang sangat dibutuhkan untuk menjaga dan mempertahankan kesehatan tulang dan gigi anda."
        ],
        [
            "id" => 2,
            "nama" => "Melon",
            "warna" => "Hijau",
            "stok" => 35,
            "harga" => 15.000, 
            "deskripsi" => "Buah melon memiliki rasa manis dan segar, ideal untuk dikonsumsi sebagai camilan sehat dan dijadikan isian salad buah."
        ],
        [
            "id" => 3,
            "nama" => "Manggis",
            "warna" => "Ungu",
            "stok" => 250,
            "harga" => 18.000, 
            "deskripsi" => "Buah Manggis memiliki rasa yang sangat manis dan banyak khasiatnya. Bukan hanya dagingnya yang berkhasiat kulitnya juga memiliki banyak manfaat yang diolah menjadi obat kecantikan."
        ],
        [
            "id" => 4,
            "nama" => "Pisang",
            "warna" => "Kuning",
            "stok" => 150,
            "harga" => 12.000, 
            "deskripsi" => "Buah pisang merupakan sumber energi yang baik. Rasanya manis dan lembut,diolah menjadi apapun rasanya tetap enak. Cocok untuk dikonsumsi sehabis makan berkat."
        ],
        [
            "id" => 5,
            "nama" => "Alpukat",
            "warna" => "Hijau",
            "stok" => 30,
            "harga" => 15.000,
            "deskripsi" => "Buah alpukat memiliki rasa yang tidak terlalu manis, sehingga banyak orang mengolah buah alpukat menjadi jus. Buah Alpukat mengandung 20 vitamin, nutrisi dan phytonutrients sehingga menjadi sumber makanan yang baik untuk menurunkan kadar lemak di dalam tubuh termasuk kolesterol, sehingga baik dikonsumsi apabila dalam program diet."
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array Table Buah</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Warna</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody class="">
            <?php foreach ($fruits as $fruit){
                 echo "<tr>";
                 echo "<td>" . $fruit["id"];
                 echo "<td>" . $fruit["nama"];
                 echo "<td>" . $fruit["warna"]; 
                 echo "<td>" . $fruit["stok"];
                 echo "<td>" . $fruit["harga"];
                 echo "<td>" . $fruit["deskripsi"];                        
            } 
            ?>                
            </tbody>
        </table>
    </div>
</body>
</html>
