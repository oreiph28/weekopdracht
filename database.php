<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="za, 17 nov 2018 16:17:31 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    <link rel="stylesheet" href="database.css" />

  </head>
  <body>


  
  <!--======================================Time Date================================-->
<div id="Div_Time">
 <font color="#40FF1E">
 
 
 <h3>Database:</h3>
 
 <!--==Database==-->
 <p id"database">Database:</p>
   
 <!--=== Date====-->
 <h3>Date:</h3>
 <p id="date"></p>
 
 <!--===Time=====-->
 <h3>Time:</h3>
 <p id="time"></p>
 
 
   <script>
     var myVar = setInterval(myTimer, 1000);
     function myTimer() {
     var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
	document.getElementById("date").innerHTML = d.toLocaleDateString();  
                     }					
   </script>
   
   
 
 </font>

</div>
<!--====================================END Time Date================================-->


   <script>
   document.getElementById("database1");
    var myData = database1.textContent;
    document.getElementById("database").innerHTML = myData;
	                			
   </script>
   
   <p id="database1" style="display: none;">oreiph_webshop</p>
   


   
   
   <!--====================================Ping Script================================--> 
   <div id="Ping" style="display: none;">
   <font color="#40FF1E">
   
  <?php
   $output = shell_exec('ping 192.168.2.4');
   echo "Shell: ". $output;

  ?>
  </font>
  </div>
   
     <!--====================================END Ping  Script================================--> 
  
  
   
   
   
   
   
   


 <!--====================================Database Connection================================-->
<font color="#40FF1E">
  <p id="p1" align="center">
  Connecting to database
  and retreiving data:
  </p>
  </font>
  
  
  
  
   <!--====================================Connection Script================================-->
 <div id="Connection" style="display: none;">
  <font color="#40FF1E">

<?php
$i=1;
//while($i==1){
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_webshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else
{
    echo "DATABASE CONNECTED!";
    echo  " ";
	echo  " ";
	echo "Retreived from ". $dbname;
	echo  ":";
	echo " <br>";
	echo " <br>";

	$sql = "SELECT ID, Category ,Product ,Price, Description FROM products ";
	$result=mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {

   while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Category"]. " Price " . $row["Price"]. " Product " . $row["Product"].  " Description " . $row["Description"]. "
        <br>";
                                             }
                                  } 
	else 
								   
				{
    echo "0 results";
                 }

mysqli_free_result($result);
mysqli_close($conn);

 echo " <br>";
    echo "Database closed successfully  <br/>";
 	echo "\n\r\f";
	echo " <br />";
 	echo " <br />";
	echo " <br />";
	echo "Awaiting new data!  <br/>";

printf ("%s \n",$row["ID"],$row["Category"],$row["Price"],$row["Product"],$row["Description"]);



 }
?>

</font>

</div>

<!--====================================END Connection Script================================-->


<!--====================================END Connection Script================================-->


 <font color="#40FF1E">

 <div id="Div_Connection" align="center">
<p id="p2">
Please wait a moment!
</p>
</div>




 <font color="#40FF1E">

 <div id="Div_Connection1" align="center">
<p id="p3">
Retreiving Host Data!
</p>
</div>




 <div id="Div-Ping" align="center">
<p id="p4">
Pinging Host!
</p>
</div>

</font>






<font color="#40FF1E">

 <h1 align="center" id="demo" style="font-size:16px;"><br/></h1>
<script>
// Set timer
var countDownDate =4;
// Update the count down every 1 second
var x = setInterval(function() {
countDownDate =countDownDate-1;
// Display the result in the element with id="demo"
//document.getElementById("demo").innerHTML = countDownDate;

var para = document.createElement("p");
var node = document.createTextNode("Connecting!");
para.appendChild(node);

var element = document.getElementById("p2");
element.appendChild(para);




// If the count down is finished, write some text 
 if (countDownDate<0) {
 clearInterval(x);
 document.getElementById("p1").innerHTML = "You are connected to the server!";

  var div3 = document.getElementById("Connection");
    var myData = Connection.textContent;
	//document.getElementById("div1").innerHTML = myData,"<br/>";
	document.getElementById("p2").innerHTML = myData;
	
	

	
  }
}, 1200);






</script>

</font>




<script>
var countDownDates =3;
// Update the count down every 1 second
var s = setInterval(function() {
countDownDates =countDownDates-1;

var para = document.createElement("p");
var node = document.createTextNode("Retreiving!");
para.appendChild(node);

var element = document.getElementById("p3");
element.appendChild(para);

 if (countDownDates<0) {
 clearInterval(s);

 
	var x3 = location.origin;
var para = document.createElement("p");
var node = document.createTextNode("Url      :");
var node1 = document.createTextNode(x3);
para.appendChild(node);
para.appendChild(node1);
var element = document.getElementById("p3");
element.appendChild(para);
	
	
	
var x1 = location.pathname;
var para = document.createElement("p");
var node2 = document.createTextNode("Location:    ");	
var node3 = document.createTextNode(x1);
para.appendChild(node2);
para.appendChild(node3);
var element = document.getElementById("p3");
element.appendChild(para);

	var x2 = location.origin;
var para = document.createElement("p");
var node4 = document.createTextNode("Webpage location:");
var node5 = document.createTextNode(x2);
para.appendChild(node4);
para.appendChild(node5);
var element = document.getElementById("p3");
element.appendChild(para);
	





  }
}, 2000);


</script>


  </body>
</html>