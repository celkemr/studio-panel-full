<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Sample Lesson',
                'start_at' => Carbon::now()->addDay(),
                'end_at' => Carbon::now()->addDay()->addHour(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
