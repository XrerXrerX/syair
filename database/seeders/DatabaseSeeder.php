<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Sts;
use App\Models\Pasaran;
use App\Models\Syair;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'kuku',
            'username' => 'kuku',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'kaka',
            'username' => 'kaka',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'keke',
            'username' => 'keke',
            'password' => bcrypt('password')
        ]);

        Sts::create([
            'sts' => 'ARTA4D',
        ]);

        Sts::create([
            'sts' => 'ARWANATOTO',
        ]);

        Sts::create([
            'sts' => 'DOYAN4D',
        ]);

        Sts::create([
            'sts' => 'DUOGAMING',
        ]);

        Sts::create([
            'sts' => 'NEON4D',
        ]);

        Sts::create([
            'sts' => 'NERO4D',
        ]);

        Sts::create([
            'sts' => 'ROMA4D',
        ]);

        Sts::create([
            'sts' => 'TOKE4D',
        ]);

        Sts::create([
            'sts' => 'JEEPTOTO',
        ]);
        Sts::create([
            'sts' => 'TSTOTO',
        ]);
        Sts::create([
            'sts' => 'ZARA4D',
        ]);


        Pasaran::create([
            'name' => 'cambodia',
            'slug' => 'cambodia',

        ]);
        Pasaran::create([
            'name' => 'sydney',
            'slug' => 'sydney',

        ]);
        Pasaran::create([
            'name' => 'china',
            'slug' => 'china',

        ]);
        Pasaran::create([
            'name' => 'toto macau',
            'slug' => 'totomacau',

        ]);
        Pasaran::create([
            'name' => 'singapore',
            'slug' => 'singapore',

        ]);
        Pasaran::create([
            'name' => 'pcso',
            'slug' => 'pcso',

        ]);
        Pasaran::create([
            'name' => 'taiwan',
            'slug' => 'taiwan',

        ]);

        Pasaran::create([
            'name' => 'hongkong',
            'slug' => 'hongkong',

        ]);

        Syair::create([
            'pasaran_id' => '1',
            'datepost' => '2023-03-30',
            'user_id' => '3',
            'sts_id' => '2',
            'sts_id' => '1',
            'nm_pasar' => 'cambodia',
            'slug' => 'syair-cambodia',
        ]);

        Syair::create([
            'pasaran_id' => '2',
            'datepost' => '2023-03-29',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'sydney',
            'slug' => 'syair-sydney',
        ]);

        Syair::create([
            'pasaran_id' => '3',
            'datepost' => '2023-03-28',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'china',
            'slug' => 'syair-china',
        ]);
        Syair::create([
            'pasaran_id' => '4',
            'datepost' => '2023-03-27',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'totomacau',
            'slug' => 'toto-macau',
        ]);

        Syair::create([
            'pasaran_id' => '5',
            'datepost' => '2023-03-26',
            'user_id' => '2',
            'sts_id' => '2',
            'nm_pasar' => 'singapore',
            'slug' => 'syair-singapore',
        ]);
        Syair::create([
            'pasaran_id' => '6',
            'datepost' => '2023-03-25',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'pcso',
            'slug' => 'syair-pcso',
        ]);

        Syair::create([
            'pasaran_id' => '7',
            'datepost' => '2023-03-24',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'taiwan',
            'slug' => 'syair-taiwan',
        ]);

        Syair::create([
            'pasaran_id' => '8',
            'datepost' => '2023-03-23',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'hongkong',
            'slug' => 'syair-hongkong',
        ]);






        Syair::create([
            'pasaran_id' => '1',
            'datepost' => '2023-03-22',
            'user_id' => '3',
            'sts_id' => '2',
            'nm_pasar' => 'cambodia',
            'slug' => 'syair-cambodia11',
        ]);

        Syair::create([
            'pasaran_id' => '2',
            'datepost' => '2023-03-21',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'sydney',

            'slug' => 'syair-sydney11',
        ]);

        Syair::create([
            'pasaran_id' => '3',
            'datepost' => '2023-03-20',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'china',
            'slug' => 'syair-china11',
        ]);
        Syair::create([
            'pasaran_id' => '4',
            'datepost' => '2023-03-19',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'totomacau',
            'slug' => 'toto-macau11',
        ]);

        Syair::create([
            'pasaran_id' => '5',
            'datepost' => '2023-03-18',
            'user_id' => '2',
            'sts_id' => '2',
            'nm_pasar' => 'singapore',
            'slug' => 'syair-singapore11',
        ]);
        Syair::create([
            'pasaran_id' => '6',
            'datepost' => '2023-03-17',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'pcso',
            'slug' => 'syair-pcso11',
        ]);

        Syair::create([
            'pasaran_id' => '7',
            'datepost' => '2023-03-16',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'taiwan',
            'slug' => 'syair-taiwan11',
        ]);

        Syair::create([
            'pasaran_id' => '8',
            'datepost' => '2023-03-15',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'hongkong',
            'slug' => 'syair-hongkong11',
        ]);

        Syair::create([
            'pasaran_id' => '1',
            'datepost' => '2023-03-14',
            'user_id' => '3',
            'sts_id' => '2',
            'nm_pasar' => 'cambodia',
            'slug' => 'syair-cambodia1',
        ]);

        Syair::create([
            'pasaran_id' => '2',
            'datepost' => '2023-03-13',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'sydney',
            'slug' => 'syair-sydney1',
        ]);

        Syair::create([
            'pasaran_id' => '3',
            'datepost' => '2023-03-12',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'china',
            'slug' => 'syair-china1',
        ]);
        Syair::create([
            'pasaran_id' => '4',
            'datepost' => '2023-03-11',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'totomacau',
            'slug' => 'toto-macau1',
        ]);

        Syair::create([
            'pasaran_id' => '5',
            'datepost' => '2023-03-10',
            'user_id' => '2',
            'sts_id' => '2',
            'nm_pasar' => 'singapore',
            'slug' => 'syair-singapore1',
        ]);
        Syair::create([
            'pasaran_id' => '6',
            'datepost' => '2023-03-09',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'pcso',
            'slug' => 'syair-pcso1',
        ]);

        Syair::create([
            'pasaran_id' => '7',
            'datepost' => '2023-03-08',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'taiwan',
            'slug' => 'syair-taiwan1',
        ]);

        Syair::create([
            'pasaran_id' => '8',
            'datepost' => '2023-03-07',
            'user_id' => '1',
            'sts_id' => '2',
            'nm_pasar' => 'hongkong',
            'slug' => 'syair-hongkong1',
        ]);
    }
}
