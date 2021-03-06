<?php namespace Parking\Models;

class Place extends \Eloquent {

	public function vechicleType()
	{
		return $this->hasOne('Parking\Models\VehicleType');
	}

	public function vehicle()
	{
		return $this->belongsTo('Parking\Models\Vehicle');
	}

}