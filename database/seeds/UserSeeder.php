<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        return;
        factory( \App\User::class, 10 )->create();
        $user = \App\User::find( 1 );
        $user->name = '顾首';
        $user->email = '894139598@qq.com';
        $user->password = bcrypt( 'admin123456' );
        $user->is_admin = 1;
        $user->save();
        $user = \App\User::find( 2 );
        $user->name = '顾首2';
        $user->email = '2642947313@qq.com';
        $user->password = bcrypt( 'admin123456' );
        $user->is_admin = 0;
        $user->save();
    }
}
