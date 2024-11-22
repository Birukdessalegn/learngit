<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabl{
            background:green;
            width: 70%;
            height:100%;
            padding:2px;
            margin:2px;
            border: 2px solid black;
            text-align: center;
        }.tabl3{

        }
        #tth td{
            border: 2px solid black;  
            background:black;
            font-size:70px; 
        }
        #ttbody{
            background:grey;
        }

    </style>
</head>
    <?php
    include ('header_admin.php');
    include('Config.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_SESSION['id'];;
    }
    ?>
<body>
                <center>
    <h1>All Association Managers Data! You Can Edit All Data! </h1> </center>
    <table class="tabl">
        <th id="tth"> 
            <td>ID Number</td>
            
        </th>
        <form action="StoreToDb_Association.php" method="POST">
        
        <tbody id="ttbody">
            <?php
            $roll_start=1;
    $sql = "SELECT * FROM association WHERE id=$id";
    $result = $db->query($sql);
   if ($result->num_rows > 0) 
   {
      // output data of each row

      while($row = $result->fetch_assoc()) {
        ?>
        <tr class="tabl3">
        <td>First Name</td><td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"> </td> </tr>
        <tr><td>Last Name</td> <td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"> </td>
        <td>Phone Number</td><td><input type="number" name="phonenumber" value="<?php echo $row['phonenumber']; ?>"></td></tr>
        <tr><td>Email</td> <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
           <td>UserName</td><td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>    </tr>
        <tr><td>Gender</td><td><input type="text" name="gender" value="<?php echo $row['gender'] ; ?>"></td></tr>

              <?php
        $roll_start=$roll_start+1;
      }
    } 
   
        // </tbody>
        // </table>
    //</center>
        ?>
        <center><input type="submit" valeu="Enter"></center>          
        </form>
<?php

?>  
 </body>
</html>

