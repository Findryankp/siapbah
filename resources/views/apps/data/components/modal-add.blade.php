<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ketua</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="{{ url('data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="number" name="tahun" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. NPHD</label>
                        <input type="text" name="no_nphd" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lembaga</label>
                        <input type="text" name="nama_lembaga" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ketua</label>
                        <input type="text" name="nama_ketua" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIK Ketua
                            <i class="text-danger text_peringatan" style="display: none;">(NIK harus 16 digit)</i>
                        </label>
                        <input type="text" name="nik_ketua" class="form-control input_ktp" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Lembaga</label>
                        <input type="text" name="alamat_lembaga" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kota/Kab</label>
                        <select class="form-control" name="kota_kab">
                            @foreach($kota_kab as $k)
                                <option value="{{$k->nama_kota_kab}}">{{$k->nama_kota_kab}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="add-btn">Tambahkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal-->
