<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wallet;
use App\Models\Plan;

class UtilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::create([
            'name' => 'Bitcoin',
            'address' => '16F32ypWWjz7TQh4v6D1aLSgU86ntsDCcx'
        ]);

        Wallet::create([
            'name' => 'Etherum',
            'address' => '0x547500dA654A04C4072a4ec44DE01b634543715b'
        ]);

        Wallet::create([
            'name' => 'Bitcoin Cash',
            'address' => 'qr098uq5zwtlxla5lmqecn4z59m3zwrcmsevxym9fk'
        ]);



        Plan::create([
            'name' => 'Bundle A',
            'max' => 4999,
            'roi' => 7,
            'min' => 300,
            'support' => '5',
            'desc' => 'Easy to Use',
        ]);

        Plan::create([
            'name' => 'Bundle B',
            'max' => 16999,
            'roi' => 9,
            'min' => 5000,
            'support' => '7',
            'desc' => 'Easy to Use',
        ]);

       
        Plan::create([
            'name' => 'Bundle C',
            'max' => 44999,
            'roi' => 12,
            'min' => 17000,
            'support' => '11',
            'desc' => 'Easy to Use',
        ]);

        Plan::create([
            'name' => 'Bundle D',
            'max' => 1000000000,
            'roi' => 15,
            'min' => 45000,
            'support' => '15',
            'desc' => 'Easy to Use',
        ]);
    }

}
