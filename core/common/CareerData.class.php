<?php
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