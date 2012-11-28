<?php
///////////////////////////////////////////////
///   PilotCareer_Page v1 by php-mods.eu    ///
///            Author php-mods.eu           ///
///           Packed at 27/11/2012          ///
///     Copyright (c) 2012, php-mods.eu     ///
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
}