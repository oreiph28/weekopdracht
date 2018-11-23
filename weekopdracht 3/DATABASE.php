
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="ORNELIO REIPH">
    <meta name="dcterms.created" content="di, 20 nov 2018 14:45:23 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>BLOG</title>
       <link rel="stylesheet" href="blog.css">
  
  </head>
  <body>
  <div id="header" align="center"></div>

  <form  class="blog" name="Blogform" method="post" > 

       
            <h1 id="by_blog" > THE BLOG</h1>
	
   <table id="data1" align="center" border="4px" style="width:600px; line-height=30px;"  method="post" action="blog.php">
         <colgroup>
    <col span="1" style="background-color:red">
    <col span="3"style="background-color:#FFDC7B" >
	<col style="background-color:white" >
  </colgroup>
		<thead>
            <tr>
                       <th >ID</th>
				       <th >Name</th>
				       <th>Title</th>
				       <th>Email</th>
				       <th>Blog</th>
            </tr>
        </thead>
        <tbody>
		
        <?php
 
$name = $_POST["name"];
$title = $_POST["title"];
$email = $_POST["email"];
$blog = $_POST["bericht"];
  
 
            
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_blog";
$servername = "localhost";
$conn = mysqli_connect($servername, $username, $password);
$sqlCommand1= "use oreiph_blog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand1);
			
			
	
//=========================sending to database=========================

$sqlCommand = "INSERT INTO blog (name, title, blog,email)
VALUES ('$name', '$title', '$blog', '$email')";
//$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

 
if ($conn->query($sqlCommand) === TRUE) 
{
 $last_id = $conn->insert_id;   
 echo "New record created successfully with ID: ". $last_id;
} 
else 
{ 
echo "Error: " . $sqlUitvoer . "<br>" . $conn->error; 
} 

echo "<br>";		
			
		
	
// =========================retreiving from database==================== 		
$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			while ($row = $sqlUitvoer -> fetch_assoc())
             {
            ?>
                <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['name']?></td>
					<td><?php echo $row['title']?></td>
                    <td><?php echo $row['email']?></td>
					<td><?php echo $row['blog']?></td>
                    
                </tr>

            <?php
           }
            ?>
            </tbody>
     </table>
   
   
   
   <?php
$conn->close();
?>
   
   
        </form>
  

  
  <div class="button">
    
 

  </font>
  </div>
  
  
  

     <div id="footer1" align="center"></div>

	 
	
	 
 </body>
</html>