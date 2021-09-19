<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,'https://pokeapi.co/api/v2/pokemon/?limit=898');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'PokemonApp (http://localhost, 1.0.0)');
        $results = json_decode(curl_exec($curl_handle), true);
        

        foreach($results['results'] as $row) {
            curl_setopt($curl_handle, CURLOPT_URL,$row['url']);

            $pokemon = curl_exec($curl_handle);
            $pokemon = json_decode($pokemon, true);

            Pokemon::firstOrCreate([
                'id' => $pokemon['id'],
                'name' => ucfirst($row['name']),
                'sprite' => "https://cdn.traction.one/pokedex/pokemon/{$pokemon['id']}.png",
                'weight' => $pokemon['weight'],
                'height' => $pokemon['height'],
                'description' => ''
            ]);
        }

        curl_close($curl_handle);
    }
}
