<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <form action="" method='post'>
                    <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="John Doe">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" placeholder="123456789">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group mt-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name='jurusan'>

                        <!-- supaya dinamis bikin tabel jurusan di database -->
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Pangan">Teknik Pangan</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Planologi">Teknik Planologi</option>
                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        </select>

                        <button type='submit' name='tambah' class='btn btn-primary float-end mt-3'>Tambah Data</button>
                    </div>
                </form>
                
            </div>
            </div>

        </div>
    </div>
</div>