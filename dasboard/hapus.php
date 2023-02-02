<!-- masyarakat -->

<?php 
include "config.php";
$conn = mysqli_connect("localhost", "root", "", "gembong");



$id = $_GET['id'];

$sql = "DELETE FROM masyarakat WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: masyarakat.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


<!-- pegawai -->

<?php 
include "config.php";



$id = $_GET['id'];

$sql = "DELETE FROM pegawai WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: anggota_pemerintah.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!-- pertanahan -->


<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM pertanahan WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: pertanahan.php");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


<!-- berita  -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM berita WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: berita");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


<!-- data  -->

<?php 
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM surat WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: dasboard");
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

