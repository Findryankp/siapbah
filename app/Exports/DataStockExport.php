<?php

namespace App\Exports;

use App\Models\DataStock;
use App\Models\MasterPlant;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataStockExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    use Exportable;

    public function kode_entitas($kode_entitas)
    {
        $this->kode_entitas = $kode_entitas;

        return $this;
    }

    public function posting_date($posting_date)
    {
        $this->posting_date = $posting_date;

        return $this;
    }

    public function query()
    {
        $kode_plant = MasterPlant::where('kode_entitas', $this->kode_entitas)->pluck('kode_plant');
        $data_stock = DataStock::query()->select(
            'batch_number',
            'kode_material',
            'value_stock',
            'kode_plant',
            'qty',
            'posting_date',
            'tanggal_ed',
            'ket_stock')
            ->where('posting_date', $this->posting_date)
            ->whereIn('kode_plant', $kode_plant);
        return $data_stock;
    }

    public function headings(): array
    {
        return [
            'batch_number',
            'kode_material',
            'value_stock',
            'kode_plant',
            'qty',
            'posting_date',
            'tanggal_ed',
            'ket_stock',
        ];
    }
}
