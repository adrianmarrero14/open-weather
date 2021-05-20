<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SaveCityWeather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:weather {city?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consult, Save and Update Weather';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $city = $this->argument('city');

        if (!$city) {
            $this->info("All cities updated");
        }

        if ($city == 'bogota') {
            $this->info("Bogotá actualizado correctamente");
        }



        return 0;
    }
}
