<?php
include_once 'atas.php';
include_once 'libfungsi.php';

$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];

$ns1 = ['nama' => 'Evry Nazyli Ciptanto', 'matkul' => 'Dasar-Dasar Pemrograman', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
$ns2 = ['nama' => 'Farid Muhari', 'matkul' => 'Basis Data', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['nama' => 'Diny Brilianti', 'matkul' => 'Pemrograman Web', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['nama' => 'Joko Supriyanto', 'matkul' => 'Basis Data', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns5 = ['nama' => $nama_siswa, 'matkul' => $matkul, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];

?>
<div class="container-fluid">
    <h1 class="mt-4">Aplikasi Sistem Penilaian</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Nila</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Data Nilai Mahasiswa
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Datatable
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Nilai Tugas</th>
                            <th>Nilai Akhir</th>
                            <th>Keterangan</th>
                            <th>Grade</th>
                            <th>Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($ar_nilai as $ns) {
                        ?>
                            <tr>

                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $ns['nama'] ?></td>
                                <td><?= $ns['matkul'] ?></td>
                                <td><?= $ns['uts'] ?></td>
                                <td><?= $ns['uas'] ?></td>
                                <td><?= $ns['tugas'] ?></td>
                                <?php
                                $nilai = (30 * $ns['uts'] / 100) + (35 * $ns['uas'] / 100) + (35 * $ns['tugas'] / 100);
                                ?>
                                <td><?= $nilai; ?></td>
                                <td><?= keterangan($nilai) ?></td>
                                <td><?= gradeNilai($nilai) ?></td>
                                <td><?= predikat(gradeNilai($nilai)) ?></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'bawah.php';
?>