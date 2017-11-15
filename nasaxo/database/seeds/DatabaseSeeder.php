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
        $this->call(['AccountSeeder','Role','test_nton','detail_nton']);
    }
}
class AccountSeeder extends Seeder
{
    public function run()
    {
    	// thêm vào database
    	DB::table('Account')->insert([
    		array('Name' =>'Nguyễn Hoàng Nam' ,'Pass'=>'1','Description'=>''),
    		array('Name' =>'Nguyễn' ,'Pass'=>'1','Description'=>''),
    		array('Name' =>'Hoàng Nam' ,'Pass'=>'1','Description'=>''),
    		array('Name' =>'Nam' ,'Pass'=>'1','Description'=>''),
    		array('Name' =>'Hoàng' ,'Pass'=>'1','Description'=>''),
    		array('Name' =>'Nguyễn Dương' ,'Pass'=>'1','Description'=>''),
    		array('Name' =>'Nguyễn Thúy' ,'Pass'=>'1','Description'=>''),
    		array('Name' =>'A' ,'Pass'=>'1','Description'=>'')
    	]);
    }
}
class Role extends Seeder
{
    public function run()
    {
        // thêm vào database
        DB::table('Role')->insert([
            array('Account_id' =>'1','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'2','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'1','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'2','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'3','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'1','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'1','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'1','Description'=>'aaaaaaaaaaaaaaaaaa'),
            array('Account_id' =>'1','Description'=>'aaaaaaaaaaaaaaaaaa'),
        ]);
    }
}
class test_nton extends Seeder
{
    public function run()
    {
        // thêm vào database
        DB::table('test_nton')->insert([
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
            array('Description'=>'test_nton'),
        ]);
    }
}
class detail_nton extends Seeder
{
    public function run()
    {
        // thêm vào database
        DB::table('detail_nton')->insert([
            array('Account_id'=>'1','test_id'=>'1'),
            array('Account_id'=>'2','test_id'=>'1'),
            array('Account_id'=>'1','test_id'=>'2'),
            array('Account_id'=>'3','test_id'=>'1'),
            array('Account_id'=>'1','test_id'=>'3'),
            array('Account_id'=>'3','test_id'=>'2'),
        ]);
    }
}