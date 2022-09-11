<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\daftar_keanggotaan_pokmas;
use App\Models\detail_anggota_pokmas;
use App\Models\ActivityLog;
use Auth;

class DaftarAnggota implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $dataKetua = daftar_keanggotaan_pokmas::create([
            'tahun'         => $row['tahun'],
            'no_nphd'       => $row['no_nphd'],
            'nama_ketua'    => $row['nama_ketua'],
            'nik_ketua'     => $row['nik_ketua'],
            'jabatan'       => $row['jabatan'],
            'nama_lembaga'  => $row['nama_lembaga'],
            'alamat_lembaga'   => $row['alamat_lembaga'],
            'kota_kab'    => $row['kota_kab'],
        ]);

        for ($i=1; $i <=10; $i++) 
        {
            $indexNikAnggota = "nik_anggota_".$i;
            $indexNamaAnggota = "nama_anggota_".$i;

            if ($row[$indexNikAnggota] != null) {
                $dataAnggota = detail_anggota_pokmas::create([
                    'id_daftar_keanggotaan_pokmas'  => $dataKetua->id,
                    'nik_anggota'       => $row[$indexNikAnggota] ?? null,
                    'nama_anggota'    => "-" ?? null,
                ]);
            }
        }

        return new ActivityLog([
            'description' => 'Upload file',
            'causer_id'   => Auth::user()->id,
        ]);
    }
}
