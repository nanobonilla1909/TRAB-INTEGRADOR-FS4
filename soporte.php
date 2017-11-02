<?php
	require_once("class/auth.php");
	require_once("class/repositorioJSON.php");
	require_once("class/repositorioSQL.php");

	$tipoRepositorio = "sql";

	switch($tipoRepositorio) {
		case "json":
			$repo = new RepositorioJSON();
			break;
		case "sql":
			$repo = new RepositorioSQL();
			break;
	}

	$auth = Auth::getInstance($repo->getRepositorioUsuarios());

?>
