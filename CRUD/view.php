<?php
include("db.php");
$v_id=$_GET['unique_id'];
$query="select * from job where id='$v_id'";
$ok=mysqli_query($attach,$query);
$run=mysqli_fetch_array($ok);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <form >
        ID
        <input type="number" value="<?php echo $run['id'] ?>" readonly><br>
        Name
        <input type="text" value="<?php echo $run['name'] ?>" readonly><br>
        Mobile
        <input type="number" value="<?php echo $run['mobile'] ?>" readonly><br>
        CNIC
        <input type="number" value="<?php echo $run['CNIC'] ?>" readonly><br>
    </form>
    
</body>
</html>