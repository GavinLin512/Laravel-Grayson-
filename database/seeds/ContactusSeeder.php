<?php

use App\Contactus;
use Illuminate\Database\Seeder;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Contactus::truncate();
        factory(Contactus::class, 30)->create();
    }
}
