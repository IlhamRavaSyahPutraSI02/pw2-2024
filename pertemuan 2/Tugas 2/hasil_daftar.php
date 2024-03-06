<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php
					if (isset($_POST['submit'])) 
					{

						$nama_lengkap = $_POST['nama_lengkap'];
						$email = $_POST['email'];
						$alamat = $_POST['alamat'];
						$telepon = $_POST['telepon'];
						$submit = $_POST['submit'];
		
						echo "<tr>";
						echo "<td>3</td>";
						echo '<td>' . $nama_lengkap;
						echo '<td>' . $email;
						echo '<td>' . $alamat;
						echo '<td>' . $telepon;
						echo "</tr>";
				}
?>

			</tbody>
		</table>
	</div>
</body>
</html>