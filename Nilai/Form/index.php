<?php
include '../koneksi.php';
$sql = "SELECT * FROM siswa ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $Dasis[] = $data;
}
?>
<?php
include '../aset/header.php';
?>

<div class="card">
<div class="card-header">
        <h2 class="card-title"><i class="fas fa-book"></i> Data Siswa</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">No</th>
                    <th scope="row">Nama</th>
                    <th scope="row">NIS</th>
                    <th scope="row">Jurusan</th>
                    <th scope="row">Kelas</th>
                    <th scope="row">Alamat</th>
                    <th scope="row">Nilai Web</th>
                    <th scope="row">Nilai PBO</th>
                    <th scope="row">Nilai Basdat</th>
                    <th scope="row">Nilai Desain</th>
                    <th scope="row">Nilai Progdas</th>
                    <th scope="row">Rata-Rata</th>
                    <th scope="row">Predikat</th>
                    <th scope="row">Keterangan</th>
                    <th scope="row">Aksi</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach ($Dasis as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nama'] ?></th>
            <td><?= $p['NIS'] ?></th>
            <td><?= $p['id_jurusan'] ?></th>
            <td><?= $p['id_kelas'] ?></th>
            <td><?= $p['alamat'] ?></th>
            <td><?= $p['nilai_Web'] ?></th>
            <td><?= $p['nilai_PBO'] ?></th>
            <td><?= $p['nilai_Basdat'] ?></th>
            <td><?= $p['nilai_Desain'] ?></th>
            <td><?= $p['nilai_Progdas'] ?></th>
            <td><?= $p['nilai_rata'] ?></th>
            <td><?= $p["predikat"] ?></th>
            <td><?= $p["keterangan"] ?></th>
            <td>
                <a href="tambah.php" class="badge badge-primary">Tambah</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
        
        </table>
    </div>
</div>
</div>
<?php
include '../aset/footer.php';
?>