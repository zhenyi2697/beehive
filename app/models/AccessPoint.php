<?php

class AccessPoint extends Eloquent {
	protected $table = "accesspoint";
 
    protected $guarded = [
        "id",
        "bssid",
		"id_location",
        "weight"
    ];
}
