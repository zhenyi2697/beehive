<?php

class BuildingTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('building')->truncate();

		$building = [
            [
                "name"        => "Student Center",
                "description"  => "This is the description of the big building.",
				"url_photo"  	   => "http://this.com/is/the/url",
				"longitude"  	   => 4.375,
				"latitude"  	   => 6.357
            ],
			[
                "name"        => "Clough",
                "description"  => "This is the description of the Clough building.",
				"url_photo"  	   => "http://this.com/is/the/url",
				"longitude"  	   => 74.375,
				"latitude"  	   => 61.357
            ]
        ];

		// Uncomment the below to run the seeder
		DB::table('building')->insert($building);
	}

}
