<div class="container mt-3" >

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
            
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
            </button>

            <h3 class="mt-2">Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs ): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $mhs['nama']; ?>
                    
                    <div class="options">
                        <!-- Tombol Hapus -->
                    <a href="<?= BASEURL; ?>/Mahasiswa/hapus/<?= $mhs['id']; ?>
                    
                    " class ="badge bg-danger rounded-pill" onclick="return confirm('Konfirmasi Penghapusan Data')">Hapus</a>

                    <!-- Tombol Detail -->
                    <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>
                    
                    " class ="badge bg-primary rounded-pill">detail</a>
                    </div>
                </li>
            <?php endforeach; ?>
            </ul>
                
        </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Insert Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        
        <form action="<?= BASEURL;?>/Mahasiswa/tambah
        " method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>

        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" name="nim" id="nim" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                <option selected>Pilih Jurusan</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
                <option value="Ilmu Perikanan">Ilmu Perikanan</option>
                <option value="Teknik Pertambangan">Teknik Pertambangan</option>
            </select>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>
</div>
</div>