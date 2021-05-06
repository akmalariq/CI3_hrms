<div class="container">
    <div class="row mt-3">
        <?php if( $this->session->flashdata('flash') ) : ?>
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong> berhasil </strong><?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
            <?php foreach( $mahasiswa as $mhs ) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama'];?>
                    <a href="<?=base_url();?>mahasiswa/hapus/<?=$mhs['id']?>"
                    class="badge bg-danger float-end"
                    onclick="return confirm('yakin?');">Hapus</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>