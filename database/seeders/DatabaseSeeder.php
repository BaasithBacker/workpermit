<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\register;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $register = [
            [
                'empno'    => 'admin',
                'name'     => 'admin',
                'contact'  => '0000000000',
                'deptname' => 'Administrator',
                'password' =>md5('admin'),
                'usertype' =>'Admin',
            ],
        //     [
        //     'empno' => 'AB123',
        //     'name'  =>  'Basith Backer',
        //     'contact'  => '8089919106',
        //     'deptname' =>'IT',
        //     'password' =>md5('111111'),
        //     'usertype' =>'staff',
        // ],
        // [
        //     'empno'    => 'AB124',
        //     'name'     => 'Hrithik Pradeep',
        //     'contact'  => '8089919107',
        //     'deptname' => 'Security',
        //     'password' =>md5('111111'),
        //     'usertype' =>'security',
        // ],
        // [
        //     'empno'    => 'AB125',
        //     'name'     => 'Bilin Jossy',
        //     'contact'  => '8089919108',
        //     'deptname' => 'Maintenance',
        //     'password' =>md5('111111'),
        //     'usertype' =>'maintanence',
        // ],
        // [
        //     'empno'    => 'AB126',
        //     'name'     => 'Joel',
        //     'contact'  => '8089919109',
        //     'deptname' => 'Safety',
        //     'password' =>md5('111111'),
        //     'usertype' =>'safety',
        // ]
        ];
        foreach ($register as $r) {
            register::create($r);
        }
      
    }
}
