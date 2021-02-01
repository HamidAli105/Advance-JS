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

      
   $sql = "SELECT * FROM practice";
if ($result = mysqli_query($conn, $sql)) 
{
    // echo "connected";
} 
else 
{
    echo "error connected";
}
echo "<table style=border:solid>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) 
    {
        // echo $row["id"] . "<br>";
        echo "First Name: ". $row["First_Name"] . "<br>";
        echo "Last Name: ". $row["Last_Name"] . "<br>";
        echo "Father Name: ". $row["Father_Name"] . "<br>";
        echo "Email: ". $row["Email"] . "<br>";
        echo "Password: ".$row["Password"] . "<br>";
    }
  } 
  else
  {
    echo "Error fetchin data";
  }
         mysqli_close($conn);

      ?>
      
   </body>
</html>
