<?php

class LocationTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('location')->truncate();

		$location = [
            [
                "name"        => "Food Court",
                "description"  => "This is the description of the location one",
                "id_building"  	   => 1,
				"url_photo"  	   => "http://this.com/is/the/url",
				"longitude"  	   => 44.375,
				"latitude"  	   => 26.357
            ],
            [
                "name"        => "Post Office",
                "description"  => "This is the description of the location two",
                "id_building"  	   => 1,
				"url_photo"  	   => "http://this.com/is/the/url",
				"longitude"  	   => 1.375,
				"latitude"  	   => 86.357
            ],
			[
                "name"        => "Tech Rec",
                "description"  => "This is the description of the location three",
                "id_building"  	   => 1,
				"url_photo"  	   => "http://this.com/is/the/url",
				"longitude"  	   => 44.375,
				"latitude"  	   => 26.357
            ],
			[
                "name"        => "Starbucks",
                "description"  => "This is the description of the location one",
                "id_building"  	   => 2,
				"url_photo"  	   => "http://this.com/is/the/url",
				"longitude"  	   => 44.375,
				"latitude"  	   => 26.357
            ],
			[
                "name"        => "Library",
                "description"  => "This is the description of the location one",
                "id_building"  	   => 2,
				"url_photo"  	   => "http://this.com/is/the/url",
				"longitude"  	   => 44.375,
				"latitude"  	   => 26.357
            ]
        ];

		// Uncomment the below to run the seeder
		DB::table('location')->insert($location);
	}

}
