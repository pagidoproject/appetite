<?php

//make connection
$db=mysqli_connect('localhost','root','','appetite');
$results = mysqli_query($db, "SELECT * FROM cform"); 
?>

<!DOCTYPE html>  
 <html>  
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Search Here</h2>  
                               
                <br /><br />  
                <div align="center">  
                     <input type="text" name="search" id="search" class="form-control" />  
                </div>  
                <br /><br />  
                <div class="table-responsive" >  
                     <table class="table table-bordered" id="cont">  
                            
               <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL ID</th>
    <th>CONTACT</th>
    <th>SUBJECT</th>
    <th>MESSAGE</th>
    
  </tr>
    
  <?php

  while($cform=mysqli_fetch_assoc($results)){

    echo "<tr>";

    echo "<td>".$cform['Id']."</td>";

    echo "<td>".$cform['Name']."</td>";

    echo "<td>".$cform['Email']."</td>";

    echo "<td>".$cform['Contact']."</td>";

    echo "<td>".$cform['Subject']."</td>";

    echo "<td>".$cform['Message']."</td>";

    echo "</tr>";

  } //end while
  ?>
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#cont tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  
