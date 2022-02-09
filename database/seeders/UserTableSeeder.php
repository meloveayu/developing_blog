<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,50)->create();//向users表中插入50条模拟数据
        $user = User::find(1);
        $user->name = "meloveayu";
        $user->email = "meloveayu@test.com";
        $user->password = bcrypt('szy1999');
        $user->save();
    }
}
