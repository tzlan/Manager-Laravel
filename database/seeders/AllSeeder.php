<?php

namespace Database\Seeders;

use Cassandra\Bigint;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entreprises')->insert([
            'id' => Bigint::random(10),
            'name' => Str::random(10),
            'no_rue' => Str::random(5),
            'code_postal' => Str::random(5),
        ]);
    }
}
