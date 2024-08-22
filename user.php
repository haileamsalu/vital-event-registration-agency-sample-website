<!DOCTYPE html>
<html>
 <head>
   <style>
   table tr th{
	   border:1px solid;
	   background-color:white;
	   width:90px;
   }	   
   </style>
   <title> logout </title>
  <link rel="stylesheet" href="homecss.css">
 </head>
 <body>
 <div id="loginbody">
 <div class="headlogin">
         <img src="photo/star.png">
		 <h1> FDRE IMMIGRATION AND VITAL<br> EVENT AGENCY </h1>
    </div>
	<div>
	  <center> <h1>WELCOME TO MEMBERS PAGE!</h1> </center><hr/>
	  <br>
	  <br>
	  <br>
	  <form action="" method="POST">
	     <label> CHECK FOR APPLICATION FORM:</label>
		 <input type="number" name="phonenumber" required><br>
		 <br>
		 <input type="submit" value="CHECK" name="submit">
		 <br>
		 <hr/>
	  </form>
    <?php
	$host= "localhost";
    $username= "root";
    $password= "";

    mysql_connect($host,$username,$password);
    mysql_select_db("fdre");
    if(isset($_POST["submit"]))
	{
      		
	  $phonenumber=$_POST["phonenumber"];
	  $sql="SELECT * FROM person,address WHERE person.phonenumber='$phonenumber' and address.phonenumber='$phonenumber' ";
      $result=mysql_query($sql);
	  
	  if(mysql_num_rows($result)>0) {
	  echo "<table>
	  <tr>
	  <th> DATE </th> <th>FORM-TYPE </th> <th>FIRST NAME</th> <th> MIDDLE NAME </th> <th>LAST NAME</th> <th>SEX</th> <th>PLACE OF BIRTH</th>
	  <th>DATE OF BIRTH  </th> <th>HEIGHT</th> <th>COLOUR OF EYE  </th> <th> COLOUR OF HAIR</th> <th>OCCUPATION</th> <th>MARITAL STATUS</th> <th>IF OTHER</th>
	  <th>PRESENTED BY</th> <th>PHONENUMBER</th> <th>REGION</th> <th>ZONE</th> <th>CITY</th> <th>KEBELE</th> <th>HOUSE NUMBER</th>
	  </tr>";
	  while($row=mysql_fetch_assoc($result))
	  {
	echo "<tr>
	  <th>".$row["date"]."         </th> 
	  <th>" .$row["applicationby"]. " </th> 
	  <th>" .$row["firstname"]. "     </th>  
	  <th>" .$row["middlename"]. "    </th>  
	  <th>" .$row["lastname"]. "      </th>  
	  <th>" .$row["sex"]. "           </th>  
	  <th>" .$row["placeofbirth"]. "  </th>
      <th>" .$row["dateofbirth"]. "   </th> 
	  <th>" .$row["height"]. "        </th> 
	  <th>" .$row["colourofeye"]. "   </th>  
	  <th>" .$row["colourofhair"]. "  </th>  
	  <th>" .$row["occupation"]. "    </th>  
	  <th>" .$row["maritalstatus"]. " </th> 
	  <th>" .$row["ifother"]. "       </th>
      <th>" .$row["presentedby"]. "   </th> 
	  <th>" .$row["phonenumber"]. "   </th> 
	  <th>" .$row["region"]. "        </th> 
	  <th>" .$row["zone"]. "          </th>  
	  <th>" .$row["city"]. "          </th>  
	  <th>" .$row["kebele"]. "        </th>  
	  <th>" .$row["housenumber"]. "   </th>	  
	  </tr>";
	     }echo "</table>";
	  }
	else{echo "no result";}}	 
   ?>	
	  <br>
	  <br>
	  <br>
	  <center><a href="php/logout.php">Logout</a></center>
	</div>
<div class="downlogin">
	  <footer>
	    <p><a href="instagram"><img src="photo/insta.jpg"></a>&nbsp<a href="twitter"><img src="photo/twitter.png"></a>&nbsp<a href="telegram"><img src="photo/tel.jpg"></a>&nbsp<a href="facebook"><img src="photo/facebook.png"></a></p>
		<p><a href="terms of use">Terms of use</a>||<a href="privacy policy">Privacy policy</a>||<a href="advert">Advertising & sponsership</a>||<a href="membership">Membership</a></p>
	    <p>powered by HS &copy 2019</p>
      </footer>	  
	</div>
	</div>
 </body>
</html>