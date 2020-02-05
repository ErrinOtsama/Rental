<?php
include ('koneksi.php');
include('keamanan.php');

$kode=$_GET['kode'];

$query="SELECT * FROM tb_rental WHERE kode = '$kode' ";
$data= mysqli_query($conn,$query); 

$row =mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/edit_style.css">
	<title></title>
</head>
<body>
<div class="container">
	<h2>EDIT DATA FILM</h2>
      	<form method="post" action="ubah_film.php">
      		<div class="form-group">
					<label>KODE</label>
				    <input type="number" name="kode" class="form-control" required="required" value="<?php echo $row['kode']; ?>">
				</div>
				<div class="form-group">
					<label class="col-form-label">JUDUL FILM</label>
				    <input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>">
				</div>
				<div class="form-group">
					<label class="col-form-label">GENRE</label>
				    <input type="text" name="genre" class="form-control" value="<?php echo $row['genre']; ?>">
				</div>
				<div class="form-group">
					<label class="col-form-label">TYPE</label>
				    <input type="text" name="type" class="form-control" value="<?php echo $row['type']; ?>">
				</div>
				<div class="form-group">
					<label class="col-form-label">HARGA SEWA</label>
				    <input type="number" name="harga" class="form-control" value="<?php echo $row['harga']; ?>">
				</div>
				<div class="form-group">
					<label class="col-form-label">STATUS</label>
					<div class="form-check form-check-inline">
						<input type="radio" name="status" value="Ready" class="form-check-input" 
						<?php if (!strcmp($row ['status'], "Ready")) {echo "CHECKED"; }?> >
						<label class="form-check-label">YES</label>   
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" name="status" value="Sedang Dipinjam"class="form-check-input"
						<?php if (!strcmp($row ['status'], "Sedang Dipinjam")) {echo "CHECKED"; }?> >
						<label class="form-check-label">NO</label>  
					</div>
					<button type="submit" class="btn btn-lg btn-block btn-outline-primary">simpan</button>
				<button type="reset" class="btn btn-lg btn-block btn-outline-danger">batal</button>
      	</form>
</div>
<script type="text/javascript" src="js/all.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>