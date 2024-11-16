<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        Status::create([
            'name' => 'Новый заказ',
            'code' => 'new'
        ]);
        Status::create([
            'name' => 'В сборке',
            'code' => 'assembled'
        ]);
        Status::create([
            'name' => 'Передается в доставку',
            'code' => 'transmitted'
        ]);
        Status::create([
            'name' => 'в пути',
            'code' => 'way'
        ]);
        Status::create([
            'name' => 'Доставлен',
            'code' => 'delivered'
        ]);
        Status::create([
            'name' => 'Получено',
            'code' => 'received'
        ]);
        Status::create([
            'name' => 'Отменен',
            'code' => 'cancelled'
        ]);

    }
}
