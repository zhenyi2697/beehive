<?php

class Building extends Eloquent {
	protected $table = "building";
 
    protected $guarded = [
        "id",
        "name",
		"description",
        "url_photo",
		"longitude",
		"latitude"
    ];
}
