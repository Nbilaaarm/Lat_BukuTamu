<?php
include ('koneksi.php');

if (isset($_POST['submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $waktu = date('Y-m-d H:i:s');

    $sql = "INSERT INTO tamu (nama, email, komentar, data_created)
                VALUES ('$nama', '$email', '$komentar', '$waktu')";

    $query = $koneksi->query($sql); // eksekusi query insert

    // cek apakah query berhasil atau gagal
    if ($query) {
        echo "Berhasil menyimpan data tamu";
    } else {
        echo "Gagal menyimpan data tamu!";
    }
}
?>