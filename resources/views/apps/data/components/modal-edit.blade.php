<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Ketua</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="{{ url('data/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input id="editId" type="hidden" name="id">
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input id="editTahun" type="number" name="tahun" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. NPHD</label>
                        <input id="editNoNphd" type="text" name="no_nphd" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lembaga</label>
                        <input id="editNamaLembaga" type="text" name="nama_lembaga" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ketua</label>
                        <input id="editNamaKetua" type="text" name="nama_ketua" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIK Ketua
                            <i class="text-danger text_peringatan" style="display: none;">(NIK harus 16 digit)</i>
                        </label>
                        <input id="editNikKetua" type="text" name="nik_ketua" class="form-control input_ktp" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input id="editJabatan" type="text" name="jabatan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Lembaga</label>
                        <input id="editAlamatLembaga" type="text" name="alamat_lembaga" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kota/Kab</label>
                        <select id="editKotaKab" class="form-control" name="kota_kab">
                            @foreach($kota_kab as $k)
                                <option value="{{$k->nama_kota_kab}}">{{$k->nama_kota_kab}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning" id="add-btn">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal-->
