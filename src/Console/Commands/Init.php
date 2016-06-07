<?php

namespace Moon\Artisan\Console\Commands;

use Illuminate\Console\Command;
use Moon\Artisan\Artisan;

class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artisan:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates config file';

    public function handle()
    {
        $runningFrom = getcwd();
        $configFilePath = Artisan::getConfigFilePath();
        $configFolder = $runningFrom.'/config';

        if (!file_exists($configFolder)) {
            mkdir($configFolder, 0777, true);
        }

        $artisan = $runningFrom.'/artisan';

        if (!file_exists($configFilePath)) {
            copy(__DIR__.'/../../config.php', $configFilePath);
            $this->info("Created {$configFilePath}");
        } else {
            $this->comment("{$configFilePath} already exists.");
        }

        if (!file_exists($artisan)) {
            copy(__DIR__.'/../../../artisan', $artisan);
        }
    }
}
