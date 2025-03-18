<?php  
include_once("koneksi.php");

// Pastikan ID dikirim dan tidak kosong
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];

    // Query update dengan ID yang disanitasi
    $query = "UPDATE tb_buku SET 
              judul_buku='$judul', 
              pengarang='$pengarang', 
              tahun_terbit='$tahun', 
              kategori='$kategori' 
              WHERE id_buku='$id'";

    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        header('location:index.php');
    } else {
        echo "Update data gagal: " . mysqli_error($conn);
    }
} else {
    echo "ID buku tidak ditemukan!";
}
?>
