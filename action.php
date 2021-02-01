<html>
   <head>
      <title>Connecting MySQLi Server</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'Advance_JavaScript';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          if(!$conn)
          {
             echo 'Connected failure<br>';
          } 
          else
          { 
		  // echo ' Connection Connected successfully <br>';
          }
			 

      $first_name = $_POST['fname'];
      $last_name = $_POST['lname'];
      $father_name = $_POST['frname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $password = md5($password);

      $sql = "INSERT INTO practice (First_Name, Last_Name, Father_Name, Email, Password)
              VALUES ('$first_name','$last_name','$father_name','$email','$password')";
              if (mysqli_query($conn, $sql))
              {
               echo "Insert Data successfully";
              }
              else
              {
               "Error Insert Data";
              }

         mysqli_close($conn);
           
      ?>
      
   </body>
</html>
