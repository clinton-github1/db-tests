<?php

include "header.php";

?>


      <div class="form">
      	
<div class="admin">
	
<h1>Administrator</h1>

<div>
  <form method="post" action="admin_log.php">
    <label for="admin_name">Admin_Name</label>
    <input type="text" id="adm_name" name="admin_name" placeholder="Admin user name.." required>

    <label for="admin_pass">Password</label>
    <input type="Password" id="Password" name="admin_pass" placeholder="Admin Password.." required>
  
    <input type="submit" value="LOGIN" name="adm_log">
  </form>
</div>



<h1>Contacts</h1>

<div class="contacts">
<i class="ion-iphone icon"></i><b>0141 249 0641</b><br><br>
<i class="ion-ios-email-outline icon"></i><a href="" class="cntct"><b>hello@cohesiondigital.co.uk</b></a><br><br>
<a href="#" class="cntct"><i class="ion-social-facebook icon"></i></a>
<a href="#" class="cntct"><i class="ion-social-instagram icon"></i></a>
<a href="#" class="cntct"><i class="ion-social-twitter icon"></i></a>
<a href="#" class="cntct"><i class="ion-social-linkedin icon"></i></a>

</div>



</div>


<div class="user">
	<h1>SIGN UP  OR <a href="user_login.php">LOGIN HERE</a></h1>

<div>
  <form action="client.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your First name.." required>

     <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your Last name.." required>

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    <label for="password">Password</label>
    <input type="password" id="password" name="pass" placeholder="Create a password.." required>

    <label for="cpass">Confirm Password</label>
    <input type="password" id="password" name="cpass" placeholder="Confirm the password.." required>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Kenya">Kenya</option>
      <option value="UK">UK</option>
      <option value="USA">USA</option>
    </select>

   <!-- <label for="disease">Disease</label>
    <select id="disease" name="disease">
      <option value="MUMPS-1">Mumps1</option>
      <option value="MUMPS-2">Mumps2</option>
      <option value="TYPHOID">Typhoid</option>
       <option value="MALARIA">Malaria</option>
    </select>-->
  
    <input type="submit" value="Submit" name="inquiry">
  </form>
</div>


</div>

      </div>



      </div>
      
  </body>
</html>