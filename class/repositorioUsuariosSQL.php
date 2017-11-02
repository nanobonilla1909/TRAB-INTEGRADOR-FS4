<?php
	require_once("repositorioUsuarios.php");

	class RepositorioUsuariosSQL extends RepositorioUsuarios {

		private $conn;

		public function __construct(PDO $conn) {
			$this->conn = $conn;
		}

		public function getAllUsers() {

			$users = [];

			$sql = "SELECT * FROM users";

			$query = $this->conn->prepare($sql);
			$query->execute();

			$usersArray = $query->fetchAll(PDO::FETCH_ASSOC);

	        foreach ($usersArray as $userArray) {

	        	$user = new User(
	        		$userArray["id"],
					$userArray["name"],
					$userArray["surname"],
	        		$userArray["email"],
	        		$userArray["password"]
	        	);

	            $users[] = $user;
	        }

	        return $users;
	    }


	    public function save(User $user) {
	    	if ($user->getId() == null) {
	    		$sql = "INSERT into users(id,name,surname,email,password) values (default, :name, :surname, :email, :password)";
	    	}
		

	    	$query = $this->conn->prepare($sql);

	    	$query->bindValue(":name", $user->getNombre(), PDO::PARAM_STR);
			$query->bindValue(":surname", $user->getSurname(), PDO::PARAM_STR);
			$query->bindValue(":email", $user->getEmail(), PDO::PARAM_STR);
	    	$query->bindValue(":password", $user->getPassword(), PDO::PARAM_STR);

	    	if ($user->getId() != null) {
	    		$query->bindValue(":id", $user->getId(), PDO::PARAM_INT);
	    	}

	    	$query->execute();

	    	if ($user->getId() == null) {
	    		$user->setId($this->conn->lastInsertId());
	    	}

	    }

	    public function getUserByEmail($email) {
	        $sql = "SELECT * FROM users WHERE email = :email";

	        $query = $this->conn->prepare($sql);

	        $query->bindValue(":email", $email, PDO::PARAM_STR);

	        $query->execute();

	        $userArray = $query->fetch();

	        if ($userArray) {
	        	$user = new User(
	        		$userArray["id"],
	        		$userArray["name"],
					$userArray["surname"],
					$userArray["email"],
	        		$userArray["password"]
	        	);
	        	return $user;
	        }

	        return false;
	    }
	}
