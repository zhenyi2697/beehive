<?php

class RealTimeStatsController extends BaseController {

public function index()
    {
        return RealTimeStats::all();
    }

    public function store()
    {
        return RealTimeStats::create([
            "id_location"       => Input::get("id_location"),
            "date"  	 		=> Input::get("date"),
            "clients"   		=> Input::get("clients")
        ]);
    }

    public function show($realtimestats)
    {
        return $realtimestats;
    }

    public function update($realtimestats)
    {
        $realtimestats->id_location     = Input::get("id_location");
        $realtimestats->date  			= Input::get("date");
        $realtimestats->clients  		= Input::get("clients");
        $realtimestats->save();

        return $realtimestats;
    }

    public function destroy($realtimestats)
    {
        $realtimestats->delete();
        return Response::json(true);
    }
}
