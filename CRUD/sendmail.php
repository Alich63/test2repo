<?php

$receiver="pbcoin666@gmail.com";
$subject="Simple Email Via Php Test Check";
$body="This is the test mail send by php script in 2020 youtube";
$sender="From: ali786trptv@gmail.com";

   if(mail($receiver,$subject,$body,$sender))
    {
    echo "Send Successfully Email::=>" .$receiver;
    } 
   else
   {
    Echo "Not Send Mail";
   }

?>

