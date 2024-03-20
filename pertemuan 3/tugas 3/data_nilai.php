<?php
    include_once 'header.php'
?>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
            include_once 'libfungsi.php';
            if (isset($_POST['submit'])) {
              
                $submit = $_POST['submit'];
                $nama = $_POST['namalengkap'];
                $matkul = $_POST['matkul'];
                $uts = $_POST['nilaiuts'];
                $uas = $_POST['nilaiuas'];
                $praktikum = $_POST['nilaipraktikum'];
                $rata_rata = rata_rata ($uts,$uas,$praktikum);
                
                $total_nilai =$rata_rata;
                $grade = grade($total_nilai);
                $keterangan = kelulusan($total_nilai);



            }
            echo "<tr>";
                 echo "<td>" . 3;
                 echo "<td>" . $nama;
                 echo "<td>" . $matkul; 
                 echo "<td>" . $uts;
                 echo "<td>" . $uas;
                 echo "<td>" . $praktikum;      
                 echo "<td>" . $rata_rata;   
                 echo "<td>" . $grade[0];   
                 echo "<td>" . $grade[1];   
                 echo "<td>" . $keterangan;   

          ?>
      </tbody>
  </table>
</div>
<?php
    include_once 'footer.php'
?>