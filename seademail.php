<?php

  if (isset($_POST['seadmail'])) {

      $name = addcslashes($_POST['name']);
      $email = addcslashes($_POST['email']);
     $namec = addcslashes($_POST['namec']);
     $deta = addcslashes($_POST['deta']);
      $message = addcslashes($_POST['message']);

     $to = "midtownthai@themidtownthai.com";
      $to = "do65770@gmail.com";

     $name = $name;
     $namec = $namec;
     $namedeta = $deta;
     $message = $message;

     $header = "from : " . $email . " \r\n";
     $header .= "MIME-Version: 1.0\r\n";
     $header .= "Conten-type: text/html\r\n";

     $retval = mail($to,$deta,$message,$header);

     if ($retval) {
       echo "Email Done!";
     }  else {
     echo "Email Do not Sead";
     }
 }



?>
