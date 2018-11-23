
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
  <body  onload="myFunction()">
<div id="header" align="center"></div>

  <form class="blog" name="Blogform" method="post" action="DATABASE.php"> 
             <table align="center" class="table" width="450px">
	               <tr>
				             <td>
							 <label for="name">name</label>
							 </td>
				             <td>
							 <input type="text" name="name" maxlength="50" size="31" />
							 </td>
				   </tr>
	
	               <tr>
				             <td>
							 <label for="title">title</label>
							 </td>
				             <td>
							 <input type="text" name="title" maxlength="50" size="31" />
							 </td>
				   </tr>
	          

			       <tr>
				             <td>
							 <label for="email">email</label>
							 </td>
				             <td>
							 <input type="text" name="email" maxlength="50" size="31" />
							 </td>
				   </tr>
	               
				   <tr>
				             <td id="btn">
							 <label for="bericht">bericht</label>
							 </td>
				             <td id="blog_b">
							 <textarea  name="bericht" cols="28" rows="9"></textarea>
							 </td>
				   </tr>
	
	 
	         </table>
			 
			 <input id="submit"  onclick="myFunction()"  type="submit" />
			
  </form>
  
  
  
  
  <!-- ======================BLOG================================= -->
  
<button id="btn3" onclick="window.location.href='DATABASE.php'">Continue</button>

<script>
function myFunction() {
    var x = document.getElementById("blog5").textContent;
    var x1 = document.getElementById("blog7").textContent;
    
    document.getElementById("blog3").innerText= x1; 
}
</script>







  

   <!-- ===================================== -->
  

  
<!-- ===================================== -->
  

   

   <form class="blog2" >
  
           <table   border="4px" style="width:200px; line-height=30px;">
		     <colgroup>
    
    <col span="1"style="background-color:#FFDC7B" >
	<col style="background-color:white" >
  </colgroup>
				   <tr>
				       <th colspan="1"><h2>Blog</h2></th> 
					     <td colspan="2" id="blog3"></td>
				   </tr>
				   
				  
				   
				   
           </table>
   
</form>

  <!-- ======================================================= -->


 <div class="blog" >

  
  <form   name="Blogform" style="display: none;" > 

  
  
           <h1 id="Blog_in" > THE BLOG</h1>
	
   <table id="data1" align="center" border="4px" style="width:600px; line-height=30px;"  >
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
			<tr>
                    <td class="input1"></td>
                    <td></td>
					<td></td>
                    <td></td>
					<td></td>
                    
                </tr>
			
			
			
        </thead>
        <tbody>
		
        <?php
 

            
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_blog";
$servername = "localhost";
$conn = mysqli_connect($servername, $username, $password);
$sqlCommand1= "use oreiph_blog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand1);
			
			


echo "<br>";		
			
		
	
// =========================retreiving from database==================== 		
$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			while ($row = $sqlUitvoer -> fetch_assoc())
             {
            ?>
                <tr >
                    <td id="blog5"><?php echo $row['ID']?></td>
                    <td><?php echo $row['name']?></td>
					<td ><?php echo $row['title']?></td>
                    <td id="blog6"><?php echo $row['email']?></td>
					<td id="blog7"><?php echo $row['blog']?></td>
                    
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
</div>


  <div id="footer" align="center"></div>
  </body>
</html>