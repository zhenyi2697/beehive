<?php

class BuildingController extends BaseController {

public function index()
    {
        return Building::all();
    }

    public function store()
    {
        return Building::create([
            "name"       		=> Input::get("name"),
            "description"  	 	=> Input::get("description"),
            "url_photo"   		=> Input::get("url_photo"),
			"longitude"   		=> Input::get("longitude"),
			"latitude"   		=> Input::get("latitude")
        ]);
    }

    public function show($building)
    {
        return $building;
    }

    public function update($building)
    {
        $building->name     		= Input::get("name");
        $building->description  	= Input::get("description");
        $building->url_photo  		= Input::get("url_photo");
		$building->longitude  		= Input::get("longitude");
		$building->latitude  		= Input::get("latitude");
        $building->save();

        return $building;
    }

    public function destroy($building)
    {
        $building->delete();
        return Response::json(true);
    }
}
