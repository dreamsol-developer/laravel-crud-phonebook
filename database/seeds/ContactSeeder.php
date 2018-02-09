<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('contacts')->insert([
            'contact_first_name'=> 'Nafees',
            'contact_email' => 'nafees123@gmail.com',
            'contact_last_name' => 'Hasan',
             'contact_phone'=>'12345678',
             'contact_city'=>'Lahore',
             ]);
          DB::table('contacts')->insert([
            'contact_first_name'=> 'Ali',
            'contact_email' => 'ali33@gmail.com',
            'contact_last_name' => 'Raza',
             'contact_phone'=>'12345678',
             'contact_city'=>'Faisalabad',
             ]);
           DB::table('contacts')->insert([
            'contact_first_name'=> 'Rashid',
            'contact_email' => 'rashid23@gmail.com',
            'contact_last_name' => 'Niaz',
             'contact_phone'=>'12345678',
             'contact_city'=>'Multan',
             ]);
    }
}
