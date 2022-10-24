<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '掃除',
        ];

        Todo::create($param);
        $param = [
            'content' => '洗濯',
        ];
        
        Todo::create($param);
        $param = [
            'content' => '買い物',
        ];

        Todo::create($param);
        $param = [
            'content' => '勉強',
        ];
        Todo::create($param);
    }
}
