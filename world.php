<?php
class world {
	private $a,$b,$res;
	function __construct($a,$b) {
		$this -> a = $a;
		$this -> b = $b;
	}
	function sum() {
		$this -> res = $this -> a + $this -> b;
	}
	function vivod() {
		return $this -> res;
	}
}
?>