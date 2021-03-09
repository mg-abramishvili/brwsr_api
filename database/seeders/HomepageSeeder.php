<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HomepageSeeder extends Seeder
{
    public function run()
    {
        DB::table('homepages')->insert([
            'id' => '1',
            'url' => 'https://yandex.ru',
        ]);
    }
}
