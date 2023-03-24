<?php 
class Film {
    public $filmid;
    public $name;
    public $duration;
    public $rating;
    public $genre;
    public $description; 
    public $image; 

    function _setid($filmid) {
        $this->filmid = $filmid;
    }

    function _getid() {
        return $this->filmid; 
    }

    function _setname($name) {
        $this->name = $name; 
    }
    function _getname() {
        return $this->name;
    }

    function _setduration($duration) {
        $this->duration = $duration;
    }
    function _getduration() {
        return $this->duration;
    }

    function _setrating($rating) {
        $this->rating = $rating;
    }

    function _getrating() {
        return $this->rating;
    }

    function _setgenre($genre) {
        $this->genre = $genre;
    }

    function _getgenre() {
        return $this->genre;
    }

    function _setdescription($description) {
        $this->description = $description;
    }

    function _getdescription() {
        return $this->description;
    }

    function _getimage() {  
        return $this->image;
    }

    function getFullFilm() { 
        return "$this->filmid,$this->name,$this->duration,$this->rating,$this->genre,$this->description,$this->image";
    }

}


?>