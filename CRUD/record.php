<?php
   include("db.php");
 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>
</head>
<body>
    <h1 style="margin-left:100px;">Record</h1>
    <table style="border:2px solid black">
        <tr style="color:blue">
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>CNIC</th>
        </tr>
        <?php
        $check="SELECT * FROM JOB";
        $GO=mysqli_query($attach,$check);
        $run=mysqli_num_rows($GO);
     //    echo $run;
     //    $run2=mysqli_fetch_row($GO);
     //    echo $run2[3];
     // $run3=mysqli_fetch_all($GO);
     // echo $run3[2][3];
     // $run4;
     while($row=mysqli_fetch_array($GO))
     {
          echo "<tbody>
                 <tr>
                     <td>".$row['id']."</td>
                     <td>".$row['name']."</td>
                     <td>".$row['mobile']."</td>
                     <td>".$row['CNIC']."</td>
                     <td>";
                
        ?>
        <a href="view.php?unique_id=<?php echo $row['id'] ?>">View</a>
        <a href="update.php?unique_id=<?php echo $row['id'] ?>">Update</a>
        <?php
        echo "</td>";
        echo "</tr>";
        echo "</tbody>";
         }
        ?>
        
    </table>
    <br>
    <form action="sendmail.php" method="">
    <button name="send">Send Mail</button>
    </form>
    
</body>
</html>