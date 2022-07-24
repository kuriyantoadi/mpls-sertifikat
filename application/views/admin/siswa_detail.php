<div class="container-fluid">

    <?php
    $no = 1;
    foreach ($tampil_siswa as $row) {
    ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Siswa</h6>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>: <?= $row->nama_siswa ?></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>: <?= $row->kelas ?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>: <?= $row->nisn ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>: <?= $row->nik ?></td>
                    </tr>
                   
                    <tr>
                        <td>Kondisi MPLS</td>
                        <td>: <?= $row->kondisi_mpls ?></td>
                    </tr>

                </table>
            </div>
        </div>


        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Siswa</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>: <input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td>: </td>
                        </tr>
                        <tr>
                            <td>Kondisi MPLS</td>
                            <td>: </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>


    <?php } ?>
</div>