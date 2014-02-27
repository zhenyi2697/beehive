<?php

class StatsController extends BaseController {

public function index()
    {
        return Stats::all();
    }

    public function store()
    {
        return Stats::create([
            "id_location"       => Input::get("id_location"),
			"hour"  	 		=> Input::get("hour"),
            "day"  	 			=> Input::get("day"),
            "clients"   		=> Input::get("clients"),
			"count"   			=> Input::get("count")
        ]);
    }

    public function show($stats)
    {
        return $stats;
    }

    public function update($stats)
    {
        $stats->id_location     = Input::get("id_location");
        $stats->hour  			= Input::get("hour");
		$stats->day  			= Input::get("day");
		$stats->clients  		= Input::get("clients");
        $stats->count  			= Input::get("count");
        $stats->save();

        return $stats;
    }

    public function destroy($stats)
    {
        $stats->delete();
        return Response::json(true);
    }

}
