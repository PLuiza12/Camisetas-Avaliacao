<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Camiseta;
use Illuminate\Database\Seeder;

class CamisetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0;$i < 10; $i++){
            Camiseta::factory()->create([
                'user_id' => User::all()->random()->id
            ]);
        }
    }
}
