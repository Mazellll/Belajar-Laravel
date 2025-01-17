<?php

include "connect.php";

$Username = $_POST["Username"];
$Pesan = $_POST["Pesan"];
$gambar   = $_FILES['gambar'] ['name'];
$nama_gbr = $_FILES['gambar']['tmp_name'];
$formatgbr= array ('png','jpg','jpeg');
$ukuran   =  $_FILES['gambar']['size'];

if($_FILES['gambar']) {
    $x = explode ('.', $gambar);
    $ekstensi = strtolower(end($x));
    if(in_array($ekstensi,$formatgbr) === TRUE ) {
        if($ukuran < 10000000) {
            move_uploaded_file($nama_gbr, 'Project Bootstrap/gambar'.$gambar);
        }}}
$query = mysqli_query($connect, "INSERT INTO data (Username, Pesan) VALUES ('$Username', '$Pesan')");
if ($query) {
    // Redirect ke Message.php dengan status_add=success
    header("Location: Message.php?status_add=success");
} else {
    // Redirect ke Message.php dengan status_add=error
    header("Location: Message.php?status_add=error");
}
exit(); // Hentikan skrip agar header berfungsi
?>