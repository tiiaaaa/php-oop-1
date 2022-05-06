<?php
/**
 * Classe del singolo Movie
 */
class Movie{
    public $title;
    public $poster;
    public $description;
    public $genre;
    public $timeLenght;

    /**
     * Costruttore del singolo Movie
     * @param $title of the created Movie
     * @param $poster of the created Movie
     * @param $description of the created Movie
     * @param $genre of the created Movie
     * @param $timeLenght of the created Movie
     * 
     */
    function __construct($_title, $_poster, $_description, $_genre, $_timeLenght){
            $this -> title = $_title;
            $this -> poster = $_poster;
            $this -> description = $_description;
            $this -> genre = $_genre;
            $this -> timeLenght = $_timeLenght;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
</body>
</html>