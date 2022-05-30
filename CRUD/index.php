<?php
include("db.php");
if(isset($_REQUEST['sub']))
{
    $Nam=$_REQUEST['nam'];
    $phon=$_REQUEST['phone'];
    $cnic=$_REQUEST['cnic'];
    $input="insert into job(name,mobile,CNIC)values('$Nam','$phon','$cnic')";
    $go=mysqli_query($attach,$input);
    if($go)
    {
             echo "Insert Success";
    }
    else
    {
        echo "Insert Not";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        NAME
        <input type="text" name="nam" value="" id="" placeholder="Name" required><br>
        Mobile
        <input type="number" name="phone" value="" id="" placeholder="Mobile" required><br>
        CNIC
        <input type="number" name="cnic" value="" id="" placeholder="CNIC" required><br><br>
        <button type="submit" name="sub" id="">INSERT</button>
    </form>
    <form action="record.php" method="">
        <button type="submit" name="record" id="">Check Record</button>
    </form>
    

</body>
</html>
