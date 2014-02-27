<?php

class RealTimeStatsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('realtimestats')->truncate();

		$realtimestats = [
            [
                "id_location"  	=> "1",
                "date"  		=> date("Y-m-d H:i:s"),
				"clients"  	    => 45
            ],
			[
                "id_location"   => "2",
                "date" 		 	=> date("Y-m-d H:i:s"),
				"clients"  	  	=> 12
            ]
        ];

		// Uncomment the below to run the seeder
		DB::table('realtimestats')->insert($realtimestats);
	}

}
