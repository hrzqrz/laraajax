<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Group;
// use DB;
class ContactSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();

        $faker = Faker::create();
        $contacts = [];

        foreach(range(1, 20) as $index)
        {
           $contacts[] = [
               'name' => $faker->name,
               'email' => $faker->email,
               'group_id'=>Group::pluck('id')->random() ,
               'phone' => $faker->phoneNumber,
               'address' => "{$faker->streetName} {$faker->postcode} {$faker->city}",
               'company' => $faker->company,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
           ] ;
        }

        DB::table('contacts')->insert($contacts);

    }
}
