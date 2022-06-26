<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Vards'=>'Andis',
            'Uzvards'=>'Lielakais',
            'Nummurs'=>'29134093',
            'Limenis'=>'3',
            'Bilde'=>'https://i.imgur.com/9zUxCiv.png',
            'E-pasts'=>'AndisLielakais@bigauto.lv',
            'Parole'=>Hash::make('esboss'),

        ]);
    }
}
