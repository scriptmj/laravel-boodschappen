<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Grocery;
use Carbon\Carbon;

class GroceriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Creates three groceries to fill the database with dummy data
     * @return void
     */
    public function run()
    {
        DB::table('groceries')->insert([
            'created_at' => Carbon::now(),
            'name' => 'komkommer',
            'price' => 0.5,
            'amount' => 2,
        ]);
        DB::table('groceries')->insert([
            'created_at' => Carbon::now(),
            'name' => 'brood',
            'price' => 0.75,
            'amount' => 3,
        ]);
        DB::table('groceries')->insert([
            'created_at' => Carbon::now(),
            'name' => 'noten',
            'price' => 4.5,
            'amount' => 1,
        ]);
    }
}
