<div class="modal fade" id="addModalAnggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                id="close-modal"></button>
            </div>
            <form action="{{ url('data/store-anggota') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_daftar_keanggotaan_pokmas" id="id_daftar_keanggotaan_pokmas">
                    <label class="form-label">NIK Anggota
                        <i class="text-danger text_peringatan" style="display: none;">(NIK harus 16 digit)</i>
                    </label>

                    <br>

                    <input type="text" name="nik_anggota" class="form-control input_ktp" placeholder="" required>
                    <div class="mb-3">
                        <label class="form-label">Nama Anggota</label>
                        <input type="text" name="nama_anggota" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Tambahkan Anggota</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal-->
