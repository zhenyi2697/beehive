<?php

class LocationController extends BaseController {

public function index()
    {
        return Location::all();
    }

    public function store()
    {
        return Location::create([
            "name"       	 => Input::get("name"),
            "description"  	 => Input::get("description"),
            "id_building"    => Input::get("id_building"),
			"url_photo"   	 => Input::get("url_photo"),
			"longitude"  	 => Input::get("longitude"),
			"latitude"  	 => Input::get("latitude")
        ]);
    }

    public function show($location)
    {
        return $location;
    }

    public function update($location)
    {
        $location->name        = Input::get("name");
        $location->description  = Input::get("description");
        $location->id_building    = Input::get("id_building");
		$location->url_photo    = Input::get("url_photo");
		$location->longitude    = Input::get("longitude");
		$location->latitude    = Input::get("latitude");
        $location->save();

        return $location;
    }

    public function destroy($location)
    {
        $location->delete();
        return Response::json(true);
    }
}
