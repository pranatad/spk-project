<div class="container">
	<h2 align="center" style="margin: 30px;">Tambah Data Kriteria</h2>
	<form method="POST" action="tambah_kriteria_action.php">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<div class="form-group">
					<label>Aspek Penilaian</label>
					<select name="id_aspek" id="id_aspek" class="form-control" required="true">
						<option value=""></option>
						<option value="1">Kecerdasan</option>
						<option value="2">Target Kerja</option>
						<option value="3">Sikap Kerja</option>
					</select>
				</div>
				<div class="form-group">
					<label>Kriteria</label>
					<input type="text" name="faktor" id="faktor" class="form-control" required="true">
				</div>
				<div class="form-group">
					<label>Target</label>
					<select name="target" id="target" class="form-control" required="true">
						<option value="1">Kurang</option>
						<option value="2">Cukup</option>
						<option value="3">Baik</option>
						<option value="4">Sangat Baik</option>
					</select>
				</div>
				<div class="form-group">
					<label>Type</label>
					<select name="type" id="type" class="form-control" required="true">
						<option value="core">Core Factor</option>
						<option value="secondary">Secondary Factor</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
						<i class="fa fa-save"></i> Simpan
					</button>

					<button type="submit" name="simpan" id="simpan" class="btn btn-danger">
						<a href="home.php?page=kriteria" style="color:white;text-decoration: none; "></i>Batal</a>
					</button>
				</div>
			</div>
		</div>
	</form>
</div>