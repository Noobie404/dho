<?php

use Illuminate\Database\Seeder;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id' => 1,
            'about' => '.....',
            'created_at' => '2020-02-13 00:00:00',
        ]; 
        
        DB::table('about_us')->insert($data);
    }
}
