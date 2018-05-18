<?php

//include  "function_disease_fetch.php";
include "classes.php";

?>



<?php

include "header.php";

?>
   
      <a href="user_welcome.php" style="color: #ffffff; font-size: 120%; right: 30%; position: fixed;">BACK</a><br><br>


<div >


<?php


//diseases_all();

$disease= new Disease();

$disease-> showDiseases();



?>


</div>
 </div>
 </body>
 </html>
