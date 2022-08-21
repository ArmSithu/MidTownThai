<?php

  if (isset($_POST['seadmail'])) {

      $name = addcslashes($_POST['name']);
      $email = addcslashes($_POST['email']);
     $nc = addcslashes($_POST['namec']);
     $na = addcslashes($_POST['namedeta']);
      $message = addcslashes($_POST['message']);

     $to = "midtownthai@themidtownthai.com";
      $to = "do65770@gmail.com";

     $name = $name;
     $email = $email;
     $namec = $nc;
     $namedeta = $na;
     $message = $message;

     $header = "from : " . $email . " \r\n";
     $header .= "MIME-Version: 1.0\r\n";
     $header .= "Conten-type: text/html\r\n";

     $retval = mail($to,$to,$message,$header);

     if ($retval) {
       echo "Email Done!";
     }  else {
     echo "Email Do not Sead";
   }
 }



?>
