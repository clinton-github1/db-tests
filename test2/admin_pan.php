<?php 
session_start();
?>

<?php

include "header.php";

?>


      <div class="form">
      	
<div class="admin_pan">
	
<h1>Administrator<div class="return"><a href="index.php" style="color: orange">HOME</a></div></h1>

<div>
  <form action="disease_add.php" method="post">


    <label for="disease">Disease_Name</label>
    <input type="text" id="disease" name="disease" placeholder="Enter Disease Name.." required>


    <label for="description">Disease Description</label>
    <textarea  maxlength="100000" id="description" name="description" placeholder="Write about the disease.." style="height:18%" required></textarea>

    <label for="treatment">Treatment</label>
    <textarea maxlength="100000" id="treatment" name="treatment" placeholder="Describe Treatment.." style="height:18%" required></textarea>
    <input type="submit" value="SUBMIT" name="disease_add">
  </form>
</div>

</div>

      </div>
      
  </body>
</html>