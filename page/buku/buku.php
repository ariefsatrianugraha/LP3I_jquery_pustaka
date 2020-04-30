<div class="card bg-light " >
	<div class="card-header bg-primary">~~ BUKU ~~</div>
	<div class="card-body">
		
		<div class="btn-group" role="group" >
			<button type="button" id="btn_reload" class="btn btn-outline-secondary">
				<i class="fa fa-home"></i>Reload
			</button>
			<button type="button" id="btn_add" class="btn btn-outline-primary">Add New</button>
		</div>

		<p>&nbsp;</p>
		<table class="table table-condensed" id="example-table">
			<thead class="thead-dark">
				<tr>
					<th>NO</th>
					<th>JUDUL</th>
					<th>PENGARANG</th>
					<th>PENERBIT</th>
					<th>SINOPSIS</th>
					<th>GAMBAR</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody id='row_data'>

			</tbody>
		</table>
	</div>
</div>
		
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Buku</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="" id="buku_form" enctype="multipart/form-data" method="post">
				<div class="modal-body">
					<input type="hidden" id="IdBuku" name="idBuku">
					<input type="hidden" id="mode" name="mod">

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Judul</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="judul" name="judul">
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Pengarang</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="pengarang" name="pengarang">
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Penerbit</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="penerbit" name="penerbit">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Sinopsis</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="sinopsis" name="sinopsis"></textarea>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Gambar</label>
						<div class="col-sm-10">
							<input type="file" class="form-control-file border" id="gambar" name="gambar">
						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" id="btnCancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="btnProses" class="btn btn-primary">Proses Data</button>
				</div>

			</form>
		</div>
	</div>
</div>