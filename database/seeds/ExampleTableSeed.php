<?php

use App\Example;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ExampleTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 50;
        for ($i = 1; $i < 50; $i++) {
            Example::create([
                'title' => Str::random(20),
                'description' => Str::random(200)
            ]);
        }
    }
}
