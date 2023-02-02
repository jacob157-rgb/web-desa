<?php
include "config.php";
error_reporting(0);
$cari = $_POST['input'];
if ($cari != '') {
    $surat = mysqli_query($conn, "SELECT * FROM surat WHERE nama LIKE '%".$cari."%' or ttgl LIKE '%".$cari."%'");
    $ada = "hasil pencarian : ";
} else {
    $surat = mysqli_query($conn, "SELECT * FROM surat ORDER BY id DESC");
}
$cout = mysqli_num_rows($surat);
$urut = 1;
$tgl = date('d/m/y');
$tgl2 = date('d M Y');

while($st = mysqli_fetch_array($surat)) {

?>
<link rel="stylesheet" href="style.css">
<style>
    button {
        margin: 50px 50px 50px 50px;
    }
    @media print {
    button{
        display: none;
    }
}
</style>
<body>
    <a style="" href="dasboard"><button style="width: 100px; height: 30px;  background-color: red; ">&larr; Go Back !!</button></a>
<div class="surat">
    <div class="container">
        <div class="nav">
            <div class="logo">
                <img src="assets/logo.png" alt="logo" class="" width="120">
            </div>
            <div class="title">
                <h2 style="font-size: 30px;">PEMERINTAH KABUPATEN TEGAL <br> KECAMATAN SURADADI <br> DESA GEMBONGDADI</h2>
                <p style="font-size: 25px;">Alamat : Jl. Lodadi No. 04 Desa Gembongdadi Kode Pos 52182</p>
            </div>
        </div>
        <hr>
    </div>
    <div class="main">
        <h3 style="font-size: 25px; margin-top: 50px; text-transform: uppercase;"><?= $st ["keterangan"] ?></h3>
        <p style=" font-size: 25px; text-align: center; margin: 5px 0px 20px 0;">Nomor                :  <?= $st["id"]?> / <?=$tgl ?></p>
        <p style="font-size: 25px; margin: 40px 0 15px 0;"> &emsp;Yang bertanda tangan dibawah ini Kepala Desa Gembongdadi Kecamatan Suradadi Kabupaten Tegal, menerangkan dengan sesungguhnya bahwa :</p>
        <div class="isi">
        <pre style="font-family: 'Times New Roman', Times, serif; font-size: 23px; margin: 0 0 0 -30px;">
        NIK                             : <?= $st ["nik"] ?> <br>
        Nama                 &emsp; &emsp;: <?= $st ["nama"] ?> <br>
        Tempat/TGLL             : <?= $st ["ttgl"] ?> <br>
        Jenis Kelamin             : <?= $st ["kelamin"] ?> <br>
        Pekerjaan                    : <?= $st ["pekerjaan"] ?> <br>
        Status                          : <?= $st ["status"] ?> <br>
        Alamat Sekarang        : <?= $st ["alamat"] ?> <br>
        Keterangan                 : <?= $st ["keterangan"] ?> <br>
        </pre>
       
       
    </div>
       

        <p style="font-size: 25px; margin: 5px 0 0 0;" >&emsp;Demikian <span style="text-transform: uppercase; font-size: 20px;"> <?= $st ["keterangan"] ?></span> ini dibuat dengan sebenarnya dan untuk dapat dipergunakan sebagaimana mestinya.</p>
        <div class="ttd">
            <p>Gembongdadi, <?= $tgl2?></p>
            <p>An. Kepala Desa Gembongdadi</p>
            <p>Kasi Pelayanan</p>
            <br>
            <br>
            <br>
            <br>
            <b>SODIKIN</b>
        </div>
        <div class="fother">
            <p>Nomor &emsp;: ....................&emsp; Nomor : ....................  &emsp; Nomor : ....................</p>
            <p>Tanggal&emsp;: .................. &emsp; Tanggal : ..................  &emsp; Tanggal : .................. </p>
        </div>
    </div>
    <br>
    <br>
    <div class="mengetahui">
        <div class="satu">
           <p>Mengetahui :</p>
           <p>Camat Suradadi,</p>
           <br>
           <br>
           <br>
           <br>
           <p>-------------------------------</p>
        </div>
        <div class="dua">
            <p>Mengetahui : </p>
           <p>DANRAMIL 05 Suradadi,</p>
           <br>
           <br>
           <br>
           <br>
           <p>-------------------------------</p>
           <p></p>
        </div>
        <div class="tiga">
            <p>Mengetahui :</p>
            <p>KAPOLSEK Suradadi,</p>
            <br>
            <br>
            <br>
            <br>
            <p>-------------------------------</p>
        </div>
    </div>
</div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php }?>

