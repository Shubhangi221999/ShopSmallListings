
<?php
 
 //connect to mysql server with username password and database name
 $connect = mysqli_connect("localhost", "root","july221999", "auction");
  
 // Check connection
 if ($connect === false) {
     die("Opps Unable to connect " . mysqli_connect_error());
 }
  
 // create query to select data
 $sql = "SELECT * FROM shop_register WHERE Type='Home_Decor'";
 if ($result = mysqli_query($connect, $sql)) {
     if (mysqli_num_rows($result) > 0) {
         echo '<table border="1px">';
         echo "<tr>";
         echo "<th>Title</th>";
         echo "<th>Type</th>";
         echo "<th>Social Media Link</th>";
         echo "<th>City</th>";
         echo "<th>State</th>";
         echo "<th>State</th>";
         echo "<th>Ratings</th>";
         echo "</tr>";
         while ($row = mysqli_fetch_array($result)) {
             $url=$row['social_media_link'];
             echo "<tr>";
             echo "<td>" . $row['Title'] . "</td>";
             echo "<td>" . $row['Type'] . "</td>";
             echo "<td>" . "<a href=".$row['social_media_link'].">URL</a>". "</td>";
             echo "<td>" . $row['City'] . "</td>";
             echo "<td>" . $row['State'] . "</td>";
             echo "<td>" . $row['Rating'] . "</td>";
             echo "<td>" . "<img src='dbimg/".$row['Image']."'width=100px height=100px>". "</td>";
             echo "</tr>";
         }
         echo "</table>";
         // Free result set
         mysqli_free_result($result);
     } else {
         echo "No records found";
     }
 } else {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
 }
  
 // Close connection
 mysqli_close($connect);
 ?>