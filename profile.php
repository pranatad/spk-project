<?php // jika submit button diklik
if (isset($_REQUEST['Simpan_kecerdasan'])) {

  $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(1,2,3,4)");
  $queryloop = "SELECT * FROM master_pelamar";
  $sql_loop = mysqli_query($koneksi, $queryloop);
  if (mysqli_num_rows($sql_loop) > 0) {
    while ($row_loop = mysqli_fetch_array($sql_loop)) {
      $a1 = array(array($row_loop['id_pelamar'], 1, $_REQUEST[$row_loop['id_pelamar'] . '_A1']));
      $a2 = array(array($row_loop['id_pelamar'], 2, $_REQUEST[$row_loop['id_pelamar'] . '_A2']));
      $a3 = array(array($row_loop['id_pelamar'], 3, $_REQUEST[$row_loop['id_pelamar'] . '_A3']));
      $a4 = array(array($row_loop['id_pelamar'], 4, $_REQUEST[$row_loop['id_pelamar'] . '_A4']));

      $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a1[0][0] . "', '" . $a1[0][1] . "', '" . $a1[0][2] . "')");
      $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a2[0][0] . "', '" . $a2[0][1] . "', '" . $a2[0][2] . "')");
      $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a3[0][0] . "', '" . $a3[0][1] . "', '" . $a3[0][2] . "')");
      $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a4[0][0] . "', '" . $a4[0][1] . "', '" . $a4[0][2] . "')");

      echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
    }
  }
}

if (isset($_REQUEST['Simpan_wawancara'])) {

  $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(5,6,7,8)");
  $queryloop = "SELECT * FROM master_pelamar";
  $sql_loop = mysqli_query($koneksi, $queryloop);
  if (mysqli_num_rows($sql_loop) > 0) {
    while ($row_loop = mysqli_fetch_array($sql_loop)) {
      $a5 = array(array($row_loop['id_pelamar'], 5, $_REQUEST[$row_loop['id_pelamar'] . '_A5']));
      $a6 = array(array($row_loop['id_pelamar'], 6, $_REQUEST[$row_loop['id_pelamar'] . '_A6']));
      $a7 = array(array($row_loop['id_pelamar'], 7, $_REQUEST[$row_loop['id_pelamar'] . '_A7']));
      $a8 = array(array($row_loop['id_pelamar'], 8, $_REQUEST[$row_loop['id_pelamar'] . '_A8']));

      $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a5[0][0] . "', '" . $a5[0][1] . "', '" . $a5[0][2] . "')");
      $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a6[0][0] . "', '" . $a6[0][1] . "', '" . $a6[0][2] . "')");
      $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a7[0][0] . "', '" . $a7[0][1] . "', '" . $a7[0][2] . "')");
      $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a8[0][0] . "', '" . $a8[0][1] . "', '" . $a8[0][2] . "')");
      echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
    }
  }
}

if (isset($_REQUEST['Simpan_sikapkerja'])) {

  $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(9,10,11,12)");
  $queryloop = "SELECT * FROM master_pelamar";
  $sql_loop = mysqli_query($koneksi, $queryloop);
  if (mysqli_num_rows($sql_loop) > 0) {
    while ($row_loop = mysqli_fetch_array($sql_loop)) {
      $a9 = array(array($row_loop['id_pelamar'], 9, $_REQUEST[$row_loop['id_pelamar'] . '_A9']));
      $a10 = array(array($row_loop['id_pelamar'], 10, $_REQUEST[$row_loop['id_pelamar'] . '_A10']));
      $a11 = array(array($row_loop['id_pelamar'], 11, $_REQUEST[$row_loop['id_pelamar'] . '_A11']));
      $a12 = array(array($row_loop['id_pelamar'], 12, $_REQUEST[$row_loop['id_pelamar'] . '_A12']));

      $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a9[0][0] . "', '" . $a9[0][1] . "', '" . $a9[0][2] . "')");
      $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a10[0][0] . "', '" . $a10[0][1] . "', '" . $a10[0][2] . "')");
      $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a11[0][0] . "', '" . $a11[0][1] . "', '" . $a11[0][2] . "')");
      $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '" . $a12[0][0] . "', '" . $a12[0][1] . "', '" . $a12[0][2] . "')");

      echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
    }
  }
}

?>
<form class="form-kecerdasan" method="post" action="" role="form">
  <div class="card mb-6 shadow-sm">
    <div class="card-header">
      <div class="col-6">
        <select class="custom-select d-block w-50" id="aspek" name="aspek" required>
          <option value="">Pilih Aspek...</option>
          <option value="kecerdasan" <?php echo isset($_REQUEST['aspek']) && $_REQUEST['aspek'] == "kecerdasan" ? "selected=selected" : ""; ?>>Kecerdasan</option>
          <option value="wawancara" <?php echo isset($_REQUEST['aspek']) && $_REQUEST['aspek'] == "wawancara" ? "selected=selected" : ""; ?>>Target Kerja</option>
          <option value="sikapkerja" <?php echo isset($_REQUEST['aspek']) && $_REQUEST['aspek'] == "sikapkerja" ? "selected=selected" : ""; ?>>Sikap Kerja</option>
        </select>

      </div>
    </div>
    <div class="card-body">
      <div class="container">
        <div id="spninactive_kecerdasan" style="display:none;">

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Pelamar</th>
                <th>A1 - Penguasaan Product Knowledge</th>
                <th>A2 - Kreatif</th>
                <th>A3 - Logika</th>
                <th>A4 - Inovatif</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A1,pm.A2,pm.A3,pm.A4 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
              //$query ="select * from master_pelamar";
              $sql = mysqli_query($koneksi, $query);
              if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_array($sql)) {
              ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar']; ?></td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A1">
                        <option value="1" <?php echo $row['A1'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A1'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A1'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A1'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>

                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A2">
                        <option value="1" <?php echo $row['A2'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A2'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A2'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A2'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A3">
                        <option value="1" <?php echo $row['A3'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A3'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A3'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A3'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A4">
                        <option value="1" <?php echo $row['A4'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A4'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A4'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A4'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
          <button class="btn btn-success" type="submit" id="Simpan_kecerdasan" name="Simpan_kecerdasan">Simpan</button>

        </div>
        <div id="spninactive_wawancara" style="display:none;">

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Pelamar</th>
                <th>A5 - Komitmen</th>
                <th>A6 - Fokus</th>
                <th>A7 - Terukur</th>
                <th>A8 - Kerja Sama</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A5,pm.A6,pm.A7,pm.A8 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
              //$query ="select * from master_pelamar";
              $sql = mysqli_query($koneksi, $query);
              if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_array($sql)) {
              ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar']; ?></td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A5">
                        <option value="1" <?php echo $row['A5'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A5'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A5'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A5'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>

                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A6">
                        <option value="1" <?php echo $row['A6'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A6'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A6'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A6'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A7">
                        <option value="1" <?php echo $row['A7'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A7'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A7'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A7'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A8">
                        <option value="1" <?php echo $row['A8'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A8'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A8'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A8'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>

          <button class="btn btn-success" type="submit" id="Simpan_wawancara" name="Simpan_wawancara">Simpan</button>
        </div>
        <div id="spninactive_sikapkerja" style="display:none;">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Pelamar</th>
                <th>A9 - Jujur</th>
                <th>A10 - Teliti dan Bertanggung Jawab</th>
                <th>A11 - Disiplin</th>
                <th>A12 - Pandai Berkomunikasi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A9,pm.A10,pm.A11,pm.A12 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10',sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
              //$query ="select * from master_pelamar";
              $sql = mysqli_query($koneksi, $query);
              if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_array($sql)) {
              ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar']; ?></td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A9">
                        <option value="1" <?php echo $row['A9'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A9'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A9'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A9'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>

                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A10">
                        <option value="1" <?php echo $row['A10'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A10'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A10'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A10'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A11">
                        <option value="1" <?php echo $row['A11'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A11'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A11'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A11'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar'] ?>_A12">
                        <option value="1" <?php echo $row['A12'] == 1 ? "selected=selected" : ""; ?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A12'] == 2 ? "selected=selected" : ""; ?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A12'] == 3 ? "selected=selected" : ""; ?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A12'] == 4 ? "selected=selected" : ""; ?>>4 - Sangat Baik</option>
                      </select>
                    </td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
          <button class="btn btn-success" type="submit" id="Simpan_sikapkerja" name="Simpan_sikapkerja">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>
<script src="js/jquery-1.12.4.min.js"></script>
<script>
  $(document).ready(function() {
    var ddlTxt = $("#aspek option:selected").val();
    $("#spninactive_" + ddlTxt).show();

    $("#aspek").on("change", function() {
      var ddlTxt = $("#aspek option:selected").val();
      $(".container div").hide();
      $("#spninactive_" + ddlTxt).show();
    });

  });
</script>