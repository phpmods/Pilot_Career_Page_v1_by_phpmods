<?php
///////////////////////////////////////////////
///  Pilot Career Page v1.1 by php-mods.eu  ///
///            Author php-mods.eu           ///
///            Packed at 3/1/2013           ///
///     Copyright (c) 2013, php-mods.eu     ///
///////////////////////////////////////////////

class CareerData extends CodonData {
	
	  public function getgenaward() {
        $sql = "SELECT * FROM " . TABLE_PREFIX . "awards";
        return DB::get_results($sql);
	  }
	      public function getranks() {
		$sql = "SELECT * FROM " . TABLE_PREFIX . "ranks ORDER BY minhours";
		return DB::get_results($sql);
		  }
		  public function getaircrafts($rankid) {
			  $sql= "SELECT distinct icao FROM " . TABLE_PREFIX . "aircraft WHERE minrank=" . $rankid;
		return DB::get_results($sql);
		  }
}