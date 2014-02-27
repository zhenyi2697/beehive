<?php

class RealTimeStats extends Eloquent {
	protected $table = "realtimestats";
 
    protected $guarded = [
        "id",
        "id_location",
		"date",
        "clients"
    ];
}
