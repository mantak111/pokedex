<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CachePokemonImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pokemon:imgcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pokemon Image Caching';

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
        for($i = 1; $i <= 898; $i++) {
            Storage::put("pokemon/{$i}.png",
                file_get_contents("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$i}.png")
            );
        }

        return 0;
    }
}
