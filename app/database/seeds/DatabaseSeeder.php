<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('LocationTableSeeder');
		$this->call('BuildingTableSeeder');
		$this->call('StatsTableSeeder');
		$this->call('RealTimeStatsTableSeeder');
		$this->call('AccessPointTableSeeder');
	}

}