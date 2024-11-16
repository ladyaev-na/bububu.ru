<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $role_admin = Role::where('code', 'admin')->first();
        $role_manager = Role::where('code', 'manager')->first();
        $role_user = Role::where('code', 'user')->first();

        User::create([
           'surname' => 'Ладяев',
           'name' => 'Никита',
           'patronymic' => 'Александрович',
            'sex' => 1,
            'birthday' => '2005-09-02',
            'email' => 'ladyaev@inbox.ru',
            'password' => 'qwerty',
            'nickname' => 'Nikita',
            'avatar' => null,
            'phone' => '+7(953)917-96-73',
            'api_token' => '1',
            'role_id' => $role_admin->id,
        ]);
        User::create([
           'surname' => 'Евсеев',
           'name' => 'Дмитрий',
           'patronymic' => 'Николаевич',
            'sex' => 1,
            'birthday' => '2002-07-21',
            'email' => 'dimka@imail.ru',
            'password' => 'asdfgh',
            'nickname' => 'Dima',
            'avatar' => null,
            'phone' => '+7(953)913-92-98',
            'api_token' => '2',
            'role_id' => $role_manager->id,
        ]);
        User::create([
           'surname' => 'Рюгин',
           'name' => 'Алексей',
           'patronymic' => 'Иванович',
            'sex' => 1,
            'birthday' => '2006-10-27',
            'email' => 'lesha@imail.ru',
            'password' => 'zxcvbn',
            'nickname' => 'Lesha',
            'avatar' => null,
            'phone' => '+7(952)804-35-75',
            'api_token' => '3',
            'role_id' => $role_user->id,
        ]);
    }
}
