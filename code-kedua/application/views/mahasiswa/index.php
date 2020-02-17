
<div class="container">
<?php if($this->session->flashdata('flash-data') ): ?>
<div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa<strong> berhasil </strong> <?= $this->session->flashdata ('flash-data');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data mahasiswa" name="keyword">
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Mahasiswa</h2>
            <?php if(empty($mahasiswa)):?>
            <div class="alert alert-danger" role="alert">
                Data Mahasiswa tidak ditemukan
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

