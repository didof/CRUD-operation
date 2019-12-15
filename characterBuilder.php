<!DOCTYPE html>
<html>
<head>
<title>Character Builder</title>
</head>
<body>
<?php

class Character {
    public $name;
    public $gender;
    private $class;
    private $level;

    function __construct($name, $gender, $class, $level){
        $this->name = $name;
        $this->gender = $gender;
        $this->class = $class;
        $this->level = $level;
    }

    function getClass(){
        return $this->class;
    }

    function setClass($newClass){
        if($newClass == "warrior" || "archer" || "mage" || "cleric" || "Knight") {
                $this->class = $newClass;
        } else {
            echo "Please, insert a proper class.";
        }
    }

    function getLevel(){
        return $this->level;
    }

    function setLevel($newLevel){
        if(is_numeric($newLevel)){
            $this->level = $newLevel;
        } else {
            echo "Please, insert a number.<br />";
        }
        
        
    }

} //close class Character

$fra = new Character("Prostagma", "M", "archer", "4");
echo "My name is " . $fra->name . ".I'm a " . $fra->getClass() . ". My level is " . $fra->getLevel();
echo "<br>";
$fra->setLevel("fra");
echo $fra->getLevel();


?>
</body>
</html>