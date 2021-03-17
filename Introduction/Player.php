<?php
//  A player class using constructor.
class Player{
    public $name;
    public $goals;
    public $team;
    function __construct($name, $goals, $team){
        $this->name=$name;
        $this->goals=$goals;
        $this->team=$team;
    }
    
    function get_name(){
        return $this->name;   
    }
    function get_goals(){
        return $this->goals;
    }
    function get_team(){
        return $this-> team;
    }
    
}
// Instances of Player Class
$messi= new Player('Messi', 700, 'Bacelona');
$hazard=new Player("Hazard", 251, 'Real Madrid');

echo $messi->get_name() , " is a player of ", $messi->get_team() , " and has ", $messi->get_goals(), " goals .";
echo "<br>";
echo $hazard->get_name() , " is a player of ", $hazard->get_team() , " and has ", $hazard->get_goals(), " goals .";

?>