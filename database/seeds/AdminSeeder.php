<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        factory( \App\Admin::class, 6 )->create();
        $admin = \App\Admin::find( 1 );
        $admin->name = '顾首';
        $admin->nickname = '管理员';
        $admin->password = bcrypt( 'admin123456' );
        $admin->is_admin = 1;
        $admin->save();
        \Spatie\Permission\Models\Role::create( [
            'title'=>'站长',
            'name'=>'webmaster',
            'guard_name'=>'admin'
        ] );
        $admin->assignRole( 'webmaster' );
    }
}
