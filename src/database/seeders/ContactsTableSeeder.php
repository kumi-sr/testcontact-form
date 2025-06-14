<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'select' => '商品のお届けについて'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'select' => '商品の交換について'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'select' => '商品トラブル'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'select' => 'ショップへのお問い合わせ'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'select' => 'その他'
        ];
        DB::table('contacts')->insert($param);
    }
}
