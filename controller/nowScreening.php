<?php

require_once("../model/film.php");
require_once("../model/DataAccess.php");
session_start();


if (isset($_REQUEST["searchfn"]) && $_REQUEST["searchMovies"] != "")
{
    $films = getOnefilmName($_REQUEST["searchMovies"]);
}
else {
    $films = getAllFilms(); 
}

require_once("../view/films_showing.php");

















?>