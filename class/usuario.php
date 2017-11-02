<?php
	require_once("repositorioUsuarios.php");

	class User {
		private $name;
		private $surname;
		private $email;
		private $id;
		private $password;
		private $avatar;

		public function __construct($id, $name, $surname, $email, $password) {
			$this->id = $id;
			$this->name =$name;
			$this->surname = $surname;
			$this->email = $email;
			$this->password = $password;
		}

		public function getId()
		{
			return $this->id;
		}
		public function getName()
		{
			return $this->name;
		}
		public function getSurname()
		{
			return $this->surname;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getPassword()
		{
			return $this->password;
		}
		public function getAvatar()
		{
			$name = "img/" . $this->getId();
			$matching = glob($name . ".*");

			$info = pathinfo($matching[0]);
			$ext = $info['extension'];

			return $name . "." . $ext;
		}

		public function setId($id) {
			$this->id = $id;
		}
		public function setName($name) {
			$this->name = $name;
		}
		public function setSurname($surname) {
			$this->surname = $surname;
		}
		public function setEmail($email) {
			$this->email = $email;
		}
		public function setPassword($password) {
			$this->password = password_hash($password, PASSWORD_DEFAULT);
		}
		public function setAvatar($avatar) {
			if ($avatar["error"] == UPLOAD_ERR_OK) {

				$path = "img/";

				if (!is_dir($path)) {
					mkdir($path, 0777);
				}

				$ext = pathinfo($avatar["name"], PATHINFO_EXTENSION);

				move_uploaded_file($avatar["tmp_name"], $path . $this->getId() . "." . $ext);
			}
		}

		public function saveUser(RepositorioUsuarios $repo) {
			$repo->saveUser($this);
		}

		public function toArray() {
			return [
				"id" => $this->getId(),
				"name" => $this->getNombre(),
				"surname" => $this->getSurname(),
				"email" => $this->getEmail(),
				"password" => $this->getPassword()
			];
		}
	}
