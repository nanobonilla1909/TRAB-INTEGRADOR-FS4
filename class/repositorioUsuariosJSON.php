<?php
	require_once("repositorioUsuarios.php");

	class RepositorioUsuariosJSON extends RepositorioUsuarios {

		public function getAllUsers() {

	        $users = [];

	        //1: Me traigo todo el archivo
	        $fileUsers = file_get_contents("users.json");

	        //2: Lo divido por lineas
	        $usersJSON = explode("\n", $fileUsers);

	        //3: Borro la linea vacía del final
	        $qtyUsers = count($usersJSON);
	        $last = $qtyUsers - 1;

	        unset($usersJSON[$last]);

	        //4: Recorro mis lineas y las paso a arrays
	        foreach ($usersJSON as $userJSON) {
	        	$userArray = json_decode($userJSON, true);

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

	    public function getNextId() {
	        //1: Me traigo todo el archivo
	        $fileUsers = file_get_contents("user.json");

	        //2: Lo divido por lineas
	        $userJSON = explode("\n", $fileUsers);

	        //3: Obtengo indice último usuario
	        $qtyUsers = count($userJSON);
	        $last = $qtyUsers - 2;

	        if ($last < 0) {
	            return 1;
	        }

	        //4: Traigo el último usuario
	        $lastUser = $userJSON[$last];

	        $lastUser = json_decode($lastUser, true);

	        return $lastUser["id"] + 1;
	    }

	    public function save(User $user) {
	    	if ($user->getId() == null) {
	    		$user->setId($this->getNextId());
	    	}
	    	$userJSON = json_encode($user->toArray());
	    	
	    	file_put_contents("user.json", $userJSON . "\n", FILE_APPEND);
	    }
	}