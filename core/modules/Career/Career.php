<?php
class Career extends CodonModule {
	
	public function index()
  {				
             $this->set('generaward', CareerData::getgenaward());
			 $this->set('ranks', CareerData::getranks());
			 $this->render('career.tpl');
  }  
}