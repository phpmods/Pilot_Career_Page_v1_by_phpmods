<?php
///////////////////////////////////////////////
///  Pilot Career Page v1.1 by php-mods.eu  ///
///            Author php-mods.eu           ///
///            Packed at 3/1/2013           ///
///     Copyright (c) 2013, php-mods.eu     ///
///////////////////////////////////////////////

class Career extends CodonModule {
	
	public function index()
  {				
             $this->set('generaward', CareerData::getgenaward());
			 $this->set('ranks', CareerData::getranks());
			 $this->render('career.tpl');
  }  
}