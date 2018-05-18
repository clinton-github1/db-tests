<?php



class Disease {




//var $Code;
//var $Name;
//var $Description;
//var $Treatment;



//show all diseases, their descriptions and treatments
function showDiseases(){

	include "connect_db.php";


$query="select * from disease";
$result= mysqli_query($con, $query);


while ($row= mysqli_fetch_assoc($result)) {


$Code= $row['Code'];
$Name= $row['Name'];
$Description= $row['Description'];
$Treatment= $row['Treatment'];



echo $Code . "::";
echo $Name . "<br>" . "<br>";
echo $Description . "<br>" . "<br>";
echo $Treatment . "<br>" . "<br>";
	# code...
}

}


//display the results of the selected disease


function disease_fetch (){

include "connect_db.php";

			$query="SELECT * FROM disease";
					$result= mysqli_query($con, $query);

					while($row = mysqli_fetch_assoc($result)){

                         
						$Name= $row['Name'];

						echo "<option value='$Name'>$Name</option>";

					}
}
}



//$disease= new Disease();

//echo $disease->Code;


//$disease->showDiseases();



?>