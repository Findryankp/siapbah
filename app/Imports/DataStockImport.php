<?php

namespace App\Imports;

use App\Models\DataStockTemp;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataStockImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //concat id_pasif
        if(isset($row['kode_plant']) && isset($row['kode_material'])){
            $id_pasif = $row['kode_plant'].$row['kode_material'];
        }else{
            $id_pasif = null;
        }
        if($id_pasif != null){
            return new DataStockTemp([
                'posting_date'   => date('Y-m-d'),
                'kode_plant'     => $row['kode_plant'] ?? null,
                'kode_material'  => $row['kode_material'] ?? null,
                'batch_number'   => $row['batch_number'] ?? null,
                'value_stock'    => $row['value_stock'] ?? null,
                'tanggal_ed'     => $row['tanggal_ed'],
                'ket_stock'      => null,
                'qty'            => $row['qty'] ?? null,
                'id_pasif'       => $id_pasif,
                'uploaded_by'    => Auth::user()->id,
            ]);
        }

    }
}
