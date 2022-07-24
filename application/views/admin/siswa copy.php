    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Siswa MPLS</h1>
        <!-- <h4 class="h3 mb-4 text-gray-800">Sistem Download Sertifikat MPLS SMK Negeri 1 Kragilan 2022</h4> -->

        <table class="table table-bordered" id="tabel_js">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Kondisi MPLS</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($tampil_siswa as $row) {
            ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->nama_siswa ?></td>
                        <td><?= $row->kelas ?></td>
                        <td>
                            <?php if($row->kondisi_mpls == "Selesai"){ ?>
                                <button class="btn btn-success btn-xs">Selesai</button>
                            <?php }else{ ?>

                            <?php } ?>
                            <?= $row->kondisi_mpls ?></td>
                        <td>
                            <a href="<?= base_url() ?>Admin/siswa_edit">Edit</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>

    </div>
    <!-- /.container-fluid -->