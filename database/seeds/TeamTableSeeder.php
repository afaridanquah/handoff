<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();
        Team::create(array(
        	'name' => 'NTPROV',
        	'team_dl' => 'msafaridanquah@gmail.com',
        	));
    }
}
