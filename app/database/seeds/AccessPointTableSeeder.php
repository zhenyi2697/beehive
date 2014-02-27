<?php

class AccessPointTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('accesspoint')->truncate();

		$accesspoint = [
            [
                "bssid"        => "00-14-22-01-23-45",
                "id_location"  => 1,
                "weight"  	   => 0.3
            ],
            [
                "bssid"        => "00-1A-2B-01-2G-AA",
                "id_location"  => 2,
                "weight"  	   => 0.7
            ],
			[
                "bssid"        => "70-14-27-01-23-75",
                "id_location"  => 3,
                "weight"  	   => 0.6
            ],
			[
                "bssid"        => "00-1V-22-01-24-45",
                "id_location"  => 4,
                "weight"  	   => 0.2
            ],
			[
                "bssid"        => "0V-14-22-0V-23-45",
                "id_location"  => 5,
                "weight"  	   => 0.8
            ]
        ];

		// Uncomment the below to run the seeder
		DB::table('accesspoint')->insert($accesspoint);
	}

}
