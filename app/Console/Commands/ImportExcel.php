<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\DataStockImport;

class ImportExcel extends Command
{
    protected $signature = 'import:excel';

    protected $description = 'Laravel Excel importer';

    public function handle()
    {
        $this->output->title('Starting import');
        (new DataStockImport)->withOutput($this->output)->import(public_path('KFTD2.xlsx'));
        $this->output->success('Import successful');
    }
}
