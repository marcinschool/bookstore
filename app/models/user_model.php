<?php

class User_Model extends Model {
	public function getUser($user_id) {
		$user_id = $this->toInt($user_id);

		$query = "SELECT * FROM users WHERE user_id=".$user_id;
		$res = $this->query($query);

		return $res[0];
	}
}

?>