<?php

class Items_Model extends Model {
	public function getGatunki() {
		$query = "SELECT id_gatunku, nazwa FROM gatunek";

		$res = $this->query($query);
		return $res;
	}
}

?>