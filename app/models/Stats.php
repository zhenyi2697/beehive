<?php

class Stats extends Eloquent {
	protected $table = "stats";
 
    protected $guarded = [
        "id",
        "id_location",
		"hour",
		"day",
        "clients",
		"count"
    ];
}
