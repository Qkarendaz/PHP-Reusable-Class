<?php
class View extends Modal {
	public function show($variablename){
		$show = $this->selectData($variablename);
		echo "Firstname:" . $show['firstname'] . "<br>";
		echo "Firstname:" . $show['lastname'] . "<br>";
		echo "Firstname:" . $show['age'] . "<br>";
	}
    
}