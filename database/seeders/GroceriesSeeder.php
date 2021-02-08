<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Grocery;

class GroceriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groceries')->insert([
            'name' => 'komkommer',
            'price' => 0.5,
            'amount' => 2,
        ]);
        DB::table('groceries')->insert([
            'name' => 'brood',
            'price' => 0.75,
            'amount' => 3,
        ]);
        DB::table('groceries')->insert([
            'name' => 'noten',
            'price' => 4.5,
            'amount' => 1,
        ]);
    }
}
