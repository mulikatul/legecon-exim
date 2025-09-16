<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use DB;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('numbers')->truncate();
        DB::table('numbers')->insert([
            [
                'name' => 'Happy Clients',
                'slug' => 'happy_clients', // Avoid using "&" in slugs
                'number' => '0',
                'created_at' => Carbon::now(), 
            ],
            [
                'name' => 'Projects',
                'slug' => 'project',
                'number' => '0',
                'created_at' => Carbon::now(), 
            ],
            [
                'name' => 'Hard Workers',
                'slug' => 'hard_worker',
                'number' => '0',
                'created_at' => Carbon::now(), 
            ],
        ]);
    }
}
