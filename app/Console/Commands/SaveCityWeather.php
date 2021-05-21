<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Http;
use App\Models\City;

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

        if (!$city || $city == '*') {
            $citiesDB = City::get();

            foreach ($citiesDB as $cityDB) {

                // API Request
                $response = Http::get("api.openweathermap.org/data/2.5/weather", [
                    'q' => $cityDB->name,
                    'appid' => AuthServiceProvider::KEY
                ]);
                $data = $response->json();

                // Update DB content
                $cityDB->country = $data['sys']['country'];
                $cityDB->weather = $data['weather'][0]['main'];
                $cityDB->weather_description = $data['weather'][0]['description'];
                $cityDB->save();
            }
            $this->info("Clima de ciudades actualizado correctamente");
        } else {
            $this->error("El parametro ingresado es incorrecto");
        }

        return 0;
    }
}
