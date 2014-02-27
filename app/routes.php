<?php
//Building//
Route::model("building", "Building");

Route::get("buildings", [
    "as"   => "building/index",
    "uses" => "BuildingController@index"
]);

Route::post("buildings", [
    "as"   => "building/store",
    "uses" => "BuildingController@store"
]);

Route::get("buildings/{building}", [
    "as"   => "building/show",
    "uses" => "BuildingController@show"
]);

Route::put("buildings/{building}", [
    "as"   => "building/update",
    "uses" => "BuildingController@update"
]);

Route::delete("buildings/{building}", [
    "as"   => "building/destroy",
    "uses" => "BuildingController@destroy"
]);

//Location//
Route::model("location", "Location");

Route::get("locations", [
    "as"   => "location/index",
    "uses" => "LocationController@index"
]);

Route::post("locations", [
    "as"   => "location/store",
    "uses" => "LocationController@store"
]);

Route::get("locations/{location}", [
    "as"   => "location/show",
    "uses" => "LocationController@show"
]);

Route::put("locations/{location}", [
    "as"   => "location/update",
    "uses" => "LocationController@update"
]);

Route::delete("locations/{location}", [
    "as"   => "location/destroy",
    "uses" => "LocationController@destroy"
]);

//Access Point//
Route::model("accesspoint", "AccessPoint");

Route::get("accesspoints", [
    "as"   => "accesspoint/index",
    "uses" => "AccessPointController@index"
]);

Route::post("accesspoints", [
    "as"   => "accesspoint/store",
    "uses" => "AccessPointController@store"
]);

Route::get("accesspoints/{accesspoint}", [
    "as"   => "accesspoint/show",
    "uses" => "AccessPointController@show"
]);

Route::put("accesspoints/{accesspoint}", [
    "as"   => "accesspoint/update",
    "uses" => "AccessPointController@update"
]);

Route::delete("accesspoints/{accesspoint}", [
    "as"   => "accesspoint/destroy",
    "uses" => "AccessPointController@destroy"
]);

//Real Time Stats//
Route::model("realtimestats", "RealTimeStats");

Route::get("realtimestats", [
    "as"   => "realtimestats/index",
    "uses" => "RealTimeStatsController@index"
]);

Route::post("realtimestats", [
    "as"   => "realtimestats/store",
    "uses" => "RealTimeStatsController@store"
]);

Route::get("realtimestats/{realtimestats}", [
    "as"   => "realtimestats/show",
    "uses" => "RealTimeStatsController@show"
]);

Route::put("realtimestats/{realtimestats}", [
    "as"   => "realtimestats/update",
    "uses" => "RealTimeStatsController@update"
]);

Route::delete("realtimestats/{realtimestats}", [
    "as"   => "realtimestats/destroy",
    "uses" => "RealTimeStatsController@destroy"
]);

//Real Time Stats//
Route::model("stats", "Stats");

Route::get("stats", [
    "as"   => "stats/index",
    "uses" => "StatsController@index"
]);

Route::post("stats", [
    "as"   => "stats/store",
    "uses" => "StatsController@store"
]);

Route::get("stats/{stats}", [
    "as"   => "stats/show",
    "uses" => "StatsController@show"
]);

Route::put("stats/{stats}", [
    "as"   => "stats/update",
    "uses" => "StatsController@update"
]);

Route::delete("stats/{stats}", [
    "as"   => "stats/destroy",
    "uses" => "StatsController@destroy"
]);