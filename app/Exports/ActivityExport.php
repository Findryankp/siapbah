<?php

namespace App\Exports;

use App\Http\Controllers\ActivityQueryController;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ActivityExport implements FromView, ShouldAutoSize
{
    public function __construct()
    {
        $this->query = new ActivityQueryController;
    }

    public function view(): View
    {
        $data = $this->query->rekap();
        return view('apps.dashboard.activity.components.export-data-rekap', [
            'data' => $data
        ]);
    }
}
