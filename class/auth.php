<?php 
	require_once("usuario.php");
	require_once("repositorioUsuarios.php");
	
	class Auth {

		public static $instance;

		public static function getInstance(RepositorioUsuarios $repoUsers) {
			if (self::$instance == null) {
				self::$instance = new Auth();
				self::$instance->autoLogin($repoUsers);
			}
			return self::$instance;
		}

		private function __construct() {

		}

		public function login(User $user) {
        	$_SESSION["userLogged"] = $user->getEmail();
    	}

    	public function getUserLogged(RepositorioUsuarios $repo) {
	        if (!$this->isLogged()) {
	            return null;
	        }
	        $emailLogged = $_SESSION["userLogged"];
	        return $repo->getUserByEmail($emailLogged);
	    }

	    public function isLogged() {
	        return isset($_SESSION["userLogged"]);
	    }

	    public function saveCookie(User $user) {
	        setcookie("userLogged", $user->getEmail(), time() + 3600 * 24);
	    }

	    private function autoLogin(RepositorioUsuarios $repo) {
	        session_start();
	        if (!$this->isLogged()) {
	            if (isset($_COOKIE["userLogged"])) {
	                $user = $repo->getUserByEmail($_COOKIE["userLogged"]);
	                $this->login($user);
	            }
	        }
    	}

    	 public function logout()
		  {
		      session_destroy();
		      $this->unsetCookie("userLogged");
		  }

		  private function unsetCookie($nameCookie)
		  {
		      setcookie($nameCookie, "", -1);
		  }
	}
?>