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
                <?= $this->session->flashdata('msg') ?>

                <a href="<?= base_url() ?>Admin/siswa/" class="btn btn-danger btn-sm">Kembali</a>
                <a href="<?= base_url() ?>Admin/sertifikat_cetak/<?= $row->id_siswa ?>" class="btn btn-secondary btn-sm">Cetak</a>
                <table style="margin-top: 20px;" class="table table-bordered">
                    <tr>
                        <td width="250px">Nama Siswa :</td>
                        <td> <?= $row->nama_siswa ?></td>
                    </tr>
                    <tr>
                        <td>Kelas :</td>
                        <td><?= $row->kelas ?></td>
                    </tr>
                    <tr>
                        <td>NISN :</td>
                        <td><?= $row->nisn ?></td>
                    </tr>

                    <tr>
                        <td>Kondisi MPLS :</td>
                        <td><?= $row->kondisi_mpls ?></td>
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
                    <?= form_open('Admin/siswa_edit_up') ?>
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama Siswa :</td>
                            <td>
                                <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
                                <input type="text" class="form-control" name="nama_siswa" value="<?= $row->nama_siswa ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td><input type="text" class="form-control" name="nisn" value="<?= $row->nisn ?>"></td>
                        </tr>

                        <tr>
                            <td>Kondisi MPLS</td>
                            <td>
                                <select name="kondisi_mpls" id="" class="form-control">
                                    <option value="<?= $row->kondisi_mpls ?>">Kondisi awal | <?= $row->kondisi_mpls ?></option>
                                    <option value="selesai">Selesai</option>
                                    <option value="belum selesai">Belum Selesai</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input style="display: block; margin-left: auto; margin-right: auto;" type="submit" value="simpan" class="btn btn-primary">
                    <?= form_close() ?>
                </div>
            </div>
        </div>


    <?php } ?>
</div>