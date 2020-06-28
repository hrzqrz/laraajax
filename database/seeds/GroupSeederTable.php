<?php

use Illuminate\Database\Seeder;
// use DB;
class GroupSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->truncate();

        $groups = [
            ['id'=>1, 'name'=>'family', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>2, 'name'=>'friends', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>3, 'name'=>'teachers', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>4, 'name'=>'gamers', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>5, 'name'=>'customrs', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>6, 'name'=>'girls', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>7, 'name'=>'boys', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
        ];

        DB::table('groups')->insert($groups);

    }
}
