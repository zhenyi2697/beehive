<?php

class StatsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('stats')->truncate();

		$stats = [
            [
                "id_location"        => "1",
                "hour"  => time("hh:mm:ss"),
				"day"  => "Monday",
				"clients"  	   => 45,
				"count"  	   => 103
            ],
			[
                "id_location"        => "1",
                "hour"  => time("hh:mm:ss"),
				"day"  => "Tuesday",
				"clients"  	   => 45,
				"count"  	   => 103
            ],
			[
                "id_location"        => "1",
                "hour"  => time("hh:mm:ss"),
				"day"  => "Wednesday",
				"clients"  	   => 45,
				"count"  	   => 103
            ],
			[
                "id_location"        => "1",
                "hour"  => time("hh:mm:ss"),
				"day"  => "Thursday",
				"clients"  	   => 45,
				"count"  	   => 103
            ],
			[
                "id_location"        => "1",
                "hour"  => time("hh:mm:ss"),
				"day"  => "Friday",
				"clients"  	   => 45,
				"count"  	   => 103
            ],
			[
                "id_location"        => "1",
                "hour"  => time("hh:mm:ss"),
				"day"  => "Saturday",
				"clients"  	   => 45,
				"count"  	   => 103
            ],
			[
                "id_location"        => "1",
                "hour"  => time("hh:mm:ss"),
				"day"  => "Sunday",
				"clients"  	   => 45,
				"count"  	   => 103
            ]
        ];

		// Uncomment the below to run the seeder
		DB::table('stats')->insert($stats);
	}

}
