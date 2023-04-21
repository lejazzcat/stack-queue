<?php
//create class
class Stack {
    public $Array = [];

    //adding values to array
    function Addvalue ($value1, $value2, $value3, $value4){
        array_push($this->Array,$value1, $value2, $value3, $value4);    
    }

    //removing last in value
    function Removevalue (){
        array_pop($this->Array);
    }

    //return array value
    function Showvalue (){
        print_r($this->Array);
    }
}

//assign values, eggsecute
$Values = new Stack;
    $Values->Addvalue("ichi", "ni", "san", "nya");
    $Values->Showvalue();
    $Values->Removevalue();
    $Values->Showvalue();

?>