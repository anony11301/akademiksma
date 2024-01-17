<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Management extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Pembina Siswa',
                'email' => 'pembina@gmail.com',
                'password' => bcrypt('stafftas'),
                'id_level' => '1'
            ]
            // ,
            // [
            //     'nama' => 'Della Novianti, S.Pd',
            //     'email' => 'della@sma.prestasiprima.sch.id',
            //     'password' => bcrypt('stafftas'),
            //     'id_level' => '1'
            // ],
            // [
            //     'nama' => 'Aulia Rahmayani Taofik, S.Pd',
            //     'email' => 'auliar@sma.prestasiprima.sch.id',
            //     'password' => bcrypt('stafftas'),
            //     'id_level' => '1'
            // ],
            // [
            //     'nama' => 'Ayuk Kristanti, SE',
            //     'email' => 'ayuk@sma.prestasiprima.sch.id',
            //     'password' => bcrypt('stafftas'),
            //     'id_level' => '1'
            // ],
            // [
            //     'nama' => 'Heni Dwi Riyanti, S.Pd',
            //     'email' => 'heni@sma.prestasiprima.sch.id',
            //     'password' => bcrypt('stafftas'),
            //     'id_level' => '1'
            // ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
