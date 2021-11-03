<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i> Arsip Surat</li>&nbsp;>&nbsp;
                    <li class="active">Unggah</li>
                </ol>
            </section>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan. <br>
                    Catatan:
                </p>
                <ul>
                    <li>Gunakan file berformat PDF</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <?php echo form_open_multipart('Home/TambahSurat'); ?>
                <div class="form-group">
                    <label>Nomor Surat</label>
                    <input class="form-control" name="nomor" required>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori" required>
                        <option></option>
                        <option value="Undangan">Undangan</option>
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Nota Dinas">Nota Dinas</option>
                        <option value="Pemberitahuan">Pemberitahuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" name="judul" required>
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input class="form-control" name="file" type="file" required accept="application/pdf,application/vnd.ms-excel">
                </div>
                <br>
                <div class="row">
                    <button type="button" class="btn btn-warning" onclick="window.location.href='<?= base_url(); ?>'"><i class="fa fa-reply"></i> Kembali</button>
                    <button type="submit" class="btn btn-primary" style="margin-left: 20px;">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>