<?php
include_once 'atas.php';
?>

<div class="container-fluid">
    <h1 class="mt-4">Aplikasi Sistem Penilaian</h1>
    <div class="card mb-4">
        <div class="card-body">
            Form Tambah Data Nilai
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            Form
        </div>
        <div class="card-body">
            <form action="datasiswa.php" method="POST">
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="name">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-8">
                        <input id="uts" name="uts" placeholder="Nilai Ujian Tengah Semester" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai Ujian Akhir Semester" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
                    <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas / Pratikum" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once 'bawah.php';
?>