<?php
class registrator {
	public $hexcode, $regmail;
	function __construct ($hexcode, $regmail) {
		$this->hexcode=$hexcode;
		$this->regmail=$regmail;
	}
	function acode() {
		return decoder($this->hexcode);
	}
	function sendmail () {
		$msg = $this->acode();
				mail($this->regmail, "Geod2000", "hexcode: $this->hexcode acode: $msg", "From: support@geod2000.ru" );
	}
}
?>