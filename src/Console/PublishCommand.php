<?php

namespace Laravel\Nova\Console;

use Laravel\Nova\Nova;
use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nova:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all of the Nova resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'nova-config',
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'nova-assets',
            '--force' => true,
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'nova-lang',
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'nova-views',
        ]);
    }
}