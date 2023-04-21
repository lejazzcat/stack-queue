<?php
//create class
class Stack {
    public $Array = [];

    //adding values to array
    function Addvalue ($value1, $value2, $value3, $value4){
        array_push($this->Array,$value1, $value2, $value3, $value4);    
    }

    //removing last in value
    function Removefirst (){
        array_shift($this->Array);
    }

    //return array value
    function Showvalue (){
        print_r($this->Array);
    }

    function Showlength (){
        $length = count($this->Array);
        echo ("\n"."The current array length is: ".$length);
    }
}

//assign values, eggsecute
$Values = new Stack;
    $Values->Addvalue("ichi", "ni", "san", "nya");
    $Values->Showvalue();
    $Values->Removefirst();
    $Values->Showvalue();
    $Values->Showlength();
?>