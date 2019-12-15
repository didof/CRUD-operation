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
    private $level;

    function __construct($name, $gender, $level){
        $this->name = $name;
        $this->gender = $gender;
        $this->level = $level;
    }

    // Basic skills
    function move($velocity) {
        switch($velocity) {
            case "crawl":
                echo $this->name . " approaches the enemy from the back.<br>";
            break;
            case "walk":
                echo $this->name . " reaches the enemy striding.<br>";
            break;
            case "run":
                echo $this->name . " charges the felon!<br>";
            break;
            default:
                echo $this->name . " stumbles in his feets - pathetic.<br>";
        }
    } // close move()
    
    function swordAttack($type) {
        switch($type) {
            case "blow":
                echo "You tried!<br>";
            break;
            case "upright":
                echo "Opsie...<br>";
            break;
            case "stick":
                echo "The enemy stoles your weapon!<br>";
            break;
            default:
                echo "Hold your sword as it should be!<br>";
        }
    } // close swordAttack()

    function getLevel(){
        return $this->level;
    }

    function setLevel($newLevel){
        if(is_numeric($newLevel)){
            $this->level = $newLevel;
        } else {
            echo "Please, insert a number.<br>";
        }
    }

} //close Character

// Classes
class Warrior extends Character {
    function swordAttack($type) {
        switch($type) {
            case "blow":
                echo "Top-down! Enemy on the ground.<br>";
            break;
            case "upright":
                echo "Right under the chin!<br>";
            break;
            case "stick":
                echo "Your lunge penetrates the enemy's heart!<br>";
            break;
            default:
                echo "I do not know what you've done, but you sure did it well!<br>";
        }
    }
}

// Introducing the contestants
$fra = new Character("Francesco", "male", "1");
$prostagm4 = new Warrior("Postagm4", "coder", "2");

echo ">>It's " . $fra->name . " turn.<br>";
echo $fra->move("walk");
echo $fra->swordAttack("launch_weapon");

echo ">>It's " . $prostagm4->name . " turn.<br>";
echo $prostagm4->swordAttack("blow");

?>
</body>
</html>