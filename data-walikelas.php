<?php  
	session_start();
	if (!isset($_SESSION['login'])) {
		header('location:new_login.php');
	}
	include 'koneksi.php';

	$result = mysqli_query($konek,"SELECT kelas.kelas, petugas.namaguru FROM kelas INNER JOIN petugas ON kelas.idguru = petugas.idguru ORDER BY kelas.kelas ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KELAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/data-guru1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br> </br>
		<br> </br>
	<h2 class="text-center mt-2">Data Kelas</h2>
	<div class="container">
		<div class="text-center mt-2">
			<table class="table table-bordered shadow" border="1">
				<thead id="thead">
					<tr>
						<th>No</th>
						<th>Wali Kelas</th>
						<th>Kelas</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php  
						$no = 1;

						while ($data = mysqli_fetch_array($result)) {
							echo "
								<tr>
									<td>$no</td>
									<td>$data[namaguru]</td>
									<td>$data[kelas]</td>
									<td><a href='edit-wakel.php?id=$data[kelas]''>Edit</a> | <a href='delete-wakel.php?id=$data[kelas]' onclick='return confirm()'>Delete</a> </td>
								</tr>
							";
							$no++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="container">
		<div class="clearfixs">
			<div class="float-left">
				<a href="input-wakel.php" id="tambah" class="btn btn-primary shadow">Tambah Data</a>
			</div>
			<div class="float-right">
				<a href="dashboard.php" id="tambah" class="btn btn-primary shadow">Kembali</a>
			</div>
</body>
</html>
