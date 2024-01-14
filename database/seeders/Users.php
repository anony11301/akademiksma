<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'User',
                'email' => 'user@example.com',
                'password' => bcrypt('user123'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Martupa Sitinjak, S.Th, M.A',
                'email' => 'martupa@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Irham Azhari Aulia, S.Kom',
                'email' => 'aulia@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'M. Fildza Buana Samudera, S.Pd.',
                'email' => 'fildza@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Yatafati Gulo, S.Th.',
                'email' => 'yatafati@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Tutumai Indah Lestari, S.Pd.',
                'email' => 'tutumai@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Abdul Mukhlis, A.Md. Kom',
                'email' => 'abdul@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Alya Ghina Luthfiyyah, S.Pd.',
                'email' => 'alyaghina@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Andhika Putra Saefudin, S.Pd',
                'email' => 'andhikaputra@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Andika Riyadi Jasril, S.Pd, M.Pd.T',
                'email' => 'andikariyadi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Annissa Nurul Aini, S. Pd',
                'email' => 'annissa@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Atika Rifda, S.Pd.',
                'email' => 'atika@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Azzahra Dhella Safitri, S. Pd',
                'email' => 'azzahra@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Depi Apriliyanti, S.Pd',
                'email' => 'depi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Dhia Rahid, S.Pd.',
                'email' => 'rahid@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Dina Febriana, S.Pd.',
                'email' => 'dina@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Dinda Karunia Putri, S.Pd.',
                'email' => 'dinda@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Dyah Intan Ardhini, S. Pd.',
                'email' => 'intan@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Eri Chandra Apriyadi',
                'email' => 'eri@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Erna Nurhenti, M.Pd.',
                'email' => 'erna@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Hutomo Abdi Nuswantoro, S. Pd',
                'email' => 'hutomo@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Ismail Zuhri, S. Pd',
                'email' => 'ismail@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Ivan Kevin Mula Karya, S.Pd.',
                'email' => 'kevin@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Jodi Septian, S.Or',
                'email' => 'jodi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Khoirunnisa, S. Pd',
                'email' => 'khoirunnisa@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Leny, S.Pd.',
                'email' => 'leny@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Lydia Yeckti Henawati, S.Pd',
                'email' => 'lydiayeckti@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'M. Reza Saputra, S.H.',
                'email' => 'msaputra@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Mahlora, S.S.',
                'email' => 'mahlora@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Marsaktian Y E Saip, SE.',
                'email' => 'marsaktian@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Mita Chadijahtul Aulia S, S.Pd',
                'email' => 'mita@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Muhammad Hilmi Fadhlurrahman, S.Pd',
                'email' => 'hilmi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Muhammad Luthfi Fauzan, S.Pd.',
                'email' => 'muhammadluthfi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Muhammad Reza Pahlevi, S.Kom',
                'email' => 'rezapahlevi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Muhammad Rezza Archery A, S.Pd',
                'email' => 'rezza@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Mutmainnah, S.Pd',
                'email' => 'mutmainnah@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Nurlaela Widyasari, S.Pd',
                'email' => 'nurlaelawidya@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Priharyanto, S. Pd.',
                'email' => 'pri@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Rafi Al Badri, S.Pd',
                'email' => 'rafi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Rayana Fitriawan, S.Pd.',
                'email' => 'rayana@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Reinhard Pratama, S.Pd',
                'email' => 'reinhard@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Resa Arya Putra, S.Kom.',
                'email' => 'resaarya@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Sahhila Zulfa Arifah, M.Pd.',
                'email' => 'sahhila@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Santi Kurniasih',
                'email' => 'kurniasih@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Sapta Nur Faiz, S.Pd.',
                'email' => 'saptanur@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Sarudin, S.Pd',
                'email' => 'sarudi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Selly Apriliana, S.Pd',
                'email' => 'selly@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Seni Litya Kassa, S. Pd',
                'email' => 'seni@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Silviana Eka Dewi Hapsari, S.Pd',
                'email' => 'silvianaeka@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Siyoin Sipahutar, S.Pd',
                'email' => 'siyoin@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Supriyanto, S.Pd., M.Hum',
                'email' => 'supriyanto@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Syahrul Ramadhan, S.Pd.',
                'email' => 'syahrul@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Tiwi Maylani, S.Pd',
                'email' => 'tiwi@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Veni Agave Hutajulu, S.Pd',
                'email' => 'veni@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Viktor Pandapotan, M.Pd.',
                'email' => 'viktor@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Wastoni, S. Pd. I.',
                'email' => 'wastoni@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Yance, S.Pd.',
                'email' => 'yance@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Yeni Lestari, S.Pd',
                'email' => 'yeni@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Yudiska Ramadanti, S.Pd',
                'email' => 'yudiska@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ],
            [
                'nama' => 'Zaidan Elvantio, S.Kom',
                'email' => 'zaidan@sma.prestasiprima.sch.id',
                'password' => bcrypt('ppsma'),
                'id_level' => '2'
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
