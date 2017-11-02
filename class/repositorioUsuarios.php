<?php

	abstract class RepositorioUsuarios {
		abstract public function save(User $user);
		abstract public function getAllUsers();

		public function existEmail($email) {
	        $user = $this->getUserByEmail($email);
	        if ($user) {
	            return true;
	        }
	        return false;
	    }

	    public function getUserByEmail($email) {
	        //1: Me traigo todos los usuarios y ya opero con arrays
	        $user = $this->getAllUsers();

	        //2: Los recorro y si alguno es el que busco, devuelvo
	        foreach($users as $user)
	        {
	            if ($user->getEmail() == $email)
	            {
	                return $user;
	            }
	        }

	        return false;
	    }
	}