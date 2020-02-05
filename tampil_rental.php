<?php 
include('koneksi.php');
include('keamanan.php');


$query = "SELECT * FROM tb_rental";
$data = mysqli_query($conn,$query); 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
 	<title></title>
 </head>
 <body>

<div class="container">
<nav class="navbar navbar-light rounded-pill">
  <a class="navbar-brand">RENTAL FILM</a>
  <form class="form-inline">
  	<a class="btn btn-danger my-2 my-sm-0 rounded-pill" href="logout.php" ><i class="far fa-user-circle"></i> LOGOUT</a>
</nav>	
<table class="table table-bordered">
 		<h2 class="text-center"> LIST FILM </h2>
  <thead class="thead-dark">
    <tr class="text-center">
      <th scope="col">KODE</th>
      <th scope="col">JUDUL FILM</th>
      <th scope="col">GENRE</th>
      <th scope="col">TYPE</th>
      <th scope="col">HARGA SEWA</th>
      <th scope="col">STATUS</th>
      <th scope="col" colspan="2">AKSI</th>
    </tr>
  </thead>
  <tbody>
  	<?php while($row=mysqli_fetch_assoc($data)){
	?>
	<tr>
		<td><?php echo $row['kode']; ?></td>
		<td><?php echo $row['judul']; ?></td>
		<td><?php echo $row['genre']; ?></td>
		<td><?php echo $row['type']; ?></td>
		<td>Rp.<?php echo $row['harga']; ?></td>
		<td><?php echo $row['status']; ?></td>
		<td class="text-center">
			<a href="edit_film.php?kode=<?php echo $row['kode']; ?>"><i class="far fa-edit" style="color: green"></i></a> |
		     <a href="delate_film.php?kode=<?php echo $row['kode']; ?>" onclick="return confirm('Yakin Mau Melupakan Masa Lalu ? ')"><i class="far fa-trash-alt " style="color: red"></i></a>
		    </td>
	</tr>
	<?php
    }?>
  </tbody>
</table>
<button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#exampleModalCenter">
<i class="fas fa-plus-circle"></i> TAMBAH	
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">TAMBAH FILM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="simpan_film.php">
      		<div class="form-group">
					<label>KODE</label>
				    <input type="number" name="kode" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label class="col-form-label">JUDUL FILM</label>
				    <input type="text" name="judul" class="form-control">
				</div>
				<div class="form-group">
					<label class="col-form-label">GENRE</label>
				    <input type="text" name="genre" class="form-control">
				</div>
				<div class="form-group">
					<label class="col-form-label">TYPE</label>
				    <input type="text" name="type" class="form-control">
				</div>
				<div class="form-group">
					<label class="col-form-label">HARGA SEWA</label>
				    <input type="number" name="harga" class="form-control">
				</div>
				<div class="form-group">
					<label class="col-form-label">STATUS</label>
					<div class="form-check form-check-inline">
						<input type="radio" name="status" value="Ready" class="form-check-input">
						<label class="form-check-label">YES</label>   
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" name="status" value="Sedang Dipinjam"class="form-check-input">
						<label class="form-check-label">NO</label>  
					</div>
				</div>
				      <div class="modal-footer">
      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

      	</form>
      </div>
    </div>
  </div>
</div>
</div>
 
<script type="text/javascript" src="js/all.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>