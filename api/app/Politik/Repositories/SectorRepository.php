<?php

namespace Politik\Repositories;

use Politik\Entities\Sector;

class SectorRepository implements SectorRepositoryInterface {

	public function alterState($id, $state)
	{
		$sector = Sector::findOrFail($id);
		$sector->state()->associate($state);
		$sector->save();
	}
	
	public function getAllSectors()
	{
		return Sector::all();
	}

	public function getSector($id)
	{
		return Sector::findOrFail($id);
	}

}
