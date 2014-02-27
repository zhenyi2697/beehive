<?php

class Location extends Eloquent {
	protected $table = "location";
 
    protected $guarded = [
        "id",
        "name",
		"description",
        "id_building",
		"url_photo",
		"longitude",
		"latitude"
    ];
}
