<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $p = null;
        for($i = 1; $i < 3; $i++){
            DB::table('items')->insert([
                'name' => 'item-'.$i,
                'parent_id' => $p
            ]);
        }

        for($i = 1; $i < 3; $i++){
            DB::table('items')->insert([
                'name' => 'item-1.3.'.$i,
                'parent_id' => 7
            ]);
        }

        for($i = 1; $i < 5; $i++){
            DB::table('items')->insert([
                'name' => 'item-1.'.$i,
                'parent_id' => 1
            ]);
        }

        for($i = 1; $i < 4; $i++){
            DB::table('items')->insert([
                'name' => 'item-2.'.$i,
                'parent_id' => 2
            ]);
        }

        for($i = 1; $i < 4; $i++){
            DB::table('items')->insert([
                'name' => 'item-2.2.'.$i,
                'parent_id' => 10
            ]);
        }

        for($i = 1; $i < 3; $i++){
            DB::table('items')->insert([
                'name' => 'item-2.2.2.'.$i,
                'parent_id' => 13
            ]);
        }

        for($i = 1; $i < 2; $i++){
            DB::table('items')->insert([
                'name' => 'item-2.2.2.1.'.$i,
                'parent_id' => 15
            ]);
        }

    }
}
