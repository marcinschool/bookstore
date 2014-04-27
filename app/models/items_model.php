<?php

class Items_Model extends Model {
	public function getGatunki() {
		$query = "SELECT id_gatunku, nazwa FROM gatunek";

		$res = $this->query($query);
		return $res;
	}

	public function getProdukty($gatunek = 0) {
		if($gatunek == 0) {
			$query = "SELECT * FROM ksiazka";
		} else {
			$gatunek = $this->toInt($gatunek);
			$query = "SELECT * FROM ksiazka WHERE id_gatunku=".$gatunek;
		}

		$res = $this->query($query);
		return $res;
	}
}

?>