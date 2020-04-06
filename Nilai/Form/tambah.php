<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card" style="background-color: #3282B8;">
                <div class="card-header text-white">
                    <h2>Tambah Data Siswa</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                            <input type="text" class="form-control" name="NIS" id="NIS" placeholder="Masukkan NIS siswa">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama siswa">
                        </div>
                         <div class="form-group">
                            <label for="id_jurusan">Jurusan</label><br>
                            <select name="id_jurusan" id="sel">
                                <option value="">Pilih Jurusan</option>
                                <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                                <option value="TEKNIK KOMPUTER JARINGAN">TEKNIK KOMPUTER JARINGAN</option>
                                <option value="MULTIMEDIA">MULTIMEDIA</option>
                            </select>
                            </div> 
                             <div class="form-group">
                            <label for="id_kelas">Kelas</label><br>
                            <select name="id_kelas" id="sel">
                                <option value="">Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat siswa">
                        </div>
                        <div class="form-group">
                            <label for="nilai_Web">Nilai Web</label>
                            <input type="text" class="form-control" name="nilai_Web" id="nilai_Web" placeholder="Masukkan nilai Web siswa">
                        </div>
                        <div class="form-group">
                            <label for="nilai_PBO">Nilai PBO</label>
                            <input type="text" class="form-control" name="nilai_PBO" id="nilai_PBO" placeholder="Masukkan nilai PBO siswa">
                        </div>
                        <div class="form-group">
                            <label for="nilai_Basdat">Nilai Basdat</label>
                            <input type="number" class="form-control" name="nilai_Basdat" id="nilai_Basdat" placeholder="Masukkan nilai Basdat siswa">
                            </div>
                        <div class="form-group">
                            <label for="nilai_PBO">Nilai Desain</label>
                            <input type="text" class="form-control" name="nilai_Desaim" id="nilai_Desain" placeholder="Masukkan nilai Desain siswa">
                        </div>
                        <div class="form-group">
                            <label for="nilai_PBO">Nilai Progdas</label>
                            <input type="text" class="form-control" name="nilai_Progdas" id="nilai_Progdas" placeholder="Masukkan nilai Progdas siswa">
                        </div>
                         
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../aset/footer.php';
?>