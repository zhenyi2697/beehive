<?php

class AccessPointController extends BaseController {

public function index()
    {
        return AccessPoint::all();
    }

    public function store()
    {
        return AccessPoint::create([
            "bssid"       	 => Input::get("bssid"),
            "id_location"  	 => Input::get("id_location"),
            "weight"   		 => Input::get("weight")
        ]);
    }

    public function show($accesspoint)
    {
        return $accesspoint;
    }

    public function update($accesspoint)
    {
        $accesspoint->bssid       	  = Input::get("bssid");
        $accesspoint->id_location 	  = Input::get("id_location");
        $accesspoint->weight  		  = Input::get("weight");
        $accesspoint->save();

        return $accesspoint;
    }

    public function destroy($accesspoint)
    {
        $accesspoint->delete();
        return Response::json(true);
    }

}
