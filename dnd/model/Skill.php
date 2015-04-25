<?php
class Skill{
	
	public $class = 0;
	public $name = "skill";
	public $ranks = 0;
	public $misc = 0;
	public $ability = "STR";
	
	public function __construct($class,$name,$ranks,$misc,$abil){
		
		$this->name = $name;
		$this->class = $class;
		$this->ranks = $ranks;
		$this->misc = $misc;
		$this->ability = $abil;
	}
	
}

?>
