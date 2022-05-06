<?php
/**
 * Classe del singolo Movie
 */
class Movie{
    protected $title;
    public $poster;
    public $description;
    public $genre;
    protected $timeLenght;

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
            $this -> setTitle($_title);
            $this -> poster = $_poster;
            $this -> description = $_description;
            $this -> genre = $_genre;
            $this -> setTimeLenght($_timeLenght);
    }


    public function setTitle($_title){
        if(is_string($_title) && $_title != null && !strlen($_title) == 0){
            $this -> title = $_title;
        }
    }

    public function setTimeLenght($_timeLenght){
        if(is_string($_timeLenght) && $_timeLenght != null && strlen($_timeLenght) >= 4 && strlen($_timeLenght) != 0){
            $this -> timeLenght = $_timeLenght;
        }
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
    <div>
        <p>
            <?php 
            $ciao = new Movie( 'Batman' , 'https://www.cinematografo.it/wp-content/uploads/2022/01/batman.jpg' , 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum ut recusandae quidem libero sint voluptates cupiditate', 'action', '2h:30m');

            var_dump($ciao)
            ?>
        </p>
    </div>
</body>
</html>