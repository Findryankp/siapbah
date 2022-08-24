<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\MasterEntitas;
use App\Models\User;
use App\Models\daftar_keanggotaan_pokmas;
use App\Models\detail_anggota_pokmas;
use App\Models\KotaKab;

class DaftarKeanggotaanPokmasController extends Controller
{
    public function index()
    {
        $kota_kab = KotaKab::all();
        $daftar_keanggotaan_pokmas = daftar_keanggotaan_pokmas::orderBy('id', 'DESC')->get();
        return view('apps.data.index', compact('daftar_keanggotaan_pokmas','kota_kab'));
    }

    public function store(Request $request)
    {
        $cekKetua = daftar_keanggotaan_pokmas::where("nik_ketua",$request->nik_ketua)
        ->orderBy('tahun','DESC')
        ->first();

        $cekAnggota = detail_anggota_pokmas::where("nik_anggota",$request->nik_ketua)->first();
        
        $cekNphd = daftar_keanggotaan_pokmas::where("no_nphd",$request->no_nphd)
        ->where("tahun",$request->tahun)
        ->first();

        if (!empty($cekKetua)) 
        {
            $selisihTahun = $request->tahun - $cekKetua->tahun;
            if (!($selisihTahun > 3)) {
                Alert::error('Gagal', 'NIK terdaftar sebagai KETUA di '.$cekKetua->nama_lembaga);
                return back();
            }
        }
        elseif(!empty($cekAnggota))
        {
            $cekKetua = daftar_keanggotaan_pokmas::where("id",$cekAnggota->id_daftar_keanggotaan_pokmas)->first();
            Alert::error('Gagal', 'NIK terdaftar sebagai ANGGOTA di '.$cekKetua->nama_lembaga);
            return back();
        }
        elseif(!empty($cekNphd)){
            Alert::error('Gagal', 'No. NPHD tahun '.$request->tahun.' telah terdaftar di '.$cekNphd->nama_lembaga);
            return back();
        }
        
        daftar_keanggotaan_pokmas::create([
            "tahun"=> $request->tahun,
            "no_nphd"=> $request->no_nphd,
            "nama_lembaga"=> $request->nama_lembaga,
            "nama_ketua"=> $request->nama_ketua,
            "nik_ketua"=> $request->nik_ketua,
            "jabatan"=> $request->jabatan,
            "alamat_lembaga"=> $request->alamat_lembaga,
            "kota_kab"=> $request->kota_kab,
        ]);

        activity()->log('Menambahkan daftar keanggotaan pokmas');
        Alert::success('Berhasil', 'Data berhasil ditambah');
        return back();
    }

    public function storeAnggota(Request $request)
    {
        $cekKetua = daftar_keanggotaan_pokmas::where("nik_ketua",$request->nik_anggota)->first();
        $cekAnggota = detail_anggota_pokmas::where("nik_anggota",$request->nik_anggota)->first();
        
        if (!empty($cekKetua)) 
        {
            Alert::error('Gagal', 'NIK terdaftar sebagai ketua di '.$cekKetua->nama_lembaga);
            return back();
        }
        elseif(!empty($cekAnggota))
        {
            $cekKetua = daftar_keanggotaan_pokmas::where("id",$cekAnggota->id_daftar_keanggotaan_pokmas)->first();
            Alert::error('Gagal', 'NIK terdaftar sebagai anggota di '.$cekKetua->nama_lembaga);
            return back();
        }
        else
        {
            detail_anggota_pokmas::create([
                "id_daftar_keanggotaan_pokmas"=> $request->id_daftar_keanggotaan_pokmas,
                "nama_anggota"=> $request->nama_anggota,
                "nik_anggota"=> $request->nik_anggota,
            ]);

            activity()->log('Menambahkan detail keanggotaan pokmas');
            Alert::success('Berhasil', 'Data berhasil ditambah');
            return back();
        }
    }

    public function detailAnggota($id)
    {
        $kota_kab = KotaKab::all();
        $ketua = daftar_keanggotaan_pokmas::where("id",$id)->get();
        $anggota = detail_anggota_pokmas::where("id_daftar_keanggotaan_pokmas",$id)->get();
        return view('apps.data.detail-anggota', compact('ketua','anggota','kota_kab'));
    }
}
