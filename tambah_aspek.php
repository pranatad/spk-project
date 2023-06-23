<div class="container">
		<h2 align="center" style="margin: 30px;">Tambah Data Aspek</h2>
		<form method="POST" action="tambah_aspek_action.php">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<label>Aspek Penilaian</label>
						<input type="text" name="aspek" id="aspek" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Persentase</label>
						<input type="text" name="prosentase" id="prosentase" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Core Factor</label>
						<input type="text" name="bobot_core" id="bobot_core" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Secondary Factor</label>
						<input type="text" name="bobot_secondary" id="bobot_secondary" class="form-control" required="true">
					</div>
					
					<div class="form-group">
						<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>

						<button type="submit" name="simpan" id="simpan" class="btn btn-danger" >
							<a href="home.php?page=aspek" style="color:white;text-decoration: none; "></i>Batal</a>
						</button>
					</div>
				</div>
			</div>
		</form>
    </div>