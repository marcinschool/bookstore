<?php

class Account_Model extends Model {
	public function register($data)
	{
		$data['imie'] = $this->escapeString($data['imie']);
		$data['nazwisko'] = $this->escapeString($data['nazwisko']);
		$data['email'] = $this->escapeString($data['email']);
		$data['haslo'] = $this->escapeString($data['haslo']);

		$query = "INSERT INTO users(imie, nazwisko, email, haslo) VALUES('".$data['imie']."','".$data['nazwisko']."','".$data['email']."','".$data['haslo']."')";
		$this->execute($query);
	}

	public function login($email, $haslo)
	{
		$email = $this->escapeString($email);
		$haslo = $this->escapeString($haslo);

		$query = "SELECT user_id FROM users WHERE email='".$email."' AND haslo='".$haslo."'";

		$res = $this->query($query);

		if(!empty($res))
			return $res[0]->user_id;
		else
			return 0;
	}
}

?>
