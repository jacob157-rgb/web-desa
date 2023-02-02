<?php 
include "config.php";
$id = $_GET["id"];
$datas = mysqli_query($conn, "SELECT * FROM masyarakat WHERE id='$id'");
$data = mysqli_fetch_array($datas);

if ( isset($_POST['edit']))
 {
    $kk = htmlspecialchars($_POST['kk']);
    $rw = htmlspecialchars($_POST['rw']);
    $rt = htmlspecialchars($_POST['rt']);
    $nik = htmlspecialchars($_POST['nik']);
    $nama = htmlspecialchars($_POST['nama']);
    $lahir = htmlspecialchars($_POST['lahir']);
    $tgl = htmlspecialchars($_POST['tgl']);
    $jkl = htmlspecialchars($_POST['jkl']);
    $agama = htmlspecialchars($_POST['agama']);
    $setatus = htmlspecialchars($_POST['setatus']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $hubkel = htmlspecialchars($_POST['hubkel']);

    $sql = "UPDATE masyarakat SET kk = '$kk', rw = '$rw', rt = '$rt', nik = '$nik', nama = '$nama', lahir = '$lahir', tgl = '$tgl', jkl = '$jkl', agama = '$agama', setatus = '$setatus', telepon = '$telepon', hubkel = '$hubkel' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: masyarakat.php");
    } else {
        echo "Error kohh  " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA MASYARAKAT
            </div>
            <div class="card-body">

              <form action="" method="POST">
                <div class="form-group">
                  <label for="kk">No KK</label>
                  <input type="text" name="kk" placeholder="Masukkan nomer kk" class="form-control"  id="kk" value="<?=$data["kk"]?>">
                </div>

                <div class="form-group">
                  <label for="rw">RW</label>
                  <input type="text" name="rw" placeholder="Masukkan rw Siswa" class="form-control"  id="rw" value="<?=$data["rw"]?>">
                </div>
                <div class="form-group">
                  <label for="rt">RT</label>
                  <input type="text" name="rt" placeholder="Masukkan rt Siswa" class="form-control" id="rt" value="<?=$data["rt"]?>">
                </div>
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" name="nik" placeholder="Masukkan NIK xxxxxxxxxxxx" class="form-control" id="nik" value="<?=$data["nik"]?>">
                </div>
                <div class="form-group">
                  <label for="nama">NAMA</label>
                  <input type="text" name="nama" placeholder="Masukkan nama " class="form-control" id="nama" value="<?=$data["nama"]?>">
                </div>
                <div class="form-group">
                  <label for="lahir">TEMPAT LAHIR</label>
                  <input type="text" name="lahir" placeholder="example : tegal atau kabupaten" class="form-control" id="lahir" value="<?=$data["lahir"]?>">
                </div>
                <div class="form-group">
                  <label for="tgl">TANGGAL LAHIR</label>
                  <input type="date" name="tgl" placeholder="Masukkan tanggal lahir" class="form-control" id="tgl" value="<?=$data["tgl"]?>">
                </div>
                <div class="form-group">
                  <label for="jkl">JENIS KELAMIN</label>
                  <input type="text" name="jkl" placeholder="Masukkan jenis kelamin" class="form-control" id="jkl" value="<?=$data["jkl"]?>">
                </div>
                <div class="form-group">
                  <label for="agama">AGAMA</label>
                  <input type="text" name="agama" placeholder="Masukkan agama example : islam" class="form-control" id="agama" value="<?=$data["agama"]?>">
                </div>
                <div class="form-group">
                  <label for="setatus">STATUS</label>
                  <input type="text" name="setatus" placeholder="example : kawin/belum kawin" class="form-control" id="setatus" value="<?=$data["setatus"]?>">
                </div>
                <div class="form-group">
                  <label for="telepon">CONTACT</label>
                  <input type="text" name="telepon" placeholder="telepon / email " class="form-control" id="telepon" value="<?=$data["telepon"]?>">
                </div>
                <div class="form-group">
                  <label for="hubkel">HUBUNGAN KELUARGA</label>
                  <input type="text" name="hubkel" placeholder="example : kepala keluarga" class="form-control" id="hubkel" value="<?=$data["hubkel"]?>">
                </div>

               
                
                <a href="masyarakat.php"><button type="submit" name="edit" id="button" class="btn btn-success">UBAH</button></a>
                <button type="reset" class="btn btn-warning">RESET</button>
                <button type="button" class="btn btn-info"> <a style="text-decoration: none; color: white; font-size: 15px" href="masyarakat.php">BACK</a></button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>





