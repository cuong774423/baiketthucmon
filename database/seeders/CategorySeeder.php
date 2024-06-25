<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Bánh Mỳ Huynh Hoa'],
            ['name' => 'Bánh Bao Đặc Biệt'],
            ['name' => 'Đồ Nguội'],
            ['name' => 'Đồ Ăn Vặt'],
        ]);
    }
}
