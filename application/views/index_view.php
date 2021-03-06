<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

&nbsp;
<!-- <div class="marquee">
    <p style="width:100%;">
        <marquee scrollamount="5">
            <h6 style=" color:MediumSeaGreen; font-family:timesnewrohman;">لسَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللّهِ وَبَرَكَاتُهُ
                <br>
                <i>
                    <b>&emsp;&nbsp;"Selamat Datang"</b>
                </i>
            </h6>
        </marquee>
    </p>
</div> -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="margin-top: 20px; color:Orange; font-family:timesnewrohman;">Arsip Surat</h1>
            </div>
        </div>
        <?php if ($this->session->userdata('msg')) { ?>
            <div class="alert alert-success" role="alert"><?= $this->session->userdata('msg') ?></div>
        <?php } ?>

        <?php if ($this->session->userdata('delete')) { ?>
            <div class="alert alert-danger" role="alert"><?= $this->session->userdata('delete') ?></div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br>
                    Klik "Lihat" pada kolom aksi untuk menampilkan surat.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Cari Surat</b>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-4" style="width: 500px;">
                                <form action="<?= base_url('/Home/cari/') ?>" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="search..." style="left: 15px;" value="<?php if (!empty($keyword)) {
                                                                                                                                                        echo $keyword;
                                                                                                                                                    } ?>">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit" style="margin-left: 25px;"> Cari</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nomor Surat</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Judul</th>
                                        <th class="text-center">Waktu Pengarsipan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($surat as $s) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $s->nomor ?></td>
                                            <td><?= $s->kategori ?></td>
                                            <td class="text-center"><?= $s->judul ?></td>
                                            <td class="text-center"><?= $s->waktu ?></td>
                                            <td class="text-center">
                                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $s->id_arsip ?>"><i class="fa fa-trash"></i> Hapus</button>
                                                <button type="submit" class="btn btn-warning btn-sm" onclick="window.location.href='<?= base_url(); ?>/Home/UnduhSurat/<?= $s->id_arsip ?>'"><i class="fa fa-download"></i> Unduh</button>
                                                <button type="submit" class="btn btn-info btn-sm" onclick="window.location.href='<?= base_url(); ?>/Home/lihat/<?= $s->id_arsip ?>'"><i class="fa fa-info-circle"></i> Lihat >></button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation">
                                <?php
                                echo $this->pagination->create_links();
                                ?>
                            </nav>
                        </div>
                        <br>
                        <a href="<?= base_url(); ?>Home/arsip" class="btn btn-primary"><i class="fa fa-archive"></i> Arsipkan Surat</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <?php foreach ($surat as $s) { ?>
            <div class="modal fade" id="hapus<?= $s->id_arsip ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><b>Hapus Surat !!!</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4><?= $s->judul ?></h4>
                            <p>
                                Apakah Anda yakin ingin menghapus arsip surat ini?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-danger" onclick="window.location.href='<?= base_url(); ?>/Home/hapusSurat/<?= $s->id_arsip ?>'">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>