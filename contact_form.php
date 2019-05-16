
                      <?php
                      include("dbconnect.php");
                      $Name = $_POST["Name"];
                      $Email = $_POST["Email"];
                      $Contact = $_POST["Contact"];
                      $Subject = $_POST["Subject"];
                      $Message = $_POST["Message"];

                      $query=mysqli_query($db_connect,"INSERT INTO cform (Name,Email,Contact,Subject,Message) VALUES ('$Name','$Email','$Contact','$Subject','$Message')") or die(mysqli_error($db_connect));
                    
                   mysqli_close($db_connect);
                   header("location:index.php?");
                  ?>