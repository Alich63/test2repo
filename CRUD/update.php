<?php
include("db.php");
$v_id=$_GET['unique_id'];
$query="select * from job where id='$v_id'";
$ok=mysqli_query($attach,$query);
$run=mysqli_fetch_array($ok);

if(isset($_REQUEST['update']))
{
    $v_id=$_GET['unique_id'];
    $Nam=$_REQUEST['nam'];
    $phon=$_REQUEST['phone'];
    $cnic=$_REQUEST['cnic'];
    $query="update job set name='$Nam',mobile='$phon',CNIC='$cnic' where id='$v_id'";
    $ok=mysqli_query($attach,$query);
    if($ok)
    {
        echo "Update Success";
    }
    else
    {
        echo "Not Update";
    }
}
if(isset($_REQUEST['cancel']))
{
   echo "<script>location.href='record.php'</script>";
}
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
    <form  action="" method="post" >
        ID
        <input type="number" value="<?php echo $run['id'] ?>" readonly><br>
        Name
        <input type="text" value="<?php echo $run['name'] ?>" name="nam"><br>
        Mobile
        <input type="number" value="<?php echo $run['mobile'] ?>" name="phone"><br>
        CNIC
        <input type="number" value="<?php echo $run['CNIC'] ?>" name="cnic"><br>
        
        <button type="submit" name="update">Update</button>
        <button type="cancel" name="cancel">cancel</button>
    </form>
    
</body>
</html>