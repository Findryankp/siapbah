<?php

namespace App\Imports;

use App\Models\Activity;
use App\Models\ActivitySub;
use Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ActivityImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $id = Session::get('id_row');

        $id_activity = Session::get('id_activity');

        $detail = [
                'activity' => $row[7],
                'nama_produk' => $row[9],
                'parameter' => $row[10],
                'group'         => $row[1],
                'kategori'      => $row[2],
                'subkategori'   => $row[3],
                'tipe'          => $row[4],
                'subtipe'       => $row[5],
                'produk'        => $row[6],
                'created_by'    => $row[12],
            ];

        $cek = Activity::find($row[0]);
        if (empty($cek)) {
            $activity = Activity::create($detail);
            $id_activity = $activity->id;
        }

        session()->put([
            'id_row' => $row[0],
            'id_activity' => $id_activity,
        ]);

        return new ActivitySub([
            'id_activity'   => Session::get('id_activity'),
            'subactivity'   => $row[8],
            'pic'           => $row[12],
            'startdate'    => null,
            'duedate'      => null,
            'created_by'    => $row[12],
            'support_needed' => $row[14],
        ]);
    }
}
