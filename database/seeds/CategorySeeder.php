<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Hat'
        ]);

        DB::table('categories')->insert([
            'name' => 'Clothes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jacket'
        ]);

        DB::table('categories')->insert([
            'name' => 'Pants'
        ]);

        DB::table('categories')->insert([
            'name' => 'Shoes'
        ]);
    }
}
