<?php
	include 'api/Database.php';
	$database = new Database();
	$connect = $database->connect();
?>

<div class="card bg-light " >
	<div class="card-header bg-primary">~~ PEMINJAMAN ~~</div>
	<div class="card-body">
		<form action="" id="" enctype="multipart/form-data" method="post">

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">peminjam</label>
				<div class="col-sm-7">
					<select name="nama_pinjam" id="nama_pinjam" class="form-control">
						<option value="">~~ PILIH ~~</option>
						<?php

							$query = "SELECT * FROM member";
							$sql = mysqli_query($connect,$query);
							while($data = mysqli_fetch_array($sql)){
								echo '<option value="'.$data['nama'].'">'.$data['nama'].'</option>';
							}

						?>
					</select>
					<!-- <input type="text" class="form-control" id="nama_pinjam" name="nama_pinjam"> -->
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tanggal Pinjam</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tanggal Pengembalian</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Judul Buku</label>
				<div class="col-sm-4">
					<select name="judul_buku" id="judul_buku" class="form-control">
						<option value="">~~ PILIH ~~</option>
						<?php

							$qer = "SELECT * FROM buku";
							$ql = mysqli_query($connect,$qer);
							while($data = mysqli_fetch_array($ql)){
								echo '<option value="'.$data['judul'].'">'.$data['judul'].'</option>';
							}

						?>
					</select>
					<!-- <input type="text" class="form-control" id="judul_buku" name="judul_buku"> -->
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam" placeholder="Jumlah Pinjam">
				</div>
				<div class="col-sm-3">
					<button type="button" id="btnProses" class="btn btn-secondary">Add Item</button>
				</div>
			</div>

			
	
		</form>
		
		<p>&nbsp;</p>
		<table class="table table-condensed" id="example-table">
			<thead class="thead-dark">
				<tr>
					<!-- <th>NO</th> -->
					<th>PEMINJAM</th>
					<th>TANGGAL PINJAM</th>
					<th>TANGGAL PENGEMBALIAN</th>
					<th>JUDUL BUKU</th>
					<th>JUMLAH PINJAM</th>
				</tr>
			</thead>
			<tbody id='row_data'>
			</tbody>
		</table>
	</div>
</div>