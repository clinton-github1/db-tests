<?php

class Livingthings{

public $grow="Can change in size and height";
public $respire="Can produce energy";
public $nutrition="Can feed";
public $move="Can change in position e.g plants like sunflower can twist to face the direction of the sun";
public $reproduce="Can produce offsprings";
public $exctreate="Can remove unwanted after-metabolism products";



// function __construct(){

//    echo  $this->grow . "<br><br>";
//     echo $this->respire . "<br><br>";
//    echo  $this->nutrition . "<br><br>";
//     echo $this->move . "<br><br>";
//     echo  $this->reproduce . "<br><br>";
//     echo $this->exctreate . "<br><br>";



// }



function generalCharacters(){

   echo  $this->grow . "<br><br>";
    echo $this->respire . "<br><br>";
   echo  $this->nutrition . "<br><br>";
    echo $this->move . "<br><br>";
    echo  $this->reproduce . "<br><br>";
    echo $this->exctreate . "<br><br>";



}




}

class Animals extends Livingthings{

    protected $movement="Can move from one place to another";
    protected $reproduction="Can give rise to offsprings";
    public $growth="Can increase in size and height";
    protected $respiration="Can respire to get energy";

function getAnimalsProperties(){


	echo $this->movement . "<br><br>";

echo $this->growth . "<br><br>";

echo $this->respiration . "<br><br>";

echo $this->reproduction . "<br><br>";

echo "end of animals" . "<br><br>";

}


}




class Humans extends Animals{


   protected $hands="They have 2 hands";
   public $legs="They have two legs";
   //protected $speech="talk";
   protected $communication="Can communicate through speech";
   protected $hold="Able to hold thing by their hands";
   protected $walk="They use the legs to walk";


   function getHumanTraits(){

     echo $this->hands . "<br><br>";
     
     echo $this->communication . "<br><br>";
     echo $this->hold . "<br><br>";
     echo $this->walk . "<br><br>";
     echo $this->legs . "<br><br>";


   }


}


class Trainee extends Humans{



      static $id="Has ID numer 31868647";
      private $Name="Nam: Clinton Were";
      private $weight="Mass: 70kg";
      private $race="Race: African";
      private $gender="Gender: Male";



      function getClinton(){

       
      //$this->id;
      echo "<br><br>" . $this->Name . "<br><br>";
      echo $this->weight . "<br><br>";
      echo $this->race . "<br><br>";
      echo $this->gender . "<br><br>";


      }







}



echo '<h1><style="color:black fontsize:25px">ALL LIVING THINGS(PLANTS AND ANIMALS)</style></h1>';
$livingthings= new Livingthings();
echo $livingthings->generalCharacters();

echo '<h1><style="color:black fontsize:25px">ALL LIVING THINGS:ANIMALS</style></h1>';
$animal= new Animals();
echo $animal-> getAnimalsProperties();

echo '<h1><style="color:black fontsize:25px">ALL LIVING THINGS-ANIMALS: Human Being</style></h1>';
$human= new Humans();
echo $animal-> getAnimalsProperties();


echo '<h1><style="color:black fontsize:25px">ALL LIVING THINGS-ANIMALS: Human Being: Trainee</style></h1>';
$clinton=new Trainee();
// Trainee:getClinton();
// echo Trainee::$this->Name;


echo Trainee::$id;
echo $clinton->getClinton();





?>