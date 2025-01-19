<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 一件だけinsertする
        DB::table('tasks')->insert([
            'title' => '朝ご飯',
            'body' => 'おでん',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        # paramに配列を代入
        $param = [
            [
                'title' => 'スパルタキャンプ',
                'body' => 'プログラミング',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => '夜ご飯',
                'body' => "麻婆茄子",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        # DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
