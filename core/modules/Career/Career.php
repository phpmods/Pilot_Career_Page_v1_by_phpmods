<?php
///////////////////////////////////////////////
///   PilotCareer_Page v1 by php-mods.eu    ///
///            Author php-mods.eu           ///
///           Packed at 27/11/2012          ///
///     Copyright (c) 2012, php-mods.eu     ///
///////////////////////////////////////////////

class Career extends CodonModule {
	
	public function index()
  {				
             $this->set('generaward', CareerData::getgenaward());
			 $this->set('ranks', CareerData::getranks());
			 $this->render('career.tpl');
  }  
}