<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RegenerateIdeHelperData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide-helper:regenerate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerate all the metadata needed for auto-completion.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        if (app()->environment(['production'])) {
            $this->warn('Command can only be called outside production environment!');

            return -1;
        }

        Artisan::call('ide-helper:eloquent');
        Artisan::call('ide-helper:generate -W');
        Artisan::call('ide-helper:meta');
        Artisan::call('ide-helper:models -M');

        $this->info('IDE Helper data regenerated!');

        return 0;
    }
}
