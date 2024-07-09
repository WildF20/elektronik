<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\MyClasses\Laptop;
use App\Models\MyClasses\Desktop;
use Illuminate\Support\Facades\Log;
use App\Models\MyClasses\Electronic;

class PrintProduct extends Command
{
    private $data;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:print-product {--type=laptop} {--serial=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $type   = ($this->option('type') ?? '');
        $serial = ($this->option('serial') ?? '');

        switch ($type) {
            case 'laptop':
                $this->data = new Laptop();
                
                break;
            
            case 'desktop':
                $this->data = new Desktop();
                break;
        }

        $content = $this->data->where('serial', $serial)->greeting();

        $this->info(json_encode($content));

        Log::info(json_encode($content));
    }
}
