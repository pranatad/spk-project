<div class="container">
		<h2 align="center" style="margin: 30px;">Edit Data Pelamar</h2>
		<?php
			// data difilter terlebih dahulu & base64_decode berguna untuk mendeskripsi id yg sebelumnya di enkripsi/encoding
			$id = stripslashes(strip_tags(htmlspecialchars(base64_decode($_GET['aa']) ,ENT_QUOTES)));

			$query = "SELECT * FROM master_pelamar WHERE id_pelamar=?";
	        $pelamar = $koneksi->prepare($query);
	        $pelamar->bind_param("i", $id);
	        $pelamar->execute();
	        $res1 = $pelamar->get_result();
	        while ($row = $res1->fetch_assoc()) {
	        	$id = $row['id_pelamar'];
	            $nama_pelamar = $row['nama_pelamar'];
	            $no_hp = $row['no_hp'];
	            $email = $row['email'];
	        }
		?>
		<form method="POST" action="edit_pelamar_action.php">
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<label>Nama Pelamar</label>
						<input type="hidden" name="id_pelamar" id="id_pelamar" value="<?php echo $id; ?>">
						<input type="text" name="nama_pelamar" id="nama_pelamar" class="form-control" value="<?php echo $nama_pelamar; ?>" required="true">
					</div>
					<div class="form-group">
						<label>No Handphone</label>
						<input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $no_hp; ?>" required="true">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required="true">
					</div>
					<div class="form-group">
						<button type="submit" name="simpan" id="simpan" class="btn btn-primary">
							<i class="fa fa-save"></i> Simpan
						</button>
						<button type="button" name="simpan" id="simpan" class="btn btn-danger" >
							<a href="home.php?page=pelamar" style="color:white;text-decoration: none; "></i>Batal</a>
						</button>
					</div>
				</div>
			</div>
		</form>
    </div>