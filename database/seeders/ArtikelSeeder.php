<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'nama' => 'Katalog Apple',
            'designer' => 'Salwa',
            'keterangan' =>  'Untuk brand Apple'
        ],
        [
            'nama' => 'Billboards Apple',
            'designer' => 'Nazela',
            'keterangan' =>  'Untuk brand Apple'
        ]
    ];
        DB::table('artikel')->insert($data);
    }
}
