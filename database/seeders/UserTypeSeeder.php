<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTypes;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = array(
            array('name' => 'Super Admin','variable'=>'super-admin'),
            array('name' => 'Admin','variable'=>'admin'),
            array('name' => 'Partner Admin','variable'=>'partner-admin'),
            array('name' => 'Partner Employee','variable'=>'partner-employee'),
            array('name' => 'Customer','variable'=>'customer'),
          );
          
        foreach ($userRole as $key => $value) {
            UserTypes::create($value);
        }
    }
}
