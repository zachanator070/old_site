<?php

class Attack{
	
	public $name="atk";
	public $damage =0;
	public $critical="0";
	public $description="description";
	
	public function __construct($name,$dmg,$crit,$desc){
		
		$this->name = $name;
		$this->damage = $dmg;
		$this->critical = $crit;
		$this->description=$desc;
		
	}
	
}

?>
