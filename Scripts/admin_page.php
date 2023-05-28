<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>


   

</head>
<body style="margin:50px;">
   
<div class="container">

   <div class="content" style="margin-top: -400px;">
      
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
<br>
     
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>
<table class="table" style="margin-top: -450px;">
<thread>
   <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Operation</th>
   </tr>
</thread>


<tbody>
   <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_db";

    // Create connection
			$connection = new mysqli($servername, $username, $password, $database);

         // Check connection
      if ($connection->connect_error) {
         die("Connection failed: " . $connection->connect_error);
      }

        // read all row from database table
			$sql = "SELECT * FROM user_form";
			$result = $connection->query($sql);

         if (!$result) {
				die("Invalid query: " . $connection->error);
			}

          // read data of each row
			while($row = $result->fetch_assoc()) {
            echo"<tr>

                  <td>" . $row["id"] . "</td>
                  <td>" . $row["name"] . "</td>
                  <td>" . $row["email"] . "</td>
                  <td>
                    <button class = 'btn btn-danger' ><a href='delete.php?id=$row[id]'class = 'text-light'>Delete</a></button>
                  </td>
               </tr>";
   
         }
?>
</tbody>
</table>


</body>
</html>