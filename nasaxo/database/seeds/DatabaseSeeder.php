<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([]);
    }
}
class AccountSeeder extends Seeder
{
    public function run()
    {
    	// thêm vào database
    	// DB::table('Account')->insert([
    	// 	array('Name' =>'Nguyễn Hoàng Nam' ,'Pass'=>'1','Description'=>''),
    	// 	array('Name' =>'Nguyễn' ,'Pass'=>'1','Description'=>''),
    	// 	array('Name' =>'Hoàng Nam' ,'Pass'=>'1','Description'=>''),
    	// 	array('Name' =>'Nam' ,'Pass'=>'1','Description'=>''),
    	// 	array('Name' =>'Hoàng' ,'Pass'=>'1','Description'=>''),
    	// 	array('Name' =>'Nguyễn Dương' ,'Pass'=>'1','Description'=>''),
    	// 	array('Name' =>'Nguyễn Thúy' ,'Pass'=>'1','Description'=>''),
    	// 	array('Name' =>'A' ,'Pass'=>'1','Description'=>'')
    	// ]);
    }
}